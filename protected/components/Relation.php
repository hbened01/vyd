<?php
/*
 The Relation widget is used in forms, where the User can choose
 between a selection of model elements, that this models belongs to.

 Since version 0.8 it is able to handle BELONGS_TO, HAS_ONE and 
 MANY_MANY Relations. The Relation type is detected automatically from
 the Model 'relations()' section. 
 
 The following example shows how to use Relation with a minimal config, 
 assuming we have a Model "Post" and "User", where one User belongs 
 to a Post:
  
  <pre>
  $this->widget('application.components.Relation', array(
   'model' => 'Post',
   'relation' => 'user'
   'fields' => 'username' // show the field "username" of the parent element
  ));
  </pre>
  
  Results in a selectbox in which the user can choose between
  all available Users in the Database. The shown field of the
  Table "User" is "username" in this example. 

	You can choose the Style of your Widget in the 'style' option.
	Note that a Many_Many Relation always gets rendered as a Listbox,
	since you can select multiple Elements.
 
  'fields' can be an array or an string.
  If you pass an array to 'fields', the Widget will display every field in
  this array. If you want to show further sub-relations, separate the values
  with '.', for example: 'fields' => 'array('parent.grandparent.description')
 
  Optional Parameters:

  You can use 'field' => 'post_userid' if the field in the model
  that represents the foreign model is called different than in the
  relation
 
  Use 'foreignField' => 'id_of_user' if the primary Key of the Foreign
  Model differs from the one given in the relation.
 
  Normally you shouldn´t use this fields cause the Widget get the relations
  automatically from the relation.
   
  Use 'allowEmpty' to let the user be able to choose no parent. The
  string assigned to 'emptyString' will be displayed.
 
  With 'hideAddButton' => 'true' you can hide the 'create new Foreignkey'
  Button generated beside the Selectbox.
 
  Define the AddButtonString with 'addButtonString' => 'Add...'. This string
  is set default to '+'
 
  When using the '+' button you most likely want to return to where you came.
  To accomplish this, we pass a 'returnTo' parameter by $_GET.
  The Controller can send the user back to where he came from this way:
 
   <pre>
 	if($model->save())
 		if(isset($_GET['returnTo'])) 
 			$this->redirect(array(urldecode($_GET['returnTo'])));
 	</pre>
 			
  Using the 'style' option we can configure if we want our widget to be
  rendered as a 'Selectbox' (default) or a 'ListBox'.
 
  Use the option 'createAction' if the action to add additional foreign Model
  options differs from 'create'.
 
   With 'parentObjects' you can limit the Parent Elements that are being shown.
  It takes an array of elements that could be returned from an scope or
  an SQL Query.
 
  The parentObjects can be grouped, for example,  with 
  'groupParentBy' => 'city'
 
   Use the option 'htmlOptions' to pass any html Options to the 
  Selectbox/Listbox form element.
 
  Full Example:
  <pre>
  $this->widget('application.components.Relation', array(
   'model' => 'Post',
   'field' => 'Userid',
   'style' => 'ListBox',
   'parentObjects' => Parentmodel::model()->findAll('userid = 17'),
   'groupParentsBy' => 'city',
   'relation' => 'user',
   'foreignField' => 'id_of_user',
   'fields' => array( 'username', 'username.group.groupid' ),
   'delimiter' => ' -> ', // default: ' | '
   'returnTo' => 'model/create',
   'createAction' => 'add', // default: 'create'
   'addButtonString' => 'click here to add a new User', // default: ''
   'htmlOptions' => array('style' => 'width: 100px;')
  ));
  </pre>
  
 
  @author Herbert Maschke <thyseus@gmail.com>
  @version 0.9
  @since 1.1
 */

class Relation extends CWidget
{
	protected $_Model;
	protected $_foreignModel;
	public $model;
	public $relation;
	public $field;
	public $foreignField;
	public $fields;
	public $allowEmpty;
	public $emptyString = "None";
	public $hideAddButton;
	public $addButtonString = "+";
	public $returnLink;
	public $delimiter = " | ";
	public $style = "SelectBox";
	public $createAction = "create";
	public $htmlOptions = array();
	public $parentObjects = 0;
	public $groupParentBy = 0;
	public $manyManyTable = '';
	public $manyManyTableLeft = '';
	public $manyManyTableRight = '';

	public function init()
	{
		if(!is_object($this->model)) 
		{
			if(!$this->_Model = new $this->model) 
				throw new CException(Yii::t('yii','Widget "Relation" can not instantiate Model'));
		} 
		else 
		{
			$this->_Model = $this->model;
		}

		foreach($this->_Model->relations() as $key => $value) 
		{
			if(strcmp($this->relation,$key) == 0) 
			{
				// $key = Name of the Relation
				// $value[0] = Type of the Relation
				// $value[1] = Related Model
				// $value[2] = Related Field or Many_Many Table
				switch($value[0]) {
				case 'CBelongsToRelation':
				case 'CHasOneRelation':
					$this->_foreignModel = new $value[1];
					if(!isset($field)) 
					{
						$this->field = $value[2];
					} 
					break;
				case 'CManyManyRelation':
					preg_match_all('/^.*\(/', $value[2], $matches);
					$this->manyManyTable = substr($matches[0][0], 0, strlen($matches[0][0]) -1);
					preg_match_all('/\(.*,/', $value[2], $matches);
					$this->manyManyTableLeft = substr($matches[0][0], 1, strlen($matches[0][0]) - 2);
					preg_match_all('/,.*\)/', $value[2], $matches);
					$this->manyManyTableRight = substr($matches[0][0], 2, strlen($matches[0][0]) - 3);

					$this->_foreignModel = new $value[1];
					break;
				}
			}
		}				
		if(!is_object($this->_foreignModel))	
			throw new CException(Yii::t('yii','Widget "Relation" can not find the given Relation('.$this->relation.')'));

		if(!isset($this->foreignField) || $this->foreignField == "") 
		{
			$this->foreignField = $this->_foreignModel->tableSchema->primaryKey;
		}

		if(!isset($this->fields) || $this->fields == "" || $this->fields == array())
			throw new CException(Yii::t('yii','Widget "Relation" has been run without fields Option(string or array)'));
	}

	// Check if model-value contains '.' and generate -> directives:
	public function getModelData($model, $field) 
	{
		if(strstr($field, '.')) 
		{
			$data = explode('.', $field);
			$value = $model->getRelated($data[0])->$data[1];
		} else	
			$value = $model->$field;

		return $value;
	}

	public function getRelatedData() 
	{
		/* At first we determine, if we want to display all parent Objects, or
		 * if the User supplied an list of Objects */
		if(is_object($this->parentObjects)) 
		{ // a single Element
			$parentobjects = array($this->parentObjects);
		}	
		else if(is_array($this->parentObjects)) 
		{ // Only show this elements
			$parentobjects = $this->parentObjects;
		} 
		else 
		{ // Show all Parent elements
			$parentobjects = CActiveRecord::model(get_class($this->_foreignModel))->findAll();
		} 

		if($this->allowEmpty)
			$dataArray[0] = $this->emptyString;

		foreach($parentobjects as $obj)	{
			if(is_string($this->fields)) 
			{ // Display only 1 field:
				$value = $this->getModelData($obj, $this->fields);
			}
			else if(is_array($this->fields)) 
			{ // Display more than 1 field:
				$value = '';
				foreach($this->fields as $field) 
				{
					$value .= $this->getModelData($obj, $field) . $this->delimiter;
				}
			}

			if($this->groupParentBy != '') {
				$dataArray[$obj->{$this->groupParentBy}][$obj->{$this->foreignField}] = $value;
			} else {
				$dataArray[$obj->{$this->foreignField}] = $value;
			}	
		}
		return $dataArray;
	}

	public function run()
	{
		if($this->manyManyTable != '')
			$this->renderManyManySelection();
		else
			$this->renderBelongsToSelection();

		if(!$this->hideAddButton) 
		{
			if(!isset($this->returnLink) or $this->returnLink == "")
				$this->returnLink = $this->model->tableSchema->name . "/create";

			echo CHtml::Link($this->addButtonString, array(
				$this->_foreignModel->tableSchema->name . "/" . $this->createAction, 
				'returnTo' => $this->returnLink)); 

		}

	}

	public function getRelatedManyManyObjects() {
		$sql = sprintf("select * from %s where %s = %s",
			$this->manyManyTable,
			$this->manyManyTableLeft,
			$this->_Model->{$this->_Model->tableSchema->primaryKey});

		$result = Yii::app()->db->createCommand($sql)->queryAll();
		foreach($result as $foreignObject) {
			$objects[] = $foreignObject[$this->manyManyTableRight];	
		}
		return $objects;
	}

	public function renderBelongsToSelection() {
		if($this->style == "SelectBox") 
			echo CHtml::ActiveDropDownList($this->_Model, 
			$this->field, 
			$this->getRelatedData(), 
			$this->htmlOptions);
		else if($this->style == "ListBox") 
			echo CHtml::ActiveListBox($this->_Model, 
			$this->field, 
			$this->getRelatedData(), 
			$this->htmlOptions);
	}

	public function renderManyManySelection() {
		echo CHtml::ListBox(get_class($this->_Model) . '[' . get_class($this->_foreignModel) . ']', 
		$this->getRelatedManyManyObjects(), 
		$this->getRelatedData(), 
		array('multiple' => 'multiple'));
	}


}

<?php

/**
 * This is the model class for table "tab_categorias".
 *
 * The followings are the available columns in table 'tab_categorias':
 * @property integer $id_categoria
 * @property string $descrip_categoria
 * @property integer $id_padre_cat
 * @property string $in_stat
 * @property string $usr_crea
 * @property string $fe_crea
 * @property string $usr_modf
 * @property string $fe_modf
 *
 * The followings are the available model relations:
 * @property TabRubros[] $tabRubroses
 * @property TabHechosRealvspresupuesto[] $tabHechosRealvspresupuestos
 * @property TabCategorias $idPadreCat
 * @property TabCategorias[] $tabCategoriases
 */
class TabCategorias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tab_categorias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descrip_categoria', 'required'),
			array('id_padre_cat', 'numerical', 'integerOnly'=>true),
			array('in_stat', 'length', 'max'=>1),
			array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('fe_crea, fe_modf', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_categoria, descrip_categoria, id_padre_cat, in_stat, usr_crea, fe_crea, usr_modf, fe_modf', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tabRubroses' => array(self::HAS_MANY, 'TabRubros', 'id_categoria'),
			'tabHechosRealvspresupuestos' => array(self::HAS_MANY, 'TabHechosRealvspresupuesto', 'id_categoria'),
			'idPadreCat' => array(self::BELONGS_TO, 'TabCategorias', 'id_padre_cat'),
			'tabCategoriases' => array(self::HAS_MANY, 'TabCategorias', 'id_padre_cat'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_categoria' => 'Id. Categoria',
			'descrip_categoria' => 'Categoria',
			'id_padre_cat' => 'Cat. Padre',
			'in_stat' => 'Estado del registro',
			'usr_crea' => 'Creado por',
			'fe_crea' => 'Fecha de creación',
			'usr_modf' => 'Modificado por',
			'fe_modf' => 'Fecha de modificación',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_categoria',$this->id_categoria);
		//$criteria->compare('descrip_categoria',$this->descrip_categoria,true);
		$criteria->addSearchCondition('LOWER(descrip_categoria)',strtolower($this->descrip_categoria)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('id_padre_cat',$this->id_padre_cat);
		//$criteria->compare('in_stat','A',$this->in_stat,true);
		$criteria->compare('in_stat','A');
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);
		$criteria->order = "descrip_categoria ASC";

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TabCategorias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function behaviors()
    {
        return array(
                'CTimestampBehavior' => array(
                    'class' => 'zii.behaviors.CTimestampBehavior',
                    'createAttribute' => 'fe_crea',
                    'updateAttribute' => 'fe_modf',
                    'setUpdateOnCreate' => true,
                ),

                'BlameableBehavior' => array(
                    'class' => 'application.components.BlameableBehavior',
                    'createdByColumn' => 'usr_crea',
                    'updatedByColumn' => 'usr_modf',
                ),
        );
    }

    protected function beforeSave(){
    	//SE REGISTRA EL USUARIO AL CREAR NUEVO REGISTRO
    	if($this->isNewRecord)
			{
				$this->usr_crea = Yii::app()->user->name;
		}

        //DE FORMA INDIVIDUAL SE GUARDAN EN MAYUSCULAS   
        $this->descrip_categoria = strtoupper($this->descrip_categoria);

        //TODOS LOS ATRIBUTOS SE GUARDAN EN MAYUSCULAS     
        //$this->attributes = array_map('strtoupper',$this->attributes); //DESCOMENTAR SI SE DESEA ACTIVAR

        return parent::beforeSave();
    }
    
}

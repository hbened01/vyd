<?php

/**
 * This is the model class for table "tab_tipo_seccion".
 *
 * The followings are the available columns in table 'tab_tipo_seccion':
 * @property integer $id_seccion
 * @property string $descrip_seccion
 * @property integer $parent_id_seccion
 * @property string $in_stat
 * @property string $usr_crea
 * @property string $fe_crea
 * @property string $usr_modf
 * @property string $fe_modf
 *
 * The followings are the available model relations:
 * @property TabDetalleSeccion[] $tabDetalleSeccions
 * @property TabTipoSeccion $parentIdSeccion
 * @property TabTipoSeccion[] $tabTipoSeccions
 * @property TabRutaImg[] $tabRutaImgs
 * @property TabTipoInforme[] $tabTipoInformes
 */
class TabTipoSeccion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tab_tipo_seccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descrip_seccion', 'required'),
			array('parent_id_seccion', 'numerical', 'integerOnly'=>true),
			array('in_stat', 'length', 'max'=>1),
			array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('fe_crea, fe_modf', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_seccion, descrip_seccion, parent_id_seccion, in_stat, usr_crea, fe_crea, usr_modf, fe_modf', 'safe', 'on'=>'search'),
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
			'tabDetalleSeccions' => array(self::HAS_MANY, 'TabDetalleSeccion', 'id_seccion'),
			'parentIdSeccion' => array(self::BELONGS_TO, 'TabTipoSeccion', 'parent_id_seccion'),
			'tabTipoSeccions' => array(self::HAS_MANY, 'TabTipoSeccion', 'parent_id_seccion'),
			'tabRutaImgs' => array(self::HAS_MANY, 'TabRutaImg', 'id_seccion'),
			'tabTipoInformes' => array(self::MANY_MANY, 'TabTipoInforme', 'tab_tipo_informe_seccion(id_seccion, id_tipo_informe)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_seccion' => 'Id seccion',
			'descrip_seccion' => 'Descripción de sección',
			'parent_id_seccion' => 'Parent Id Seccion',
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

		$criteria->compare('id_seccion',$this->id_seccion);
		//$criteria->compare('descrip_seccion',$this->descrip_seccion,true);
		$criteria->addSearchCondition('LOWER(descrip_seccion)',strtolower($this->descrip_seccion)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('parent_id_seccion',$this->parent_id_seccion);
		//$criteria->compare('in_stat','A',$this->in_stat,true);
		$criteria->compare('in_stat','A');
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);
		$criteria->order = "descrip_seccion ASC";

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TabTipoSeccion the static model class
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
        $this->descrip_seccion = strtoupper($this->descrip_seccion);

        //TODOS LOS ATRIBUTOS SE GUARDAN EN MAYUSCULAS     
        //$this->attributes = array_map('strtoupper',$this->attributes); //DESCOMENTAR SI SE DESEA ACTIVAR

        return parent::beforeSave();
    }
    
}

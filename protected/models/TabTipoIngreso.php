<?php

/**
 * This is the model class for table "tab_tipo_ingreso".
 *
 * The followings are the available columns in table 'tab_tipo_ingreso':
 * @property integer $id_tipo_ingreso
 * @property string $descripcion_ingreso
 * @property string $in_stat
 * @property string $usr_crea
 * @property string $fe_crea
 * @property string $usr_modf
 * @property string $fe_modf
 *
 * The followings are the available model relations:
 * @property TabHechosRealvspresupuesto[] $tabHechosRealvspresupuestos
 * @property TabTotalUnidades[] $tabTotalUnidades
 * @property VistasReales[] $vistasReales
 * @property VistasPpto[] $vistasPptos
 * @property TabTotalCorporacion[] $tabTotalCorporacions
 * @property TabCertusEstadisticas[] $tabCertusEstadisticases
 */
class TabTipoIngreso extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'tab_tipo_ingreso';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('in_stat', 'length', 'max'=>1),
            array('usr_crea, usr_modf', 'length', 'max'=>10),
            array('descripcion_ingreso, fe_crea, fe_modf', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id_tipo_ingreso, descripcion_ingreso, in_stat, usr_crea, fe_crea, usr_modf, fe_modf', 'safe', 'on'=>'search'),
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
            'tabHechosRealvspresupuestos' => array(self::HAS_MANY, 'TabHechosRealvspresupuesto', 'id_tipo_ingreso'),
            'tabTotalUnidades' => array(self::HAS_MANY, 'TabTotalUnidades', 'id_tipo_ingreso'),
            'vistasReales' => array(self::HAS_MANY, 'VistasReales', 'id_tipo_ingreso'),
            'vistasPptos' => array(self::HAS_MANY, 'VistasPpto', 'id_tipo_ingreso'),
            'tabTotalCorporacions' => array(self::HAS_MANY, 'TabTotalCorporacion', 'id_tipo_ingreso'),
            'tabCertusEstadisticases' => array(self::HAS_MANY, 'TabCertusEstadisticas', 'escenario'),
        );
    }

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tipo_ingreso' => 'Id Tipo Ingreso',
			'descripcion_ingreso' => 'Tipo Ingreso',
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

		$criteria->compare('id_tipo_ingreso',$this->id_tipo_ingreso);
		//$criteria->compare('descripcion_ingreso',$this->descripcion_ingreso,true);
		$criteria->addSearchCondition('LOWER(descripcion_ingreso)',strtolower($this->descripcion_ingreso)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TabTipoIngreso the static model class
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
    
}

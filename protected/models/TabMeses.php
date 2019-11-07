 <?php

/**
 * This is the model class for table "tab_meses".
 *
 * The followings are the available columns in table 'tab_meses':
 * @property integer $id_mes
 * @property string $descrip_mes
 * @property string $in_stat
 * @property string $usr_crea
 * @property string $fe_crea
 * @property string $usr_modf
 * @property string $fe_modf
 *
 * The followings are the available model relations:
 * @property TabHechosRealvspresupuesto[] $tabHechosRealvspresupuestos
 * @property TabMovilnetClientes[] $tabMovilnetClientes
 * @property TabMovilnetActivaciones[] $tabMovilnetActivaciones
 * @property TabTotalUnidades[] $tabTotalUnidades
 * @property VistasPpto[] $vistasPptos
 * @property VistasReales[] $vistasReales
 * @property TabTotalCorporacion[] $tabTotalCorporacions
 * @property TabCertusEstadoResultados[] $tabCertusEstadoResultadoses
 */
class TabMeses extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'tab_meses';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('descrip_mes', 'required'),
            array('in_stat', 'length', 'max'=>1),
            array('usr_crea, usr_modf', 'length', 'max'=>10),
            array('fe_crea, fe_modf', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id_mes, descrip_mes, in_stat, usr_crea, fe_crea, usr_modf, fe_modf', 'safe', 'on'=>'search'),
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
            'tabHechosRealvspresupuestos' => array(self::HAS_MANY, 'TabHechosRealvspresupuesto', 'id_mes'),
            'tabMovilnetClientes' => array(self::HAS_MANY, 'TabMovilnetClientes', 'mes'),
            'tabMovilnetActivaciones' => array(self::HAS_MANY, 'TabMovilnetActivaciones', 'mes'),
            'tabTotalUnidades' => array(self::HAS_MANY, 'TabTotalUnidades', 'id_mes'),
            'vistasPptos' => array(self::HAS_MANY, 'VistasPpto', 'id_mes'),
            'vistasReales' => array(self::HAS_MANY, 'VistasReales', 'id_mes'),
            'tabTotalCorporacions' => array(self::HAS_MANY, 'TabTotalCorporacion', 'id_mes'),
            'tabCertusEstadoResultadoses' => array(self::HAS_MANY, 'TabCertusEstadoResultados', 'id_mes'),
        );
    }

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_mes' => 'Id Mes',
			'descrip_mes' => 'Mes',
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

		$criteria->compare('id_mes',$this->id_mes);
		//$criteria->compare('descrip_mes',$this->descrip_mes,true);
		$criteria->addSearchCondition('LOWER(descrip_mes)',strtolower($this->descrip_mes)); // lee busquedas tanto en minúsculas como en mayúsculas;
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
	 * @return TabMeses the static model class
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

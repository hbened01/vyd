<?php

/**
 * This is the model class for table "tab_certus_estadisticas".
 *
 * The followings are the available columns in table 'tab_certus_estadisticas':
 * @property string $id_certus_estadisticas
 * @property string $fecha
 * @property string $formato
 * @property string $tipo_saldo
 * @property string $producto
 * @property string $codigo_producto
 * @property string $codigo_indicador
 * @property string $indicador
 * @property string $codigo_tipo_acceso
 * @property string $tipo_acceso
 * @property string $codigo_servicio
 * @property string $servicio
 * @property string $modalidad_pago
 * @property string $codigo_modalidad_pago
 * @property string $moneda
 * @property string $escenario
 * @property string $entidad_legal
 * @property string $unidad_negocio
 * @property string $segmento
 * @property double $monto
 * @property double $acumulado
 * @property string $in_stat
 * @property string $usr_crea
 * @property string $fe_crea
 * @property string $usr_modf
 * @property string $fe_modf
 *
 * The followings are the available model relations:
 * @property TabTipoIngreso $escenario0
 */
class TabCertusEstadisticas extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'tab_certus_estadisticas';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('monto, acumulado', 'numerical'),
            array('formato, tipo_saldo, codigo_producto, codigo_indicador, codigo_tipo_acceso, escenario, entidad_legal', 'length', 'max'=>70),
            array('producto', 'length', 'max'=>170),
            array('indicador, tipo_acceso, modalidad_pago, codigo_modalidad_pago, moneda, unidad_negocio, segmento', 'length', 'max'=>150),
            array('codigo_servicio, servicio', 'length', 'max'=>250),
            array('in_stat', 'length', 'max'=>1),
            array('usr_crea, usr_modf', 'length', 'max'=>10),
            array('fecha, fe_crea, fe_modf', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id_certus_estadisticas, fecha, formato, tipo_saldo, producto, codigo_producto, codigo_indicador, indicador, codigo_tipo_acceso, tipo_acceso, codigo_servicio, servicio, modalidad_pago, codigo_modalidad_pago, moneda, escenario, entidad_legal, unidad_negocio, segmento, monto, acumulado, in_stat, usr_crea, fe_crea, usr_modf, fe_modf', 'safe', 'on'=>'search'),
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
            'escenario0' => array(self::BELONGS_TO, 'TabTipoIngreso', 'escenario'),
        );
    }

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_certus_estadisticas' => 'Id Certus Estadisticas',
			'fecha' => 'Fecha',
			'formato' => 'Formato',
			'tipo_saldo' => 'Tipo Saldo',
			'producto' => 'Producto',
			'codigo_producto' => 'Codigo Producto',
			'codigo_indicador' => 'Codigo Indicador',
			'indicador' => 'Indicador',
			'codigo_tipo_acceso' => 'Codigo Tipo Acceso',
			'tipo_acceso' => 'Tipo Acceso',
			'codigo_servicio' => 'Codigo Servicio',
			'servicio' => 'Servicio',
			'modalidad_pago' => 'Modalidad Pago',
			'codigo_modalidad_pago' => 'Codigo Modalidad Pago',
			'moneda' => 'Moneda',
			'escenario' => 'Tipo ingreso',
			'entidad_legal' => 'Entidad legal',
			'unidad_negocio' => 'Unidad de negocio',
			'segmento' => 'Segmento',
			'monto' => 'Monto',
			'acumulado' => 'Acumulado',
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
	/*
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_certus_estadisticas',$this->id_certus_estadisticas,true);
		$criteria->compare('fecha',$this->fecha,false);
		$criteria->compare('formato',$this->formato,true);
		$criteria->compare('tipo_saldo',$this->tipo_saldo,true);
		//$criteria->compare('producto',$this->producto,true);
		$criteria->addSearchCondition('LOWER(producto)',strtolower($this->producto)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('codigo_producto',$this->codigo_producto,true);
		$criteria->compare('codigo_indicador',$this->codigo_indicador,true);
		//$criteria->compare('indicador',$this->indicador,true);
		$criteria->addSearchCondition('LOWER(indicador)',strtolower($this->indicador)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('codigo_tipo_acceso',$this->codigo_tipo_acceso,true);
		$criteria->compare('tipo_acceso',$this->tipo_acceso,true);
		$criteria->compare('codigo_servicio',$this->codigo_servicio,true);
		//$criteria->compare('servicio',$this->servicio,true);
		$criteria->addSearchCondition('LOWER(servicio)',strtolower($this->servicio)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('modalidad_pago',$this->modalidad_pago,true);
		$criteria->compare('codigo_modalidad_pago',$this->codigo_modalidad_pago,true);
		$criteria->compare('moneda',$this->moneda,true);
		//$criteria->compare('escenario',$this->escenario,true);
		$criteria->addSearchCondition('LOWER(escenario)',strtolower($this->escenario)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('entidad_legal',$this->entidad_legal,true);
		$criteria->addSearchCondition('LOWER(entidad_legal)',strtolower($this->entidad_legal)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('unidad_negocio',$this->unidad_negocio,true);
		$criteria->addSearchCondition('LOWER(unidad_negocio)',strtolower($this->unidad_negocio)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('segmento',$this->segmento,true);
		$criteria->compare('monto',$this->monto);
		$criteria->compare('acumulado',$this->acumulado);
		$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	*/
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_certus_estadisticas',$this->id_certus_estadisticas,true);
		$criteria->compare('fecha',$this->fecha,false);
		$criteria->compare('formato',$this->formato,true);
		$criteria->compare('tipo_saldo',$this->tipo_saldo,true);
		//$criteria->compare('producto',$this->producto,true);
		$criteria->addSearchCondition('LOWER(producto)',strtolower($this->producto)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('codigo_producto',$this->codigo_producto,true);
		$criteria->compare('codigo_indicador',$this->codigo_indicador,true);
		//$criteria->compare('indicador',$this->indicador,true);
		$criteria->addSearchCondition('LOWER(indicador)',strtolower($this->indicador)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('codigo_tipo_acceso',$this->codigo_tipo_acceso,true);
		$criteria->compare('tipo_acceso',$this->tipo_acceso,true);
		$criteria->compare('codigo_servicio',$this->codigo_servicio,true);
		//$criteria->compare('servicio',$this->servicio,true);
		$criteria->addSearchCondition('LOWER(servicio)',strtolower($this->servicio)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('modalidad_pago',$this->modalidad_pago,true);
		$criteria->compare('codigo_modalidad_pago',$this->codigo_modalidad_pago,true);
		$criteria->compare('moneda',$this->moneda,true);
		//$criteria->compare('escenario',$this->escenario,true);
		$criteria->addSearchCondition('LOWER(escenario)',strtolower($this->escenario)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('entidad_legal',$this->entidad_legal,true);
		$criteria->addSearchCondition('LOWER(entidad_legal)',strtolower($this->entidad_legal)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('unidad_negocio',$this->unidad_negocio,true);
		$criteria->addSearchCondition('LOWER(unidad_negocio)',strtolower($this->unidad_negocio)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('segmento',$this->segmento,true);
		$criteria->compare('monto',$this->monto);
		$criteria->compare('acumulado',$this->acumulado);
		$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);

		$estadisticas = new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));

		$_SESSION['estadisticas_records'] = $estadisticas;
        return $estadisticas;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TabCertusEstadisticas the static model class
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

<?php

/**
 * This is the model class for table "vistas_reales".
 *
 * The followings are the available columns in table 'vistas_reales':
 * @property string $fecha
 * @property integer $anio
 * @property string $rubro
 * @property string $entidad_legal
 * @property string $unidad_negocio
 * @property string $segmento
 * @property string $monto
 * @property string $signo
 * @property integer $id_mes
 * @property integer $id_moneda
 * @property integer $id_tipo_ingreso
 * @property integer $id_rubro
 * @property integer $id_categoria
 * @property integer $id_unidad_funcional
 * @property string $id_voz_datos_reales
 * @property string $in_stat
 * @property string $usr_crea
 * @property string $fe_crea
 * @property string $usr_modf
 * @property string $fe_modf
 *
 * The followings are the available model relations:
 * @property TabCategorias $idCategoria
 * @property TabMeses $idMes
 * @property TabMoneda $idMoneda
 * @property TabRubros $idRubro
 * @property TabTipoIngreso $idTipoIngreso
 * @property TabUnidadFuncional $idUnidadFuncional
 */
class VistasReales extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'vistas_reales';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('fecha, anio, rubro, entidad_legal, unidad_negocio, segmento, monto, id_mes, id_moneda, id_tipo_ingreso', 'required'),
            array('anio, id_mes, id_moneda, id_tipo_ingreso, id_rubro, id_categoria, id_unidad_funcional', 'numerical', 'integerOnly'=>true),
            array('rubro', 'length', 'max'=>100),
            array('entidad_legal', 'length', 'max'=>30),
            array('unidad_negocio, segmento', 'length', 'max'=>50),
            array('monto', 'length', 'max'=>25),
            array('signo, in_stat', 'length', 'max'=>1),
            array('usr_crea, usr_modf', 'length', 'max'=>10),
            array('fe_crea, fe_modf', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('fecha, anio, rubro, entidad_legal, unidad_negocio, segmento, monto, signo, id_mes, id_moneda, id_tipo_ingreso, id_rubro, id_categoria, id_unidad_funcional, id_voz_datos_reales, in_stat, usr_crea, fe_crea, usr_modf, fe_modf', 'safe', 'on'=>'search'),
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
            'idCategoria' => array(self::BELONGS_TO, 'TabCategorias', 'id_categoria'),
            'idMes' => array(self::BELONGS_TO, 'TabMeses', 'id_mes'),
            'idMoneda' => array(self::BELONGS_TO, 'TabMoneda', 'id_moneda'),
            'idRubro' => array(self::BELONGS_TO, 'TabRubros', 'id_rubro'),
            'idTipoIngreso' => array(self::BELONGS_TO, 'TabTipoIngreso', 'id_tipo_ingreso'),
            'idUnidadFuncional' => array(self::BELONGS_TO, 'TabUnidadFuncional', 'id_unidad_funcional'),
        );
    }

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fecha' => 'Fecha',
			'anio' => 'Año',
			'rubro' => 'Rubro',
			'entidad_legal' => 'Entidad legal',
			'unidad_negocio' => 'Unidad funcional',
			'segmento' => 'Segmento',
			'monto' => 'Monto',
			'signo' => 'Signo',
			'id_mes' => 'Mes',
			'id_moneda' => 'Tipo de moneda',
			'id_tipo_ingreso' => 'Tipo de ingreso',
			'id_rubro' => 'Co. Rubro',
			'id_categoria' => 'Co. Categoria',
			'id_unidad_funcional' => 'Co. Unidad funcional',
			'id_voz_datos_reales' => 'Id. Voz datos reales',
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

		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('anio',$this->anio);
		//$criteria->compare('rubro',$this->rubro,true);
		$criteria->addSearchCondition('LOWER(rubro)',strtolower($this->rubro)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('entidad_legal',$this->entidad_legal,true);
		$criteria->addSearchCondition('LOWER(entidad_legal)',strtolower($this->entidad_legal)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('unidad_negocio',$this->unidad_negocio,true);
		$criteria->addSearchCondition('LOWER(unidad_negocio)',strtolower($this->unidad_negocio)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('segmento',$this->segmento,true);
		$criteria->addSearchCondition('LOWER(segmento)',strtolower($this->segmento)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('monto',$this->monto);
		$criteria->compare('signo',$this->signo,true);
		$criteria->compare('id_mes',$this->id_mes);
		$criteria->compare('id_moneda',$this->id_moneda);
		$criteria->compare('id_tipo_ingreso',$this->id_tipo_ingreso);
		$criteria->compare('id_rubro',$this->id_rubro);
		$criteria->compare('id_categoria',$this->id_categoria);
		$criteria->compare('id_unidad_funcional',$this->id_unidad_funcional);
		$criteria->compare('id_voz_datos_reales',$this->id_voz_datos_reales,true);
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

		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('anio',$this->anio);
		//$criteria->compare('rubro',$this->rubro,true);
		$criteria->addSearchCondition('LOWER(rubro)',strtolower($this->rubro)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('entidad_legal',$this->entidad_legal,true);
		$criteria->addSearchCondition('LOWER(entidad_legal)',strtolower($this->entidad_legal)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('unidad_negocio',$this->unidad_negocio,true);
		$criteria->addSearchCondition('LOWER(unidad_negocio)',strtolower($this->unidad_negocio)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('segmento',$this->segmento,true);
		$criteria->addSearchCondition('LOWER(segmento)',strtolower($this->segmento)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('monto',$this->monto);
		$criteria->compare('signo',$this->signo,true);
		$criteria->compare('id_mes',$this->id_mes);
		$criteria->compare('id_moneda',$this->id_moneda);
		$criteria->compare('id_tipo_ingreso',$this->id_tipo_ingreso);
		$criteria->compare('id_rubro',$this->id_rubro);
		$criteria->compare('id_categoria',$this->id_categoria);
		$criteria->compare('id_unidad_funcional',$this->id_unidad_funcional);
		$criteria->compare('id_voz_datos_reales',$this->id_voz_datos_reales,true);
		$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);

		$reales_data = new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));

		$_SESSION['reales_records'] = $reales_data;
        return $reales_data;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VistasReales the static model class
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

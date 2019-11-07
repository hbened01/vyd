<?php

/**
 * This is the model class for table "tab_certus_estado_resultados".
 *
 * The followings are the available columns in table 'tab_certus_estado_resultados':
 * @property string $id_certus_estado_resultados
 * @property string $fecha
 * @property string $anio
 * @property string $mes
 * @property integer $id_mes
 * @property string $rubro
 * @property string $entidad_legal
 * @property string $unidad_negocio
 * @property string $escenario
 * @property string $metodo
 * @property string $segmento
 * @property string $moneda
 * @property double $monto
 * @property string $in_stat
 * @property string $usr_crea
 * @property string $fe_crea
 * @property string $usr_modf
 * @property string $fe_modf
 *
 * The followings are the available model relations:
 * @property TabMeses $idMes
 * @property TabTipoIngreso $escenario0
 */
class TabCertusEstadoResultados extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tab_certus_estado_resultados';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_mes', 'numerical', 'integerOnly'=>true),
			array('monto', 'numerical'),
			array('anio', 'length', 'max'=>4),
			array('mes, rubro, entidad_legal, unidad_negocio, metodo, segmento', 'length', 'max'=>100),
			array('escenario', 'length', 'max'=>70),
			array('moneda, usr_crea, usr_modf', 'length', 'max'=>10),
			array('in_stat', 'length', 'max'=>1),
			array('fecha, fe_crea, fe_modf', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_certus_estado_resultados, fecha, anio, mes, id_mes, rubro, entidad_legal, unidad_negocio, escenario, metodo, segmento, moneda, monto, in_stat, usr_crea, fe_crea, usr_modf, fe_modf', 'safe', 'on'=>'search'),
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
			'idMes' => array(self::BELONGS_TO, 'TabMeses', 'id_mes'),
			'escenario0' => array(self::BELONGS_TO, 'TabTipoIngreso', 'escenario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_certus_estado_resultados' => 'Id Certus Estado Resultados',
			'fecha' => 'Fecha',
			'anio' => 'Año',
			'mes' => 'Mes',
			'id_mes' => 'Id Mes',
			'rubro' => 'Rubro',
			'entidad_legal' => 'Entidad legal',
			'unidad_negocio' => 'Unidad de Negocio',
			'escenario' => 'Tipo ingreso',
			'metodo' => 'Metodo',
			'segmento' => 'Segmento',
			'moneda' => 'Moneda',
			'monto' => 'Monto',
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

		$criteria->compare('id_certus_estado_resultados',$this->id_certus_estado_resultados,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('anio',$this->anio,true);
		$criteria->compare('mes',$this->mes,true);
		$criteria->compare('id_mes',$this->id_mes);
		$criteria->compare('rubro',$this->rubro,true);
		$criteria->compare('entidad_legal',$this->entidad_legal,true);
		$criteria->compare('unidad_negocio',$this->unidad_negocio,true);
		$criteria->compare('escenario',$this->escenario,true);
		$criteria->compare('metodo',$this->metodo,true);
		$criteria->compare('segmento',$this->segmento,true);
		$criteria->compare('moneda',$this->moneda,true);
		$criteria->compare('monto',$this->monto);
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

		$criteria->compare('id_certus_estado_resultados',$this->id_certus_estado_resultados,true);
		$criteria->compare('fecha',$this->fecha,false);
		$criteria->compare('anio',$this->anio,false);
		//$criteria->compare('mes',$this->mes,true);
		$criteria->addSearchCondition('LOWER(mes)',strtolower($this->mes)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('id_mes',$this->id_mes);
		//$criteria->compare('rubro',$this->rubro,true);
		$criteria->addSearchCondition('LOWER(rubro)',strtolower($this->rubro)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('entidad_legal',$this->entidad_legal,true);
		$criteria->addSearchCondition('LOWER(entidad_legal)',strtolower($this->entidad_legal)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('unidad_negocio',$this->unidad_negocio,true);
		$criteria->addSearchCondition('LOWER(unidad_negocio)',strtolower($this->unidad_negocio)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('escenario',$this->escenario,true);
		$criteria->addSearchCondition('LOWER(escenario)',strtolower($this->escenario)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('metodo',$this->metodo,true);
		$criteria->addSearchCondition('LOWER(metodo)',strtolower($this->metodo)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('segmento',$this->segmento,true);
		$criteria->addSearchCondition('LOWER(segmento)',strtolower($this->segmento)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('moneda',$this->moneda,true);
		$criteria->addSearchCondition('LOWER(moneda)',strtolower($this->moneda)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('monto',$this->monto);
		$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);

		$estado = new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));

		$_SESSION['estado_records'] = $estado;
        return $estado;

	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TabCertusEstadoResultados the static model class
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

<?php

/**
 * This is the model class for table "tab_movilnet_activaciones".
 *
 * The followings are the available columns in table 'tab_movilnet_activaciones':
 * @property string $id_mov_act
 * @property string $fecha
 * @property integer $anio
 * @property integer $mes
 * @property string $tipo_cliente
 * @property string $tipo_cuenta
 * @property string $plan
 * @property double $cantidad
 * @property string $in_stat
 * @property string $usr_crea
 * @property string $fe_crea
 * @property string $usr_modf
 * @property string $fe_modf
 *
 * The followings are the available model relations:
 * @property TabMeses $mes0
 */
class TabMovilnetActivaciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tab_movilnet_activaciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('anio, mes', 'numerical', 'integerOnly'=>true),
			array('cantidad', 'numerical'),
			array('tipo_cliente, tipo_cuenta', 'length', 'max'=>25),
			array('plan', 'length', 'max'=>30),
			array('in_stat', 'length', 'max'=>1),
			array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('fecha, fe_crea, fe_modf', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_mov_act, fecha, anio, mes, tipo_cliente, tipo_cuenta, plan, cantidad, in_stat, usr_crea, fe_crea, usr_modf, fe_modf', 'safe', 'on'=>'search'),
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
			'mes0' => array(self::BELONGS_TO, 'TabMeses', 'mes'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_mov_act' => 'Id. Mov Act',
			'fecha' => 'Fecha',
			'anio' => 'Año',
			'mes' => 'Mes',
			'tipo_cliente' => 'Tipo de cliente',
			'tipo_cuenta' => 'Tipo de cuenta',
			'plan' => 'Plan',
			'cantidad' => 'Cantidad',
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

		$criteria->compare('id_mov_act',$this->id_mov_act,true);
		$criteria->compare('fecha',$this->fecha,false);
		$criteria->compare('anio',$this->anio);
		$criteria->compare('mes',$this->mes);
		//$criteria->compare('tipo_cliente',$this->tipo_cliente,true);
		$criteria->addSearchCondition('LOWER(tipo_cliente)',strtolower($this->tipo_cliente)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('tipo_cuenta',$this->tipo_cuenta,true);
		$criteria->addSearchCondition('LOWER(tipo_cuenta)',strtolower($this->tipo_cuenta)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('plan',$this->plan,true);
		$criteria->addSearchCondition('LOWER(plan)',strtolower($this->plan)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('cantidad',$this->cantidad);
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

		$criteria->compare('id_mov_act',$this->id_mov_act,true);
		$criteria->compare('fecha',$this->fecha,false);
		$criteria->compare('anio',$this->anio);
		$criteria->compare('mes',$this->mes);
		//$criteria->compare('tipo_cliente',$this->tipo_cliente,true);
		$criteria->addSearchCondition('LOWER(tipo_cliente)',strtolower($this->tipo_cliente)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('tipo_cuenta',$this->tipo_cuenta,true);
		$criteria->addSearchCondition('LOWER(tipo_cuenta)',strtolower($this->tipo_cuenta)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('plan',$this->plan,true);
		$criteria->addSearchCondition('LOWER(plan)',strtolower($this->plan)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);

		$activaciones_data = new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));

		$_SESSION['activaciones_records'] = $activaciones_data;
        return $activaciones_data;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TabMovilnetActivaciones the static model class
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

<?php

/**
 * This is the model class for table "tabla_ingresos_individuales".
 *
 * The followings are the available columns in table 'tabla_ingresos_individuales':
 * @property integer $id_rubro
 * @property string $descrip_rubro
 * @property integer $id_unidad_funcional
 * @property string $descrip_unidad_funcional
 * @property integer $id_categoria
 * @property string $descrip_categoria
 * @property integer $registration_year
 * @property integer $id_mes
 * @property string $descrip_mes
 * @property string $valor
 * @property string $descripcion_ingreso
 * @property string $descripcion_moneda
 */
class TablaIngresosIndividuales extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tabla_ingresos_individuales';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_rubro, id_unidad_funcional, id_categoria, registration_year, id_mes', 'numerical', 'integerOnly'=>true),
			array('valor', 'length', 'max'=>25),
			array('descrip_rubro, descrip_unidad_funcional, descrip_categoria, descrip_mes, descripcion_ingreso, descripcion_moneda', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_rubro, descrip_rubro, id_unidad_funcional, descrip_unidad_funcional, id_categoria, descrip_categoria, registration_year, id_mes, descrip_mes, valor, descripcion_ingreso, descripcion_moneda', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_rubro' => 'Id Rubro',
			'descrip_rubro' => 'Descrip Rubro',
			'id_unidad_funcional' => 'Id Unidad Funcional',
			'descrip_unidad_funcional' => 'Descrip Unidad Funcional',
			'id_categoria' => 'Id Categoria',
			'descrip_categoria' => 'Descrip Categoria',
			'registration_year' => 'Registration Year',
			'id_mes' => 'Id Mes',
			'descrip_mes' => 'Descrip Mes',
			'valor' => 'Valor',
			'descripcion_ingreso' => 'Descripcion Ingreso',
			'descripcion_moneda' => 'Descripcion Moneda',
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

		$criteria->compare('id_rubro',$this->id_rubro);
		$criteria->compare('descrip_rubro',$this->descrip_rubro,true);
		$criteria->compare('id_unidad_funcional',$this->id_unidad_funcional);
		$criteria->compare('descrip_unidad_funcional',$this->descrip_unidad_funcional,true);
		$criteria->compare('id_categoria',$this->id_categoria);
		$criteria->compare('descrip_categoria',$this->descrip_categoria,true);
		$criteria->compare('registration_year',$this->registration_year);
		$criteria->compare('id_mes',$this->id_mes);
		$criteria->compare('descrip_mes',$this->descrip_mes,true);
		$criteria->compare('valor',$this->valor,true);
		$criteria->compare('descripcion_ingreso',$this->descripcion_ingreso,true);
		$criteria->compare('descripcion_moneda',$this->descripcion_moneda,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TablaIngresosIndividuales the static model class
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

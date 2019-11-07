<?php

/**
 * This is the model class for table "tabla_ingresos_corporacion".
 *
 * The followings are the available columns in table 'tabla_ingresos_corporacion':
 * @property integer $anio
 * @property string $descrip_mes
 * @property string $descrip_total
 * @property string $descrip_categoria
 * @property string $descripcion_ingreso
 * @property double $total
 */
class TablaIngresosCorporacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tabla_ingresos_corporacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('anio', 'numerical', 'integerOnly'=>true),
			array('total', 'numerical'),
			array('descrip_total', 'length', 'max'=>60),
			array('descrip_mes, descrip_categoria, descripcion_ingreso', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('anio, descrip_mes, descrip_total, descrip_categoria, descripcion_ingreso, total', 'safe', 'on'=>'search'),
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
			'anio' => 'Anio',
			'descrip_mes' => 'Descrip Mes',
			'descrip_total' => 'Descrip Total',
			'descrip_categoria' => 'Descrip Categoria',
			'descripcion_ingreso' => 'Descripcion Ingreso',
			'total' => 'Total',
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

		$criteria->compare('anio',$this->anio);
		$criteria->compare('descrip_mes',$this->descrip_mes,true);
		$criteria->compare('descrip_total',$this->descrip_total,true);
		$criteria->compare('descrip_categoria',$this->descrip_categoria,true);
		$criteria->compare('descripcion_ingreso',$this->descripcion_ingreso,true);
		$criteria->compare('total',$this->total);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TablaIngresosCorporacion the static model class
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

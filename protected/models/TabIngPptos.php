<?php

/**
 * This is the model class for table "tab_ing_pptos".
 *
 * The followings are the available columns in table 'tab_ing_pptos':
 * @property integer $anio
 * @property string $rubro
 * @property string $entidad_legal
 * @property string $unidad_negocio
 * @property string $segmento
 * @property string $linea_rubro
 * @property string $enero
 * @property string $febrero
 * @property string $marzo
 * @property string $abril
 * @property string $mayo
 * @property string $junio
 * @property string $julio
 * @property string $agosto
 * @property string $septiembre
 * @property string $octubre
 * @property string $noviembre
 * @property string $diciembre
 * @property string $total_ingresos
 */
class TabIngPptos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tab_ing_pptos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('anio, rubro, entidad_legal, unidad_negocio, segmento', 'required'),
			array('anio', 'numerical', 'integerOnly'=>true),
			array('rubro', 'length', 'max'=>50),
			array('entidad_legal', 'length', 'max'=>9),
			array('unidad_negocio', 'length', 'max'=>32),
			array('segmento', 'length', 'max'=>27),
			array('enero, febrero, marzo, abril, mayo, junio, julio, agosto, septiembre, octubre, noviembre, diciembre, total_ingresos', 'length', 'max'=>17),
			array('linea_rubro', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('anio, rubro, entidad_legal, unidad_negocio, segmento, linea_rubro, enero, febrero, marzo, abril, mayo, junio, julio, agosto, septiembre, octubre, noviembre, diciembre, total_ingresos', 'safe', 'on'=>'search'),
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
			'rubro' => 'Rubro',
			'entidad_legal' => 'Entidad Legal',
			'unidad_negocio' => 'Unidad Negocio',
			'segmento' => 'Segmento',
			'linea_rubro' => 'Linea Rubro',
			'enero' => 'Enero',
			'febrero' => 'Febrero',
			'marzo' => 'Marzo',
			'abril' => 'Abril',
			'mayo' => 'Mayo',
			'junio' => 'Junio',
			'julio' => 'Julio',
			'agosto' => 'Agosto',
			'septiembre' => 'Septiembre',
			'octubre' => 'Octubre',
			'noviembre' => 'Noviembre',
			'diciembre' => 'Diciembre',
			'total_ingresos' => 'Total Ingresos',
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
		$criteria->compare('rubro',$this->rubro,true);
		$criteria->compare('entidad_legal',$this->entidad_legal,true);
		$criteria->compare('unidad_negocio',$this->unidad_negocio,true);
		$criteria->compare('segmento',$this->segmento,true);
		$criteria->compare('linea_rubro',$this->linea_rubro,true);
		$criteria->compare('enero',$this->enero,true);
		$criteria->compare('febrero',$this->febrero,true);
		$criteria->compare('marzo',$this->marzo,true);
		$criteria->compare('abril',$this->abril,true);
		$criteria->compare('mayo',$this->mayo,true);
		$criteria->compare('junio',$this->junio,true);
		$criteria->compare('julio',$this->julio,true);
		$criteria->compare('agosto',$this->agosto,true);
		$criteria->compare('septiembre',$this->septiembre,true);
		$criteria->compare('octubre',$this->octubre,true);
		$criteria->compare('noviembre',$this->noviembre,true);
		$criteria->compare('diciembre',$this->diciembre,true);
		$criteria->compare('total_ingresos',$this->total_ingresos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TabIngPptos the static model class
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

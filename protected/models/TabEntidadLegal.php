<?php

/**
 * This is the model class for table "tab_entidad_legal".
 *
 * The followings are the available columns in table 'tab_entidad_legal':
 * @property string $id_entidad_legal
 * @property string $descrip_entidad_legal
 * @property string $in_stat
 * @property string $usr_crea
 * @property string $fe_crea
 * @property string $usr_modf
 * @property string $fe_modf
 *
 * The followings are the available model relations:
 * @property TabListRubrosReales[] $tabListRubrosReales
 * @property VistasPpto[] $vistasPptos
 * @property TabListRubrosPptos[] $tabListRubrosPptoses
 * @property VistasReales[] $vistasReales
 */
class TabEntidadLegal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tab_entidad_legal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descrip_entidad_legal', 'required'),
			array('descrip_entidad_legal', 'length', 'max'=>30),
			array('in_stat', 'length', 'max'=>1),
			array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('fe_crea, fe_modf', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_entidad_legal, descrip_entidad_legal, in_stat, usr_crea, fe_crea, usr_modf, fe_modf', 'safe', 'on'=>'search'),
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
			'tabListRubrosReales' => array(self::HAS_MANY, 'TabListRubrosReales', 'id_entidad_legal'),
			'vistasPptos' => array(self::HAS_MANY, 'VistasPpto', 'id_entidad_legal'),
			'tabListRubrosPptoses' => array(self::HAS_MANY, 'TabListRubrosPptos', 'id_entidad_legal'),
			'vistasReales' => array(self::HAS_MANY, 'VistasReales', 'id_entidad_legal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_entidad_legal' => 'Id Entidad Legal',
			'descrip_entidad_legal' => 'Entidad Legal',
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

		$criteria->compare('id_entidad_legal',$this->id_entidad_legal,true);
		$criteria->compare('descrip_entidad_legal',$this->descrip_entidad_legal,true);
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
	 * @return TabEntidadLegal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

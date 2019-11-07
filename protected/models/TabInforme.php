<?php

/**
 * This is the model class for table "tab_informe".
 *
 * The followings are the available columns in table 'tab_informe':
 * @property integer $id_informe
 * @property integer $id_tipo_informe
 * @property integer $id_usr
 * @property integer $id_status
 * @property string $titulo
 * @property string $subtitulo1
 * @property string $subtitulo2
 * @property string $fecha
 * @property string $in_stat
 * @property string $usr_crea
 * @property string $fe_crea
 * @property string $usr_modf
 * @property string $fe_modf
 *
 * The followings are the available model relations:
 * @property TabTipoInforme $idTipoInforme
 * @property TabStatus $idStatus
 * @property TabPdfImpreso $tabPdfImpreso
 * @property TabDetalleSeccion[] $tabDetalleSeccions
 * @property TabStatus[] $tabStatuses
 */
class TabInforme extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tab_informe';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tipo_informe, id_usr, id_status, titulo, subtitulo1, subtitulo2, fecha', 'required'),
			array('id_tipo_informe, id_usr, id_status', 'numerical', 'integerOnly'=>true),
			array('in_stat', 'length', 'max'=>1),
			array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('fe_crea, fe_modf', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_informe, id_tipo_informe, id_usr, id_status, titulo, subtitulo1, subtitulo2, fecha, in_stat, usr_crea, fe_crea, usr_modf, fe_modf', 'safe', 'on'=>'search'),
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
			'idTipoInforme' => array(self::BELONGS_TO, 'TabTipoInforme', 'id_tipo_informe'),
			'idStatus' => array(self::BELONGS_TO, 'TabStatus', 'id_status'),
			'tabPdfImpreso' => array(self::HAS_ONE, 'TabPdfImpreso', 'id_informe'),
			'tabDetalleSeccions' => array(self::MANY_MANY, 'TabDetalleSeccion', 'tab_informe_detalle(id_informe, id_detalle)'),
			'tabStatuses' => array(self::MANY_MANY, 'TabStatus', 'tab_informe_status(id_informe, id_status)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_informe' => 'Id Informe',
			'id_tipo_informe' => 'Id Tipo Informe',
			'id_usr' => 'Id Usr',
			'id_status' => 'Id Status',
			'titulo' => 'Titulo',
			'subtitulo1' => 'Subtitulo1',
			'subtitulo2' => 'Subtitulo2',
			'fecha' => 'Fecha',
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

		$criteria->compare('id_informe',$this->id_informe);
		$criteria->compare('id_tipo_informe',$this->id_tipo_informe);
		$criteria->compare('id_usr',$this->id_usr);
		$criteria->compare('id_status',$this->id_status);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('subtitulo1',$this->subtitulo1,true);
		$criteria->compare('subtitulo2',$this->subtitulo2,true);
		$criteria->compare('fecha',$this->fecha,true);
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
	 * @return TabInforme the static model class
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

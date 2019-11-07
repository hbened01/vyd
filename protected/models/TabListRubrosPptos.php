 <?php

/**
 * This is the model class for table "tab_list_rubros_pptos".
 *
 * The followings are the available columns in table 'tab_list_rubros_pptos':
 * @property string $id_list_rubros_pptos
 * @property integer $id_rubro
 * @property integer $id_categoria
 * @property integer $id_unidad_funcional
 * @property integer $id_entidad_legal
 * @property string $nb_rubro
 * @property string $nb_unidad_funcional
 * @property string $estado
 * @property string $signo
 * @property string $in_stat
 * @property string $usr_crea
 * @property string $fe_crea
 * @property string $usr_modf
 * @property string $fe_modf
 *
 * The followings are the available model relations:
 * @property TabCategorias $idCategoria
 * @property TabRubros $idRubro
 * @property TabUnidadFuncional $idUnidadFuncional
 * @property TabEntidadLegal $idEntidadLegal
 */
class TabListRubrosPptos extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'tab_list_rubros_pptos';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('nb_rubro, nb_unidad_funcional', 'required'),
            array('id_rubro, id_categoria, id_unidad_funcional, id_entidad_legal', 'numerical', 'integerOnly'=>true),
            array('nb_rubro, nb_unidad_funcional', 'length', 'max'=>100),
            array('estado', 'length', 'max'=>15),
            array('signo, in_stat', 'length', 'max'=>1),
            array('usr_crea, usr_modf', 'length', 'max'=>10),
            array('fe_crea, fe_modf', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id_list_rubros_pptos, id_rubro, id_categoria, id_unidad_funcional, id_entidad_legal, nb_rubro, nb_unidad_funcional, estado, signo, in_stat, usr_crea, fe_crea, usr_modf, fe_modf', 'safe', 'on'=>'search'),
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
            'idRubro' => array(self::BELONGS_TO, 'TabRubros', 'id_rubro'),
            'idUnidadFuncional' => array(self::BELONGS_TO, 'TabUnidadFuncional', 'id_unidad_funcional'),
            'idEntidadLegal' => array(self::BELONGS_TO, 'TabEntidadLegal', 'id_entidad_legal'),
        );
    }


	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_list_rubros_pptos' => 'Identificador',
			'id_rubro' => 'Id. Rubro',
			'id_categoria' => 'Id. Categoria',
			'id_unidad_funcional' => 'Id. Unidad Funcional',
			'id_entidad_legal' => 'Id. Entidad Legal',
			'nb_rubro' => 'Nombre del insumo',
			'nb_unidad_funcional' => 'Nombre de la unidad funcional',
			'estado' => 'Estado',
			'signo' => 'Signo',
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
		$criteria->compare('id_list_rubros_pptos',$this->id_list_rubros_pptos,true);
		$criteria->compare('id_rubro',$this->id_rubro);
		$criteria->compare('id_categoria',$this->id_categoria);
		$criteria->compare('id_unidad_funcional',$this->id_unidad_funcional);
		$criteria->compare('id_entidad_legal',$this->id_entidad_legal);
		//$criteria->compare('nb_rubro',$this->nb_rubro,true);
		$criteria->addSearchCondition('LOWER(nb_rubro)',strtolower($this->nb_rubro)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('nb_unidad_funcional',$this->nb_unidad_funcional,true);
		$criteria->addSearchCondition('LOWER(nb_unidad_funcional)',strtolower($this->nb_unidad_funcional)); // lee busquedas tanto en minúsculas como en mayúsculas;
		//$criteria->compare('estado',$this->estado,true);
		$criteria->addSearchCondition('LOWER(estado)',strtolower($this->estado)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('signo',$this->signo,true);
		$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);
        $criteria->order = "nb_rubro ASC";

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TabListRubrosPptos the static model class
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

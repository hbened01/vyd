<?php

/**
 * This is the model class for table "tab_hechos_realvspresupuesto".
 *
 * The followings are the available columns in table 'tab_hechos_realvspresupuesto':
 * @property integer $id_rubro
 * @property integer $id_unidad_funcional
 * @property integer $id_categoria
 * @property integer $registration_year
 * @property integer $id_mes
 * @property double $valor
 * @property integer $id_tipo_ingreso
 * @property integer $id_moneda
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
class TabHechosRealvspresupuesto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tab_hechos_realvspresupuesto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_rubro, id_unidad_funcional, id_categoria, registration_year, id_mes, id_tipo_ingreso, id_moneda', 'required'),
			array('id_rubro, id_unidad_funcional, id_categoria, registration_year, id_mes, id_tipo_ingreso, id_moneda', 'numerical', 'integerOnly'=>true),
			array('valor', 'numerical'),
			array('in_stat', 'length', 'max'=>1),
			array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('fe_crea, fe_modf', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_rubro, id_unidad_funcional, id_categoria, registration_year, id_mes, valor, id_tipo_ingreso, id_moneda, in_stat, usr_crea, fe_crea, usr_modf, fe_modf', 'safe', 'on'=>'search'),
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
			'id_rubro' => 'Rubro',
			'id_unidad_funcional' => 'Unidad Funcional',
			'id_categoria' => 'Categoria',
			'registration_year' => 'Año',
			'id_mes' => 'Mes',
			'valor' => 'Valor',
			'id_tipo_ingreso' => 'Tipo Ingreso',
			'id_moneda' => 'Moneda',
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

		$criteria->compare('id_rubro',$this->id_rubro);
		$criteria->compare('id_unidad_funcional',$this->id_unidad_funcional);
		$criteria->compare('id_categoria',$this->id_categoria);
		$criteria->compare('registration_year',$this->registration_year);
		$criteria->compare('id_mes',$this->id_mes);
		$criteria->compare('valor',$this->valor);
		$criteria->compare('id_tipo_ingreso',$this->id_tipo_ingreso);
		$criteria->compare('id_moneda',$this->id_moneda);
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

		$criteria->compare('id_rubro',$this->id_rubro);
		$criteria->compare('id_unidad_funcional',$this->id_unidad_funcional);
		$criteria->compare('id_categoria',$this->id_categoria);
		$criteria->compare('registration_year',$this->registration_year);
		$criteria->compare('id_mes',$this->id_mes);
		$criteria->compare('valor',$this->valor);
		$criteria->compare('id_tipo_ingreso',$this->id_tipo_ingreso);
		$criteria->compare('id_moneda',$this->id_moneda);
		$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);
		$criteria->order = "registration_year DESC";
		
		$hecho_data = new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));

		$_SESSION['hecho_records'] = $hecho_data;
        return $hecho_data;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TabHechosRealvspresupuesto the static model class
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

    public function Parametro1()
	{//Sentencia sql para enviar los datos a la gráfica de informes individuales.

		// Se definen las variables.
        $unidad_g = $_POST['descrip_unidad_funcional'];
        $categoria_g = $_POST['descrip_categoria'];
        $año_g = $_POST['registration_year'];  
        $rubro_g = $_POST['descrip_rubro'];

		$sql="SELECT  real.registration_year, mes.descrip_mes, unidad.descrip_unidad_funcional, cat.descrip_categoria, rubros.descrip_rubro, mon.descripcion_moneda, real.valor AS real, presupuesto.valor AS presupuesto 
                    FROM tab_hechos_realvspresupuesto AS real
                    JOIN tab_hechos_realvspresupuesto AS presupuesto
                    ON  real.id_tipo_ingreso = 1 AND presupuesto.id_tipo_ingreso = 2
                    AND real.id_mes = presupuesto.id_mes 
                    AND real.id_categoria = presupuesto.id_categoria
                    AND real.id_rubro = presupuesto.id_rubro 
                    AND real.id_unidad_funcional = presupuesto.id_unidad_funcional
                    AND real.id_moneda = presupuesto.id_moneda
                    AND real.registration_year = presupuesto.registration_year
                    JOIN tab_meses mes ON real.id_mes = mes.id_mes
                    JOIN tab_categorias cat ON real.id_categoria = cat.id_categoria
                    JOIN tab_rubros rubros ON real.id_rubro = rubros.id_rubro
                    JOIN tab_unidad_funcional unidad ON real.id_unidad_funcional = unidad.id_unidad_funcional
                    JOIN tab_tipo_ingreso des ON real.id_tipo_ingreso = des.id_tipo_ingreso
                    JOIN tab_moneda mon ON real.id_moneda = mon.id_moneda
                    WHERE
                    descrip_categoria = '".$categoria_g."'  
                    AND descrip_unidad_funcional = '".$unidad_g."' 
                    AND descrip_rubro = '".$rubro_g."' 
                    AND real.registration_year = '".$año_g."' 
                    ORDER BY mes.id_mes";
  		$datosGrafica = Yii::app()->db->createCommand($sql)->queryAll();
  		//Aqui se crea el objeto json
  		$arrayJson=json_encode($datosGrafica);
        // Se deja la variable
  		//$arrayJson;
        //Retorna el objeto json.
        return $arrayJson;
        //Prueba
        //print_r($año_g.$unidad_g.$categoria_g.$rubro_g);
	}

	public function Consulta()
    {//Sentencia sql para la vista de table
        $sql="SELECT rubros.descrip_rubro, 
          unidad.descrip_unidad_funcional, 
          cat.descrip_categoria, 
          hechos.registration_year, 
          mes.descrip_mes,
          hechos.valor, 
          ingreso.descripcion_ingreso, 
          moneda.descripcion_moneda
            FROM tab_hechos_realvspresupuesto AS hechos
            JOIN tab_rubros AS rubros ON hechos.id_rubro = rubros.id_rubro
            JOIN tab_unidad_funcional AS unidad ON hechos.id_unidad_funcional = unidad.id_unidad_funcional
            JOIN tab_categorias AS cat ON hechos.id_categoria = cat.id_categoria  
            JOIN tab_meses AS mes ON hechos.id_mes = mes.id_mes
            JOIN tab_tipo_ingreso AS ingreso ON hechos.id_tipo_ingreso = ingreso.id_tipo_ingreso
            JOIN tab_moneda AS moneda ON hechos.id_moneda = moneda.id_moneda
            limit 10 offset 0;";
        $datosGrafica = Yii::app()->db->createCommand($sql)->queryAll();
        $arrayJson=json_encode($datosGrafica);  
        return $arrayJson;  
    }

    public function Unidad($año_g=null)
    {  
        //verifico si esta seteado
        if (!is_null($año_g))
        {
        $sql="SELECT DISTINCT descrip_unidad_funcional FROM tabla_ingresos_individuales WHERE registration_year='".$año_g."';";
        $sql_und=Yii::app()->db->createCommand($sql)->queryAll();
        return $sql_und;
        }
    }

    public function Categoria($unidad_g=null)
    {  
        //verifico si esta seteado
        if (!is_null($unidad_g))
        {
        $sql="SELECT DISTINCT descrip_categoria from tabla_ingresos_individuales WHERE descrip_unidad_funcional='".$unidad_g."';";
        $sql_cat=Yii::app()->db->createCommand($sql)->queryAll();
        return $sql_cat;
        }
    }

    public function Rubro($categoria_g=null)
    {  
        //verifico si esta seteado
        if (!is_null($categoria_g))
        {
        $sql="SELECT DISTINCT descrip_rubro from tabla_ingresos_individuales WHERE descrip_categoria='".$categoria_g."';";
        $sql_rub=Yii::app()->db->createCommand($sql)->queryAll();
        return $sql_rub;
        }
    }
    
}

<?php

/**
 * This is the model class for table "tab_total_corporacion".
 *
 * The followings are the available columns in table 'tab_total_corporacion':
 * @property string $id_tot_corp
 * @property integer $id_mes
 * @property integer $anio
 * @property integer $id_total
 * @property integer $id_categoria
 * @property integer $id_tipo_ingreso
 * @property double $total
 * @property string $in_stat
 * @property string $usr_crea
 * @property string $fe_crea
 * @property string $usr_modf
 * @property string $fe_modf
 *
 * The followings are the available model relations:
 * @property TabTipoTotal $idTotal
 * @property TabCategorias $idCategoria
 * @property TabTipoIngreso $idTipoIngreso
 */
class TabTotalCorporacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tab_total_corporacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_mes, anio, id_total, id_categoria, id_tipo_ingreso', 'required'),
			array('id_mes, anio, id_total, id_categoria, id_tipo_ingreso', 'numerical', 'integerOnly'=>true),
			array('total', 'numerical'),
			array('in_stat', 'length', 'max'=>1),
			array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('fe_crea, fe_modf', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tot_corp, id_mes, anio, id_total, id_categoria, id_tipo_ingreso, total, in_stat, usr_crea, fe_crea, usr_modf, fe_modf', 'safe', 'on'=>'search'),
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
			'idTotal' => array(self::BELONGS_TO, 'TabTipoTotal', 'id_total'),
			'idCategoria' => array(self::BELONGS_TO, 'TabCategorias', 'id_categoria'),
			'idTipoIngreso' => array(self::BELONGS_TO, 'TabTipoIngreso', 'id_tipo_ingreso'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tot_corp' => 'Id. Tot Corp',
			'id_mes' => 'Mes',
			'anio' => 'Año',
			'id_total' => 'Nombre del total',
			'id_categoria' => 'Categoria',
			'id_tipo_ingreso' => 'Tipo de ingreso',
			'total' => 'Total',
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

		$criteria->compare('id_tot_corp',$this->id_tot_corp,true);
		$criteria->compare('id_mes',$this->id_mes);
		$criteria->compare('anio',$this->anio);
		$criteria->compare('id_total',$this->id_total);
		$criteria->compare('id_categoria',$this->id_categoria);
		$criteria->compare('id_tipo_ingreso',$this->id_tipo_ingreso);
		$criteria->compare('total',$this->total);
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

		$criteria->compare('id_tot_corp',$this->id_tot_corp,true);
		$criteria->compare('id_mes',$this->id_mes);
		$criteria->compare('anio',$this->anio);
		$criteria->compare('id_total',$this->id_total);
		$criteria->compare('id_categoria',$this->id_categoria);
		$criteria->compare('id_tipo_ingreso',$this->id_tipo_ingreso);
		$criteria->compare('total',$this->total);
		$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);
		$criteria->order = "anio DESC";

		$corporacion_data = new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));

		$_SESSION['corporacion_records'] = $corporacion_data;
        return $corporacion_data;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TabTotalCorporacion the static model class
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
	{
	//Sentencia sql para enviar los datos a la gráfica.
        $total_g = $_POST['descrip_total'];
        $categoria_g = $_POST['descrip_categoria'];
        $año_g = $_POST['anio'];  

		$sql="SELECT real.anio, mes.descrip_mes, tot.descrip_total, cat.descrip_categoria, real.total AS real, presupuesto.total AS presupuesto 
            FROM tab_total_corporacion AS real
                JOIN tab_total_corporacion AS presupuesto
                ON  real.id_tipo_ingreso = 1 AND presupuesto.id_tipo_ingreso = 2
                AND real.id_mes = presupuesto.id_mes
                AND real.anio = presupuesto.anio 
                AND real.id_total = presupuesto.id_total
                AND real.id_categoria = presupuesto.id_categoria
                JOIN tab_meses mes ON real.id_mes = mes.id_mes
                JOIN tab_categorias cat ON real.id_categoria = cat.id_categoria
                JOIN tab_tipo_total tot ON real.id_total = tot.id_total
                JOIN tab_tipo_ingreso ing ON real.id_tipo_ingreso = ing.id_tipo_ingreso
            WHERE
                descrip_categoria = '".$categoria_g."' 
                AND descrip_total = '".$total_g."' 
                AND real.anio = '".$año_g."'
                AND NOT mes.id_mes = 13
                ORDER BY mes.id_mes";

  		$datosGrafica = Yii::app()->db->createCommand($sql)->queryAll();
  		$arrayJson=json_encode($datosGrafica);
        return $arrayJson;
	}

	public function Parametro2()
    {
    //Sentencia sql para enviar los datos a la gráfica.
        $total_g = $_POST['descrip_total'];
        $categoria_g = $_POST['descrip_categoria'];
        $año_g = $_POST['anio'];  

        $sql2="SELECT real.anio, mes.descrip_mes, tot.descrip_total, cat.descrip_categoria, ing.descripcion_ingreso, real.total
            FROM tab_total_corporacion AS real
                JOIN tab_meses mes ON real.id_mes = mes.id_mes
                JOIN tab_categorias cat ON real.id_categoria = cat.id_categoria
                JOIN tab_tipo_total tot ON real.id_total = tot.id_total
                JOIN tab_tipo_ingreso ing ON real.id_tipo_ingreso = ing.id_tipo_ingreso
            WHERE
                descrip_categoria = '".$categoria_g."' 
                AND descrip_total = '".$total_g."' 
                AND real.anio = '".$año_g."'
                AND mes.id_mes = 13
                ORDER BY mes.id_mes";

        $datosGrafica2 = Yii::app()->db->createCommand($sql2)->queryAll();
        $arrayJson2=json_encode($datosGrafica2);
        return $arrayJson2;
    }
    
}

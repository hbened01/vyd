<?php

/**
 * This is the model class for table "tab_cap_red".
 *
 * The followings are the available columns in table 'tab_cap_red':
 * @property string $id_cap_red
 * @property integer $distrito
 * @property integer $central
 * @property string $nombre_central
 * @property integer $serial
 * @property string $categoria
 * @property integer $total_numeros_con_normativa
 * @property integer $total_numeros_libres_con_normativa
 * @property integer $total_numeros_trabajados_asignados
 * @property integer $numeros_en_investigacion
 * @property integer $no_asociado_a_pares
 * @property integer $pendiente_por_instalacion
 * @property integer $pendiente_por_retirar
 * @property integer $pendiente_por_transferencia
 * @property integer $ocupados
 * @property integer $pendiente_por_liberar
 * @property integer $número_ocupado_abonado_inactivo
 * @property integer $no_asociado_a_central
 * @property integer $no_asociado_a_red_local
 * @property integer $pendiente_por_mudanza
 * @property integer $modernizado
 * @property integer $desincorporado
 * @property integer $pendiente_por_ubicacion
 * @property integer $reubicado
 * @property integer $restriccion_tecnica
 * @property integer $capacidad_de_la_central
 * @property string $fecha_procedimiento
 */
class TabCapRed extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tab_cap_red';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('distrito, central, serial, total_numeros_con_normativa, total_numeros_libres_con_normativa, total_numeros_trabajados_asignados, numeros_en_investigacion, no_asociado_a_pares, pendiente_por_instalacion, pendiente_por_retirar, pendiente_por_transferencia, ocupados, pendiente_por_liberar, número_ocupado_abonado_inactivo, no_asociado_a_central, no_asociado_a_red_local, pendiente_por_mudanza, modernizado, desincorporado, pendiente_por_ubicacion, reubicado, restriccion_tecnica, capacidad_de_la_central', 'numerical', 'integerOnly'=>true),
			array('nombre_central', 'length', 'max'=>30),
			array('categoria', 'length', 'max'=>2),
			array('fecha_procedimiento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cap_red, distrito, central, nombre_central, serial, categoria, total_numeros_con_normativa, total_numeros_libres_con_normativa, total_numeros_trabajados_asignados, numeros_en_investigacion, no_asociado_a_pares, pendiente_por_instalacion, pendiente_por_retirar, pendiente_por_transferencia, ocupados, pendiente_por_liberar, número_ocupado_abonado_inactivo, no_asociado_a_central, no_asociado_a_red_local, pendiente_por_mudanza, modernizado, desincorporado, pendiente_por_ubicacion, reubicado, restriccion_tecnica, capacidad_de_la_central, fecha_procedimiento', 'safe', 'on'=>'search'),
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
			'id_cap_red' => 'Id. Cap red',
			'distrito' => 'Distrito',
			'central' => 'Central',
			'nombre_central' => 'Nombre central',
			'serial' => 'Serial',
			'categoria' => 'Categoria',
			'total_numeros_con_normativa' => 'Total numeros con normativa',
			'total_numeros_libres_con_normativa' => 'Total numeros libres con normativa',
			'total_numeros_trabajados_asignados' => 'Total numeros trabajados asignados',
			'numeros_en_investigacion' => 'Numeros en investigacion',
			'no_asociado_a_pares' => 'No asociado a pares',
			'pendiente_por_instalacion' => 'Pendiente por instalacion',
			'pendiente_por_retirar' => 'Pendiente por retirar',
			'pendiente_por_transferencia' => 'Pendiente por transferencia',
			'ocupados' => 'Ocupados',
			'pendiente_por_liberar' => 'Pendiente por liberar',
			'número_ocupado_abonado_inactivo' => 'Número ocupado abonado inactivo',
			'no_asociado_a_central' => 'No asociado a central',
			'no_asociado_a_red_local' => 'No asociado a red local',
			'pendiente_por_mudanza' => 'Pendiente por mudanza',
			'modernizado' => 'Modernizado',
			'desincorporado' => 'Desincorporado',
			'pendiente_por_ubicacion' => 'Pendiente por ubicacion',
			'reubicado' => 'Reubicado',
			'restriccion_tecnica' => 'Restriccion tecnica',
			'capacidad_de_la_central' => 'Capacidad de la central',
			'fecha_procedimiento' => 'Fecha procedimiento',
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

		$criteria->compare('id_cap_red',$this->id_cap_red,true);
		$criteria->compare('distrito',$this->distrito);
		$criteria->compare('central',$this->central);
		//$criteria->compare('nombre_central',$this->nombre_central,true);
		$criteria->addSearchCondition('LOWER(nombre_central)',strtolower($this->nombre_central)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('serial',$this->serial);
		//$criteria->compare('categoria',$this->categoria,true);
		$criteria->addSearchCondition('LOWER(categoria',strtolower($this->categoria)); // lee busquedas tanto en minúsculas como en mayúsculas;
		$criteria->compare('total_numeros_con_normativa',$this->total_numeros_con_normativa);
		$criteria->compare('total_numeros_libres_con_normativa',$this->total_numeros_libres_con_normativa);
		$criteria->compare('total_numeros_trabajados_asignados',$this->total_numeros_trabajados_asignados);
		$criteria->compare('numeros_en_investigacion',$this->numeros_en_investigacion);
		$criteria->compare('no_asociado_a_pares',$this->no_asociado_a_pares);
		$criteria->compare('pendiente_por_instalacion',$this->pendiente_por_instalacion);
		$criteria->compare('pendiente_por_retirar',$this->pendiente_por_retirar);
		$criteria->compare('pendiente_por_transferencia',$this->pendiente_por_transferencia);
		$criteria->compare('ocupados',$this->ocupados);
		$criteria->compare('pendiente_por_liberar',$this->pendiente_por_liberar);
		$criteria->compare('número_ocupado_abonado_inactivo',$this->número_ocupado_abonado_inactivo);
		$criteria->compare('no_asociado_a_central',$this->no_asociado_a_central);
		$criteria->compare('no_asociado_a_red_local',$this->no_asociado_a_red_local);
		$criteria->compare('pendiente_por_mudanza',$this->pendiente_por_mudanza);
		$criteria->compare('modernizado',$this->modernizado);
		$criteria->compare('desincorporado',$this->desincorporado);
		$criteria->compare('pendiente_por_ubicacion',$this->pendiente_por_ubicacion);
		$criteria->compare('reubicado',$this->reubicado);
		$criteria->compare('restriccion_tecnica',$this->restriccion_tecnica);
		$criteria->compare('capacidad_de_la_central',$this->capacidad_de_la_central);
		$criteria->compare('fecha_procedimiento',$this->fecha_procedimiento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TabCapRed the static model class
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

                        'ActiveRecordLogableBehavior' => 'application.components.ActiveRecordLogableBehavior',
		);

	}
	
}

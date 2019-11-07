<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'insumos reales'=>array('index'),
	'ver',
);

$this->menu=array(
	/*
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('Create')),
	array('label'=>'Actualizar registro', 'url'=>array('update', 'fecha'=>$model->fecha, 'rubro'=>$model->rubro, 'entidad_legal'=>$model->entidad_legal, 'segmento'=>$model->segmento, 'monto'=>$model->monto)),
	array('label'=>'Eliminar registro', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'fecha'=>$model->fecha, 'rubro'=>$model->rubro, 'entidad_legal'=>$model->entidad_legal, 'segmento'=>$model->segmento, 'monto'=>$model->monto),
									'confirm'=>'¿Está seguro que desea eliminar este registro?')),
									*/
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>
<br>
<h1>Insumos reales</h1>
<br>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rubro',
		'unidad_negocio',
		'entidad_legal',
		'anio',
		//'id_mes',
		'idMes.descrip_mes',
		'monto',
		//'id_tipo_ingreso',
		'idTipoIngreso.descripcion_ingreso',
		//'id_moneda',
		'idMoneda.descripcion_moneda',
		'usr_crea',
		//'fe_crea',
		array('name'=>'fe_crea','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_crea)),
		'usr_modf',
		//'fe_modf',
		array('name'=>'fe_modf','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_modf)),
		//'fecha',
		//'anio',
		//'rubro',
		//'entidad_legal',
		//'unidad_negocio',
		//'segmento',
		//'monto',
		//'signo',
		//'id_mes',
		//'id_moneda',
		//'id_tipo_ingreso',
		//'id_rubro',
		//'id_categoria',
		//'id_unidad_funcional',
		//'id_voz_datos_reales',
		//'in_stat',
		//'usr_crea',
		//'fe_crea',
		//'usr_modf',
		//'fe_modf',
	),
)); ?>

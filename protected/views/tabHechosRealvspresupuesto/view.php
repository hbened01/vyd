<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'vistas de ingresos pptos vs reales'=>array('index'),
	'ver',
);

$this->menu=array(
	/*
	array('label'=>'Listar registro', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Actualizar registro', 'url'=>array('update', 'id_rubro'=>$model->id_rubro, 'id_unidad_funcional'=>$model->id_unidad_funcional, 'id_categoria'=>$model->id_categoria, 'registration_year'=>$model->registration_year, 'id_mes'=>$model->id_mes, 'id_tipo_ingreso'=>$model->id_tipo_ingreso, 'id_moneda'=>$model->id_moneda)),
	array('label'=>'Eliminar registro', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_rubro'=>$model->id_rubro, 'id_unidad_funcional'=>$model->id_unidad_funcional, 'id_categoria'=>$model->id_categoria, 'registration_year'=>$model->registration_year, 'id_mes'=>$model->id_mes, 'id_tipo_ingreso'=>$model->id_tipo_ingreso, 'id_moneda'=>$model->id_moneda),
									'confirm'=>'¿Está seguro que desea eliminar este registro?')), 
									*/
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>
<br>
<h1>Reales vs Presupuestados</h1>
<br>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_rubro',
		'idRubro.descrip_rubro',
		//'id_unidad_funcional',
		'idUnidadFuncional.descrip_unidad_funcional',
		//'id_categoria',
		'idCategoria.descrip_categoria',
		'registration_year',
		//'id_mes',
		'idMes.descrip_mes',
		'valor',
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
	),
)); ?>

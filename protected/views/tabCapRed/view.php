<?php
/* @var $this TabCapRedController */
/* @var $model TabCapRed */

$this->breadcrumbs=array(
	'capacidad de la red'=>array('index'),
	$model->id_cap_red,
);

$this->menu=array(
	array('label'=>'Listar registro', 'url'=>array('index')),
	/*
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Actualizar registro', 'url'=>array('update', 'id'=>$model->id_cap_red)),
	array('label'=>'Eliminar registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cap_red),'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	*/
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Vista de registro</h1>
<br>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cap_red',
		'distrito',
		'central',
		'nombre_central',
		'serial',
		'categoria',
		
		/*
		'total_numeros_con_normativa',
		'total_numeros_libres_con_normativa',
		'total_numeros_trabajados_asignados',
		'numeros_en_investigacion',
		'no_asociado_a_pares',
		'pendiente_por_instalacion',
		'pendiente_por_retirar',
		'pendiente_por_transferencia',
		'ocupados',
		'pendiente_por_liberar',
		'número_ocupado_abonado_inactivo',
		'no_asociado_a_central',
		'no_asociado_a_red_local',
		'pendiente_por_mudanza',
		'modernizado',
		'desincorporado',
		'pendiente_por_ubicacion',
		'reubicado',
		'restriccion_tecnica',
		'capacidad_de_la_central',
		'fecha_procedimiento',*/
	),
)); ?>

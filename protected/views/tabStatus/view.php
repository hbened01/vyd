<?php
/* @var $this TabStatusController */
/* @var $model TabStatus */

$this->breadcrumbs=array(
	'Tab Statuses'=>array('index'),
	$model->id_status,
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Actualizar registro', 'url'=>array('update', 'id'=>$model->id_status)),
	array('label'=>'Eliminar registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_status),'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Vista de registro</h1>
<br>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_status',
		'descrip_status',
	),
)); ?>

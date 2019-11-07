<?php
/* @var $this TabMesesController */
/* @var $model TabMeses */

$this->breadcrumbs=array(
	'Tab Meses'=>array('index'),
	$model->id_mes,
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Actualizar registro', 'url'=>array('update', 'id'=>$model->id_mes)),
	array('label'=>'Eliminar registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_mes),'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Vista de registro</h1>
<br>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_mes',
		'descrip_mes',
	),
)); ?>

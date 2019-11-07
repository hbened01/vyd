<?php
/* @var $this TabGraficoController */
/* @var $model TabGrafico */

$this->breadcrumbs=array(
	'Tab Graficos'=>array('index'),
	$model->id_grafico,
);

$this->menu=array(
	array('label'=>'List TabGrafico', 'url'=>array('index')),
	array('label'=>'Create TabGrafico', 'url'=>array('create')),
	array('label'=>'Update TabGrafico', 'url'=>array('update', 'id'=>$model->id_grafico)),
	array('label'=>'Delete TabGrafico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_grafico),'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	array('label'=>'Manage TabGrafico', 'url'=>array('admin')),
);
?>

<br>
<h1>Vista de registro</h1>
<br>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_grafico',
		'id_detalle',
		'descrip_grafico',
		'observacion',
		'byte',
		'ext',
	),
)); ?>

<?php
/* @var $this TabInformeController */
/* @var $model TabInforme */

$this->breadcrumbs=array(
	'Tab Informes'=>array('index'),
	$model->id_informe,
);

$this->menu=array(
	array('label'=>'List TabInforme', 'url'=>array('index')),
	array('label'=>'Create TabInforme', 'url'=>array('create')),
	array('label'=>'Update TabInforme', 'url'=>array('update', 'id'=>$model->id_informe)),
	array('label'=>'Delete TabInforme', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_informe),'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	array('label'=>'Manage TabInforme', 'url'=>array('admin')),
);
?>

<br>
<h1>Vista de registro</h1>
<br>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_informe',
		'id_tipo_informe',
		'id_usr',
		'id_status',
		'titulo',
		'subtitulo1',
		'subtitulo2',
		'fecha',
	),
)); ?>

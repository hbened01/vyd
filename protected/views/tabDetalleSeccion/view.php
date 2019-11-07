<?php
/* @var $this TabDetalleSeccionController */
/* @var $model TabDetalleSeccion */

$this->breadcrumbs=array(
	'Tab Detalle Seccions'=>array('index'),
	$model->id_detalle,
);

$this->menu=array(
	array('label'=>'List TabDetalleSeccion', 'url'=>array('index')),
	array('label'=>'Create TabDetalleSeccion', 'url'=>array('create')),
	array('label'=>'Update TabDetalleSeccion', 'url'=>array('update', 'id'=>$model->id_detalle)),
	array('label'=>'Delete TabDetalleSeccion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_detalle),'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	array('label'=>'Manage TabDetalleSeccion', 'url'=>array('admin')),
);
?>

<h1>View TabDetalleSeccion #<?php echo $model->id_detalle; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_detalle',
		'id_seccion',
		'observacion',
	),
)); ?>

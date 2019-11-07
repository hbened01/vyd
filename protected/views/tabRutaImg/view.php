<?php
/* @var $this TabRutaImgController */
/* @var $model TabRutaImg */

$this->breadcrumbs=array(
	'Tab Ruta Imgs'=>array('index'),
	$model->id_ruta,
);

$this->menu=array(
	array('label'=>'List TabRutaImg', 'url'=>array('index')),
	array('label'=>'Create TabRutaImg', 'url'=>array('create')),
	array('label'=>'Update TabRutaImg', 'url'=>array('update', 'id'=>$model->id_ruta)),
	array('label'=>'Delete TabRutaImg', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ruta),'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	array('label'=>'Manage TabRutaImg', 'url'=>array('admin')),
);
?>

<h1>View TabRutaImg #<?php echo $model->id_ruta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ruta',
		'id_seccion',
		'ruta_img',
		'descrip_img',
	),
)); ?>

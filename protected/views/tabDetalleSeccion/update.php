<?php
/* @var $this TabDetalleSeccionController */
/* @var $model TabDetalleSeccion */

$this->breadcrumbs=array(
	'Tab Detalle Seccions'=>array('index'),
	$model->id_detalle=>array('view','id'=>$model->id_detalle),
	'Update',
);

$this->menu=array(
	array('label'=>'List TabDetalleSeccion', 'url'=>array('index')),
	array('label'=>'Create TabDetalleSeccion', 'url'=>array('create')),
	array('label'=>'View TabDetalleSeccion', 'url'=>array('view', 'id'=>$model->id_detalle)),
	array('label'=>'Manage TabDetalleSeccion', 'url'=>array('admin')),
);
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
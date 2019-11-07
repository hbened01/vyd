<?php
/* @var $this TabDetalleSeccionController */
/* @var $model TabDetalleSeccion */

$this->breadcrumbs=array(
	'Tab Detalle Seccions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TabDetalleSeccion', 'url'=>array('index')),
	array('label'=>'Manage TabDetalleSeccion', 'url'=>array('admin')),
);
?>

<h1>Create TabDetalleSeccion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this TabRutaImgController */
/* @var $model TabRutaImg */

$this->breadcrumbs=array(
	'Tab Ruta Imgs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TabRutaImg', 'url'=>array('index')),
	array('label'=>'Manage TabRutaImg', 'url'=>array('admin')),
);
?>

<h1>Create TabRutaImg</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this TabEntidadLegalController */
/* @var $model TabEntidadLegal */

$this->breadcrumbs=array(
	'Tab Entidad Legals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TabEntidadLegal', 'url'=>array('index')),
	array('label'=>'Manage TabEntidadLegal', 'url'=>array('admin')),
);
?>

<h1>Create TabEntidadLegal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
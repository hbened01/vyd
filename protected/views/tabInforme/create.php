<?php
/* @var $this TabInformeController */
/* @var $model TabInforme */

$this->breadcrumbs=array(
	'Tab Informes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TabInforme', 'url'=>array('index')),
	array('label'=>'Manage TabInforme', 'url'=>array('admin')),
);
?>

<h1>Create TabInforme</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
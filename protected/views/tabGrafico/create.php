<?php
/* @var $this TabGraficoController */
/* @var $model TabGrafico */

$this->breadcrumbs=array(
	'Tab Graficos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TabGrafico', 'url'=>array('index')),
	array('label'=>'Manage TabGrafico', 'url'=>array('admin')),
);
?>

<h1>Create TabGrafico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
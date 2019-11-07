<?php
/* @var $this TabGraficoController */
/* @var $model TabGrafico */

$this->breadcrumbs=array(
	'Tab Graficos'=>array('index'),
	$model->id_grafico=>array('view','id'=>$model->id_grafico),
	'Update',
);

$this->menu=array(
	array('label'=>'List TabGrafico', 'url'=>array('index')),
	array('label'=>'Create TabGrafico', 'url'=>array('create')),
	array('label'=>'View TabGrafico', 'url'=>array('view', 'id'=>$model->id_grafico)),
	array('label'=>'Manage TabGrafico', 'url'=>array('admin')),
);
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
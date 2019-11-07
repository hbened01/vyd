<?php
/* @var $this TabInformeController */
/* @var $model TabInforme */

$this->breadcrumbs=array(
	'Tab Informes'=>array('index'),
	$model->id_informe=>array('view','id'=>$model->id_informe),
	'Update',
);

$this->menu=array(
	array('label'=>'List TabInforme', 'url'=>array('index')),
	array('label'=>'Create TabInforme', 'url'=>array('create')),
	array('label'=>'View TabInforme', 'url'=>array('view', 'id'=>$model->id_informe)),
	array('label'=>'Manage TabInforme', 'url'=>array('admin')),
);
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
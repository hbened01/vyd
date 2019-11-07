<?php
/* @var $this TabStatusController */
/* @var $model TabStatus */

$this->breadcrumbs=array(
	'Tab Statuses'=>array('index'),
	$model->id_status=>array('view','id'=>$model->id_status),
	'actualizar',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Ver registro', 'url'=>array('view', 'id'=>$model->id_status)),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
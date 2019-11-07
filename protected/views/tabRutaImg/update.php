<?php
/* @var $this TabRutaImgController */
/* @var $model TabRutaImg */

$this->breadcrumbs=array(
	'Tab Ruta Imgs'=>array('index'),
	$model->id_ruta=>array('view','id'=>$model->id_ruta),
	'Update',
);

$this->menu=array(
	array('label'=>'List TabRutaImg', 'url'=>array('index')),
	array('label'=>'Create TabRutaImg', 'url'=>array('create')),
	array('label'=>'View TabRutaImg', 'url'=>array('view', 'id'=>$model->id_ruta)),
	array('label'=>'Manage TabRutaImg', 'url'=>array('admin')),
);
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
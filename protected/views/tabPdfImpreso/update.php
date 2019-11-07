<?php
/* @var $this TabPdfImpresoController */
/* @var $model TabPdfImpreso */

$this->breadcrumbs=array(
	'Tab Pdf Impresos'=>array('index'),
	$model->id_informe=>array('view','id'=>$model->id_informe),
	'Update',
);

$this->menu=array(
	array('label'=>'List TabPdfImpreso', 'url'=>array('index')),
	array('label'=>'Create TabPdfImpreso', 'url'=>array('create')),
	array('label'=>'View TabPdfImpreso', 'url'=>array('view', 'id'=>$model->id_informe)),
	array('label'=>'Manage TabPdfImpreso', 'url'=>array('admin')),
);
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
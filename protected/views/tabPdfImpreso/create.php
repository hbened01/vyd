<?php
/* @var $this TabPdfImpresoController */
/* @var $model TabPdfImpreso */

$this->breadcrumbs=array(
	'Tab Pdf Impresos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TabPdfImpreso', 'url'=>array('index')),
	array('label'=>'Manage TabPdfImpreso', 'url'=>array('admin')),
);
?>

<h1>Create TabPdfImpreso</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
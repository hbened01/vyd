<?php
/* @var $this TabPdfImpresoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tab Pdf Impresos',
);

$this->menu=array(
	array('label'=>'Create TabPdfImpreso', 'url'=>array('create')),
	array('label'=>'Manage TabPdfImpreso', 'url'=>array('admin')),
);
?>

<h1>Tab Pdf Impresos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this TabInformeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tab Informes',
);

$this->menu=array(
	array('label'=>'Create TabInforme', 'url'=>array('create')),
	array('label'=>'Manage TabInforme', 'url'=>array('admin')),
);
?>

<h1>Tab Informes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

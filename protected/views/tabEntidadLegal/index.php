<?php
/* @var $this TabEntidadLegalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tab Entidad Legals',
);

$this->menu=array(
	array('label'=>'Create TabEntidadLegal', 'url'=>array('create')),
	array('label'=>'Manage TabEntidadLegal', 'url'=>array('admin')),
);
?>

<h1>Tab Entidad Legals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

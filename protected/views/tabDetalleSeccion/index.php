<?php
/* @var $this TabDetalleSeccionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tab Detalle Seccions',
);

$this->menu=array(
	array('label'=>'Create TabDetalleSeccion', 'url'=>array('create')),
	array('label'=>'Manage TabDetalleSeccion', 'url'=>array('admin')),
);
?>

<h1>Tab Detalle Seccions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

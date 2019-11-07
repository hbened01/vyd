<?php
/* @var $this TabRutaImgController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tab Ruta Imgs',
);

$this->menu=array(
	array('label'=>'Create TabRutaImg', 'url'=>array('create')),
	array('label'=>'Manage TabRutaImg', 'url'=>array('admin')),
);
?>

<h1>Tab Ruta Imgs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this TabMesesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tab Meses',
);

$this->menu=array(
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>
<br>
<h1>Tab Meses</h1>
<br>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

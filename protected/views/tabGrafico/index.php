<?php
/* @var $this TabGraficoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tab Graficos',
);

$this->menu=array(
	array('label'=>'Create TabGrafico', 'url'=>array('create')),
	array('label'=>'Manage TabGrafico', 'url'=>array('admin')),
);
?>

<h1>Tab Graficos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

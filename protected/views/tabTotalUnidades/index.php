<?php
/* @var $this TabTotalUnidadesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'total ingresos por unidades',
);

$this->menu=array(
	/*
    array('label'=>'Crear registro', 'url'=>array('create')),
    */
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>
<br>
<h1>Total ingresos por unidades</h1>
<br>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

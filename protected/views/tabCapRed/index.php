<?php
/* @var $this TabCapRedController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'capacidad de la red',
);

$this->menu=array(
    /*
	array('label'=>'Crear registro', 'url'=>array('create')),
    */
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>
<br>
<h1>Capacidad de la red</h1>
<br>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

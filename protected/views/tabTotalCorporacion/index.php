<?php
/* @var $this TabTotalCorporacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'total ingresos de la corporación',
);

$this->menu=array(
    /*
	array('label'=>'Crear registro', 'url'=>array('create')),
    */
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>
<br>
<h1>Ver registros</h1>
<br>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

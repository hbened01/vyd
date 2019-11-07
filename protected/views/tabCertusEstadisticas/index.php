<?php
/* @var $this TabCertusEstadisticasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'insumos de estadísticas',
);

$this->menu=array(
	/*
    array('label'=>'Crear registros', 'url'=>array('create')),
    */
    array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>
<br>
<h1>Insumos de estadísticas</h1>
<br>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this TabMovilnetActivacionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'movilnet activaciones',
);

$this->menu=array(
    /*
	array('label'=>'Crear registro', 'url'=>array('create')),
    */
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>
<br>
<h1>Movilnet activaciones</h1>
<br>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

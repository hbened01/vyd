<?php
/* @var $this TabMovilnetClientesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'movilnet clientes',
);

$this->menu=array(
    /*
	array('label'=>'Crear registro', 'url'=>array('create')),
    */
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>
<br>
<h1>Movilnet clientes</h1>
<br>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this TabMonedaController */
/* @var $model TabMoneda */

$this->breadcrumbs=array(
	'Tab Monedas'=>array('index'),
	$model->id_moneda=>array('view','id'=>$model->id_moneda),
	'actualizar',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Ver registro', 'url'=>array('view', 'id'=>$model->id_moneda)),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
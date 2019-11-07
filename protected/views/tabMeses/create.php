<?php
/* @var $this TabMesesController */
/* @var $model TabMeses */

$this->breadcrumbs=array(
	'Tab Meses'=>array('index'),
	'crear',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Crear registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
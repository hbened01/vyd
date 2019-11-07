<?php
/* @var $this TabTipoIngresoController */
/* @var $model TabTipoIngreso */

$this->breadcrumbs=array(
	'Tab Tipo Ingresos'=>array('index'),
	$model->id_tipo_ingreso=>array('view','id'=>$model->id_tipo_ingreso),
	'actualizar',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Ver registro', 'url'=>array('view', 'id'=>$model->id_tipo_ingreso)),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
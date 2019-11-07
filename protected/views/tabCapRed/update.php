<?php
/* @var $this TabCapRedController */
/* @var $model TabCapRed */

$this->breadcrumbs=array(
	'capacidad de la red'=>array('index'),
	$model->id_cap_red=>array('view','id'=>$model->id_cap_red),
	'actualizar',
);

$this->menu=array(
	array('label'=>'Listar registro', 'url'=>array('index')),
    /*
	array('label'=>'Crear registro', 'url'=>array('create')),
    */
	array('label'=>'Ver registro', 'url'=>array('view', 'id'=>$model->id_cap_red)),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this TabTipoTotalController */
/* @var $model TabTipoTotal */

$this->breadcrumbs=array(
	'tipos de totales'=>array('index'),
	//$model->id_total=>array('view','id'=>$model->id_total),
	'actualizar',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Ver registro', 'url'=>array('view', 'id'=>$model->id_total)),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>
<br>
<h1>Actualizar registro</h1>
<br>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
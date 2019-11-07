<?php
/* @var $this TabUnidadFuncionalController */
/* @var $model TabUnidadFuncional */

$this->breadcrumbs=array(
	'listados de unidades funcionales'=>array('index'),
	//$model->id_unidad_funcional=>array('view','id'=>$model->id_unidad_funcional),
	'actualizar',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Ver registro', 'url'=>array('view', 'id'=>$model->id_unidad_funcional)),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<h1>Actualizar registro <?php echo $model->id_unidad_funcional; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
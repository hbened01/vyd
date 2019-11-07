<?php
/* @var $this TabCategoriasController */
/* @var $model TabCategorias */

$this->breadcrumbs=array(
	'tipos de categorias'=>array('index'),
	//$model->id_categoria=>array('view','id'=>$model->id_categoria),
	'actualizar',
);

$this->menu=array(
	array('label'=>'Listar registro', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Ver registro', 'url'=>array('view', 'id'=>$model->id_categoria)),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
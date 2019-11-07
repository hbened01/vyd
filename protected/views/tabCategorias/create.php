<?php
/* @var $this TabCategoriasController */
/* @var $model TabCategorias */

$this->breadcrumbs=array(
	'tipos de categorias'=>array('index'),
	'crear',
);

$this->menu=array(
	array('label'=>'Listar registro', 'url'=>array('index')),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Crear registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
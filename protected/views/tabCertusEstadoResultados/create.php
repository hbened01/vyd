<?php
/* @var $this TabCertusEstadoResultadosController */
/* @var $model TabCertusEstadoResultados */

$this->breadcrumbs=array(
	'insumos de estado resultados'=>array('index'),
    'crear',
);

$this->menu=array(
	/*
    array('label'=>'Listar registro', 'url'=>array('index')),
    */
    array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Crear registro</h1>
<br>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
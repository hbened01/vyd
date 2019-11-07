<?php
/* @var $this TabMovilnetClientesController */
/* @var $model TabMovilnetClientes */

$this->breadcrumbs=array(
	'movilnet clientes'=>array('index'),
	//$model->id_mov_cli=>array('view','id'=>$model->id_mov_cli),
	'actualizar',
);

$this->menu=array(
    /*
    array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
    */
	array('label'=>'Ver registro', 'url'=>array('view', 'id'=>$model->id_mov_cli)),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
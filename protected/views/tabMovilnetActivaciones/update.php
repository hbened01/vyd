<?php
/* @var $this TabMovilnetActivacionesController */
/* @var $model TabMovilnetActivaciones */

$this->breadcrumbs=array(
	'movilnet activaciones'=>array('index'),
	//$model->id_mov_act=>array('view','id'=>$model->id_mov_act),
	'actualizar',
);

$this->menu=array(
    /*
    array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
    */
	array('label'=>'Ver registro', 'url'=>array('view', 'id'=>$model->id_mov_act)),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
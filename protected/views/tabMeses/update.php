<?php
/* @var $this TabMesesController */
/* @var $model TabMeses */

$this->breadcrumbs=array(
	'Tab Meses'=>array('index'),
	$model->id_mes=>array('view','id'=>$model->id_mes),
	'actualizar',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Ver registro', 'url'=>array('view', 'id'=>$model->id_mes)),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<h1>Actualizar registro <?php echo $model->id_mes; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
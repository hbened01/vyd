<?php
/* @var $this TabEntidadLegalController */
/* @var $model TabEntidadLegal */

$this->breadcrumbs=array(
	'Tab Entidad Legals'=>array('index'),
	$model->id_entidad_legal=>array('view','id'=>$model->id_entidad_legal),
	'Update',
);

$this->menu=array(
	array('label'=>'List TabEntidadLegal', 'url'=>array('index')),
	array('label'=>'Create TabEntidadLegal', 'url'=>array('create')),
	array('label'=>'View TabEntidadLegal', 'url'=>array('view', 'id'=>$model->id_entidad_legal)),
	array('label'=>'Manage TabEntidadLegal', 'url'=>array('admin')),
);
?>

<h1>Update TabEntidadLegal <?php echo $model->id_entidad_legal; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
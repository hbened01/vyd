<?php
/* @var $this TabTipoInformeController */
/* @var $model TabTipoInforme */

$this->breadcrumbs=array(
	'Tab Tipo Informes'=>array('index'),
	$model->id_tipo_informe=>array('view','id'=>$model->id_tipo_informe),
	'actualizar',
);

$this->menu=array(
	array('label'=>'List TabTipoInforme', 'url'=>array('index')),
	array('label'=>'Create TabTipoInforme', 'url'=>array('create')),
	array('label'=>'View TabTipoInforme', 'url'=>array('view', 'id'=>$model->id_tipo_informe)),
	array('label'=>'Manage TabTipoInforme', 'url'=>array('admin')),
);
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
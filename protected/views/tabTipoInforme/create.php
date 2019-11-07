<?php
/* @var $this TabTipoInformeController */
/* @var $model TabTipoInforme */

$this->breadcrumbs=array(
	'Tab Tipo Informes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TabTipoInforme', 'url'=>array('index')),
	array('label'=>'Manage TabTipoInforme', 'url'=>array('admin')),
);
?>

<h1>Create TabTipoInforme</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
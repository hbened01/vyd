<?php
/* @var $this TabTipoInformeController */
/* @var $model TabTipoInforme */

$this->breadcrumbs=array(
	'Tab Tipo Informes'=>array('index'),
	$model->id_tipo_informe,
);

$this->menu=array(
	array('label'=>'List TabTipoInforme', 'url'=>array('index')),
	array('label'=>'Create TabTipoInforme', 'url'=>array('create')),
	array('label'=>'Update TabTipoInforme', 'url'=>array('update', 'id'=>$model->id_tipo_informe)),
	array('label'=>'Delete TabTipoInforme', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo_informe),'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	array('label'=>'Manage TabTipoInforme', 'url'=>array('admin')),
);
?>

<br>
<h1>Vista de registro</h1>
<br>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo_informe',
		'descrip_informe',
	),
)); ?>

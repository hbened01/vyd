<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TabInformeDetalles'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List TabInformeDetalle', 'url'=>array('index')),
	array('label'=>'Create TabInformeDetalle', 'url'=>array('create')),
	array('label'=>'Update TabInformeDetalle', 'url'=>array('update', 'id_informe'=>$model->id_informe, 'id_detalle'=>$model->id_detalle)),
	array('label'=>'Delete TabInformeDetalle', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_informe'=>$model->id_informe, 'id_detalle'=>$model->id_detalle),
									'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	array('label'=>'Manage TabInformeDetalle', 'url'=>array('admin')),
);
?>

<br>
<h1>Vista de registro</h1>
<br>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_informe',
		'id_detalle',
		'fecha',
	),
)); ?>

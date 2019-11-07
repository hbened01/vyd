<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TabInformeStatuss'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List TabInformeStatus', 'url'=>array('index')),
	array('label'=>'Create TabInformeStatus', 'url'=>array('create')),
	array('label'=>'Update TabInformeStatus', 'url'=>array('update', 'id_informe'=>$model->id_informe, 'id_status'=>$model->id_status)),
	array('label'=>'Delete TabInformeStatus', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_informe'=>$model->id_informe, 'id_status'=>$model->id_status),
									'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	array('label'=>'Manage TabInformeStatus', 'url'=>array('admin')),
);
?>

<br>
<h1>Vista de registro</h1>
<br>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_informe',
		'id_status',
		'fecha',
	),
)); ?>

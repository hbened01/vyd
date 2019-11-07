<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TabTipoInformeSeccions'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List TabTipoInformeSeccion', 'url'=>array('index')),
	array('label'=>'Create TabTipoInformeSeccion', 'url'=>array('create')),
	array('label'=>'Update TabTipoInformeSeccion', 'url'=>array('update', 'id_tipo_informe'=>$model->id_tipo_informe, 'id_seccion'=>$model->id_seccion)),
	array('label'=>'Delete TabTipoInformeSeccion', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_tipo_informe'=>$model->id_tipo_informe, 'id_seccion'=>$model->id_seccion),
									'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	array('label'=>'Manage TabTipoInformeSeccion', 'url'=>array('admin')),
);
?>

<br>
<h1>Vista de registro</h1>
<br>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo_informe',
		'id_seccion',
		'fecha',
	),
)); ?>

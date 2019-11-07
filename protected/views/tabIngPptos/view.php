<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TabIngPptoss'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List TabIngPptos', 'url'=>array('index')),
	array('label'=>'Create TabIngPptos', 'url'=>array('create')),
	array('label'=>'Update TabIngPptos', 'url'=>array('update', 'anio'=>$model->anio, 'rubro'=>$model->rubro, 'entidad_legal'=>$model->entidad_legal, 'unidad_negocio'=>$model->unidad_negocio, 'segmento'=>$model->segmento)),
	array('label'=>'Delete TabIngPptos', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'anio'=>$model->anio, 'rubro'=>$model->rubro, 'entidad_legal'=>$model->entidad_legal, 'unidad_negocio'=>$model->unidad_negocio, 'segmento'=>$model->segmento),
									'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	array('label'=>'Manage TabIngPptos', 'url'=>array('admin')),
);
?>

<br>
<h1>Vista de registro</h1>
<br>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'anio',
		'rubro',
		'entidad_legal',
		'unidad_negocio',
		'segmento',
		'linea_rubro',
		'enero',
		'febrero',
		'marzo',
		'abril',
		'mayo',
		'junio',
		'julio',
		'agosto',
		'septiembre',
		'octubre',
		'noviembre',
		'diciembre',
		'total_ingresos',
	),
)); ?>

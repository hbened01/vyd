<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TabIngPptoss'=>array('index'),
	'ver'=>array('view', 'anio'=>$model->anio, 'rubro'=>$model->rubro, 'entidad_legal'=>$model->entidad_legal, 'unidad_negocio'=>$model->unidad_negocio, 'segmento'=>$model->segmento),
	'actualizar',
);

$this->menu=array(
	array('label'=>'List TabIngPptos', 'url'=>array('index')),
	array('label'=>'Create TabIngPptos', 'url'=>array('create')),
	array('label'=>'View TabIngPptos', 'url'=>array('view', 'anio'=>$model->anio, 'rubro'=>$model->rubro, 'entidad_legal'=>$model->entidad_legal, 'unidad_negocio'=>$model->unidad_negocio, 'segmento'=>$model->segmento)),
	array('label'=>'Manage TabIngPptos', 'url'=>array('admin')),
); 
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

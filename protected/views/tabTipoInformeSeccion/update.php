<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TabTipoInformeSeccions'=>array('index'),
	'View'=>array('view', 'id_tipo_informe'=>$model->id_tipo_informe, 'id_seccion'=>$model->id_seccion),
	'Update',
);

$this->menu=array(
	array('label'=>'List TabTipoInformeSeccion', 'url'=>array('index')),
	array('label'=>'Create TabTipoInformeSeccion', 'url'=>array('create')),
	array('label'=>'View TabTipoInformeSeccion', 'url'=>array('view', 'id_tipo_informe'=>$model->id_tipo_informe, 'id_seccion'=>$model->id_seccion)),
	array('label'=>'Manage TabTipoInformeSeccion', 'url'=>array('admin')),
); 
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

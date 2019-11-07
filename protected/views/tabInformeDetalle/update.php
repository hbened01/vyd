<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TabInformeDetalles'=>array('index'),
	'View'=>array('view', 'id_informe'=>$model->id_informe, 'id_detalle'=>$model->id_detalle),
	'Update',
);

$this->menu=array(
	array('label'=>'List TabInformeDetalle', 'url'=>array('index')),
	array('label'=>'Create TabInformeDetalle', 'url'=>array('create')),
	array('label'=>'View TabInformeDetalle', 'url'=>array('view', 'id_informe'=>$model->id_informe, 'id_detalle'=>$model->id_detalle)),
	array('label'=>'Manage TabInformeDetalle', 'url'=>array('admin')),
); 
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

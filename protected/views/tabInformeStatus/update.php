<br>
<h1>Actualizar registro</h1>
<br><!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TabInformeStatuss'=>array('index'),
	'View'=>array('view', 'id_informe'=>$model->id_informe, 'id_status'=>$model->id_status),
	'Update',
);

$this->menu=array(
	array('label'=>'List TabInformeStatus', 'url'=>array('index')),
	array('label'=>'Create TabInformeStatus', 'url'=>array('create')),
	array('label'=>'View TabInformeStatus', 'url'=>array('view', 'id_informe'=>$model->id_informe, 'id_status'=>$model->id_status)),
	array('label'=>'Manage TabInformeStatus', 'url'=>array('admin')),
); 
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TabInformeDetalles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TabInformeDetalles', 'url'=>array('index')),
    array('label'=>'Manage TabInformeDetalle', 'url'=>array('admin')),
);
?>

<h1>Create TabInformeDetalle</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

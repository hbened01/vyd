<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TabTipoInformeSeccions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TabTipoInformeSeccions', 'url'=>array('index')),
    array('label'=>'Manage TabTipoInformeSeccion', 'url'=>array('admin')),
);
?>

<h1>Create TabTipoInformeSeccion</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

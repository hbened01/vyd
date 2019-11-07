<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TabIngPptoss'=>array('index'),
	'crear',
);

$this->menu=array(
	array('label'=>'List TabIngPptoss', 'url'=>array('index')),
    array('label'=>'Manage TabIngPptos', 'url'=>array('admin')),
);
?>

<h1>Create TabIngPptos</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

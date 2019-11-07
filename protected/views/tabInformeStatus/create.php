<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TabInformeStatuss'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TabInformeStatuss', 'url'=>array('index')),
    array('label'=>'Manage TabInformeStatus', 'url'=>array('admin')),
);
?>

<h1>Create TabInformeStatus</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

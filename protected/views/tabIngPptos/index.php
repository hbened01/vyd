<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TabIngPptoss',
);

$this->menu=array(
	array('label'=>'Create TabIngPptos', 'url'=>array('create')),
	array('label'=>'Manage TabIngPptos', 'url'=>array('admin')),
);
?>
<br>
<h1>TabIngPptoss</h1>
<br>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

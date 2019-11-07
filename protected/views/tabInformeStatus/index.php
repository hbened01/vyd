<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TabInformeStatuss',
);

$this->menu=array(
	array('label'=>'Create TabInformeStatus', 'url'=>array('create')),
	array('label'=>'Manage TabInformeStatus', 'url'=>array('admin')),
);
?>
<br>
<h1>TabInformeStatuss</h1>
<br>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

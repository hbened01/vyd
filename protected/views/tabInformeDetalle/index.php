<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TabInformeDetalles',
);

$this->menu=array(
	array('label'=>'Create TabInformeDetalle', 'url'=>array('create')),
	array('label'=>'Manage TabInformeDetalle', 'url'=>array('admin')),
);
?>

<h1>TabInformeDetalles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

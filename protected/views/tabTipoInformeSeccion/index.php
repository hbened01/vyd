<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TabTipoInformeSeccions',
);

$this->menu=array(
	array('label'=>'Create TabTipoInformeSeccion', 'url'=>array('create')),
	array('label'=>'Manage TabTipoInformeSeccion', 'url'=>array('admin')),
);
?>

<h1>TabTipoInformeSeccions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

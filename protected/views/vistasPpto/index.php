<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
    'insumos presupuestados',
);

$this->menu=array(
    /*
	array('label'=>'Crear registros', 'url'=>array('create')),
    */
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>
<br>
<h1>Insumos presupuestados</h1>
<br>
<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
)); ?>

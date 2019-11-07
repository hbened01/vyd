<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
    'insumos presupuestados'=>array('index'),
    'crear',
);

$this->menu=array(
    /*
	array('label'=>'Listar registros', 'url'=>array('index')),
    */
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Crear registro</h1>
<br>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'vistas de ingresos pptos vs reales'=>array('index'),
	'ver'=>array('view', 'id_rubro'=>$model->id_rubro, 'id_unidad_funcional'=>$model->id_unidad_funcional, 'id_categoria'=>$model->id_categoria, 'registration_year'=>$model->registration_year, 'id_mes'=>$model->id_mes, 'id_tipo_ingreso'=>$model->id_tipo_ingreso, 'id_moneda'=>$model->id_moneda),
	'actualizar',
);

$this->menu=array(
    /*
    array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
    */
	array('label'=>'Ver registro', 'url'=>array('view', 'id_rubro'=>$model->id_rubro, 'id_unidad_funcional'=>$model->id_unidad_funcional, 'id_categoria'=>$model->id_categoria, 'registration_year'=>$model->registration_year, 'id_mes'=>$model->id_mes, 'id_tipo_ingreso'=>$model->id_tipo_ingreso, 'id_moneda'=>$model->id_moneda)),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
); 
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

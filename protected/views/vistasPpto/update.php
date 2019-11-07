<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
    'insumos presupuestados'=>array('index'),
    'ver'=>array('view', 'anio'=>$model->anio, 'rubro'=>$model->rubro, 'entidad_legal'=>$model->entidad_legal, 'segmento'=>$model->segmento, 'monto'=>$model->monto, 'id_mes'=>$model->id_mes),
    'actualizar',
);

$this->menu=array(
    /*
    array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
    */
	array('label'=>'Ver registro', 'url'=>array('view', 'anio'=>$model->anio, 'rubro'=>$model->rubro, 'entidad_legal'=>$model->entidad_legal, 'segmento'=>$model->segmento, 'monto'=>$model->monto, 'id_mes'=>$model->id_mes)),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
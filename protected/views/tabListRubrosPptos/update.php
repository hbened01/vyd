
<?php
$this->breadcrumbs=array(
	'listados de rubros presupuestados'=>array('index'),
	//$model->id_list_rubros_pptos=>array('view','id'=>$model->id_list_rubros_pptos),
    'actualizar',
);

$this->menu=array(
	array('label'=>'Listar registro', 'url'=>array('index')),
    /*
	array('label'=>'Crear registro', 'url'=>array('create')),
    */
    array('label'=>'Ver registro', 'url'=>array('view', 'id'=>$model->id_list_rubros_pptos)),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
); 
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

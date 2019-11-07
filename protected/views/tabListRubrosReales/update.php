<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'listados de rubros reales'=>array('index'),
	 //$model->id_list_rubros_reales=>array('view','id'=>$model->id_list_rubros_reales),
	'actualizar',
);

$this->menu=array(
	array('label'=>'Listar registro', 'url'=>array('index')),
    /*
	array('label'=>'Crear registro', 'url'=>array('create')),
    */
    array('label'=>'Ver registro', 'url'=>array('view', 'id'=>$model->id_list_rubros_reales)),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
); 
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

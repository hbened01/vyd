<?php
/* @var $this TabTotalCorporacionController */
/* @var $model TabTotalCorporacion */

$this->breadcrumbs=array(
	'total ingresos de la corporación'=>array('index'),
	//$model->id_tot_corp=>array('view','id'=>$model->id_tot_corp),
	'actualizar',
);

$this->menu=array(
	/*
    array('label'=>'Listar registros', 'url'=>array('index')),
    array('label'=>'Crear registro', 'url'=>array('create')),
    */
	array('label'=>'Ver registro', 'url'=>array('view', 'id'=>$model->id_tot_corp)),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this TabTotalUnidadesController */
/* @var $model TabTotalUnidades */

$this->breadcrumbs=array(
	'total ingresos por unidades'=>array('index'),
	//$model->id_tot_unid=>array('view','id'=>$model->id_tot_unid),
	'actualizar',
);

$this->menu=array(
    /*
    array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Ver registro', 'url'=>array('view', 'id'=>$model->id_tot_unid)),
    */
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
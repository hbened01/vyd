<?php
/* @var $this TabCertusEstadisticasController */
/* @var $model TabCertusEstadisticas */

$this->breadcrumbs=array(
	'insumos de estadísticas'=>array('index'),
	//$model->id_certus_estadisticas=>array('ver','id'=>$model->id_certus_estadisticas),
	'actualizar',
);

$this->menu=array(
    /*
    array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
    */
	array('label'=>'Ver registro', 'url'=>array('view', 'id'=>$model->id_certus_estadisticas)),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Actualizar registro</h1>
<br>
<!--
<h1>Update TabCertusEstadisticas <?php echo $model->id_certus_estadisticas; ?></h1>
-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
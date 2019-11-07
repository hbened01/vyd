<?php
/* @var $this TabCertusEstadoResultadosController */
/* @var $model TabCertusEstadoResultados */

$this->breadcrumbs=array(
	'insumos de estados resultados'=>array('index'),
	//$model->id_certus_estado_resultados=>array('ver','id'=>$model->id_certus_estado_resultados),
	'actualizar',
);

$this->menu=array(
	/*
    array('label'=>'Listar registros', 'url'=>array('index')),
    array('label'=>'Crear registro', 'url'=>array('create')),
    */
	array('label'=>'Ver registro', 'url'=>array('view', 'id'=>$model->id_certus_estado_resultados)),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Actualizar registro</h1>
<br>
<!--
<h1>Update TabCertusEstadoResultados <?php echo $model->id_certus_estado_resultados; ?></h1>
-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
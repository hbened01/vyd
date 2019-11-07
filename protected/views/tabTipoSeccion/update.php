<?php
/* @var $this TabTipoSeccionController */
/* @var $model TabTipoSeccion */

$this->breadcrumbs=array(
	'tipos de sección'=>array('index'),
	//$model->id_seccion=>array('view','id'=>$model->id_seccion),
	'actualizar',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Ver registro', 'url'=>array('view', 'id'=>$model->id_seccion)),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Actualizar registro</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
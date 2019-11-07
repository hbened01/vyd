<?php
/* @var $this TabTotalCorporacionController */
/* @var $model TabTotalCorporacion */

$this->breadcrumbs=array(
	'total ingresos de la corporación'=>array('index'),
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
<h1>Çrear registro</h1>
<br>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
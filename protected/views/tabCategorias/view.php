<?php
/* @var $this TabCategoriasController */
/* @var $model TabCategorias */

$this->breadcrumbs=array(
	'tipos de categorias'=>array('index'),
	//$model->id_categoria,
);

$this->menu=array(
	array('label'=>'Listar registro', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Actualizar registro', 'url'=>array('update', 'id'=>$model->id_categoria)),
	array('label'=>'Eliminar registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_categoria),'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>
<br>
<h1>Vista de registro</h1>
<br>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_categoria',
		'descrip_categoria',
		'idPadreCat.descrip_categoria:text:Cat. Padre',
		'usr_crea',
		//'fe_crea',
		array('name'=>'fe_crea','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_crea)),
		'usr_modf',
		//'fe_modf',
		array('name'=>'fe_modf','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_modf)),
		//'in_stat',
	),
)); ?>

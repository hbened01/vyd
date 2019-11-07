<?php
/* @var $this TabRubrosController */
/* @var $model TabRubros */

$this->breadcrumbs=array(
	'listados de rubros'=>array('index'),
	//$model->id_rubro,
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Actualizar registro', 'url'=>array('update', 'id'=>$model->id_rubro)),
	array('label'=>'Eliminar registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_rubro),'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>
<br>
<h1>Vista de registro</h1>
<br>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_rubro',
		'descrip_rubro',
		//'id_categoria',
		'idCategoria.descrip_categoria',
		'usr_crea',
		//'fe_crea',
		array('name'=>'fe_crea','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_crea)),
		'usr_modf',
		//'fe_modf',
		array('name'=>'fe_modf','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_modf)),
		//'in_stat',
	),
)); ?>

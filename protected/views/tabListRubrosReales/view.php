<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'listados de rubros reales'=>array('index'),
	'ver',
);

$this->menu=array(
	array('label'=>'Listar registro', 'url'=>array('index')),
	/*
	array('label'=>'Crear registro', 'url'=>array('create')),
	*/
	array('label'=>'Actualizar registro', 'url'=>array('update', 'id'=>$model->id_list_rubros_reales)),
	/*
	array('label'=>'Eliminar registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_list_rubros_reales),'confirm'=>'¿Está seguro que desea eliminar este registro?')),
									*/
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
		'idRubro.descrip_rubro',
		//'id_categoria',
		'idCategoria.descrip_categoria',
		//'id_unidad_funcional',
		'idUnidadFuncional.descrip_unidad_funcional',
		//'id_entidad_legal',
		'idEntidadLegal.descrip_entidad_legal',
		'nb_rubro',
		'nb_unidad_funcional',
		'estado',
		'signo',
		'usr_crea',
		//'fe_crea',
		array('name'=>'fe_crea','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_crea)),
		'usr_modf',
		//'fe_modf',
		array('name'=>'fe_modf','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_modf)),
		//'in_stat',
	),
)); ?>

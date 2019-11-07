<?php
/* @var $this TabTotalCorporacionController */
/* @var $model TabTotalCorporacion */

$this->breadcrumbs=array(
	'total ingresos de la corporación'=>array('index'),
	//$model->id_tot_corp,
);

$this->menu=array(
	/*
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Actualizar registro', 'url'=>array('update', 'id'=>$model->id_tot_corp)),
    array('label'=>'Eliminar registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tot_corp),'confirm'=>'¿Está seguro que desea eliminar este registro?')), 
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
		//'id_tot_corp',
		//'id_mes',
		'idMes.descrip_mes',
		'anio',
		//'id_total',
		'idTotal.descrip_total',
		//'id_categoria',
		'idCategoria.descrip_categoria',
		//'id_tipo_ingreso',
		'idTipoIngreso.descripcion_ingreso',
		'total',
		'usr_crea',
		//'fe_crea',
		array('name'=>'fe_crea','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_crea)),
		'usr_modf',
		//'fe_modf',
		array('name'=>'fe_modf','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_modf)),
		/*'in_stat',
		'usr_crea',
		//'fe_crea',
		array('name'=>'fe_crea','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_crea)),
		'usr_modf',
		//'fe_modf',
		array('name'=>'fe_modf','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_modf)),
		*/
	),
)); ?>

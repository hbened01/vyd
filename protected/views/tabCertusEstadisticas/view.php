<?php
/* @var $this TabCertusEstadisticasController */
/* @var $model TabCertusEstadisticas */

$this->breadcrumbs=array(
	'insumos de estadísticas'=>array('index'),
	//$model->id_certus_estadisticas,
);

$this->menu=array(
	/*
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Actualizar registro', 'url'=>array('update', 'id'=>$model->id_certus_estadisticas)),
	array('label'=>'Eliminar registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_certus_estadisticas),'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	*/
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<!-- 
<h1>View TabCertusEstadisticas #<?php echo $model->id_certus_estadisticas; ?></h1>
-->

<br>
<h1>Insumos de estadísticas</h1>
<br>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fecha',
		'producto',
		'servicio',
		'escenario',
		'entidad_legal',
		'unidad_negocio',
		'segmento',
		'monto',
		'usr_crea',
		//'fe_crea',
		array('name'=>'fe_crea','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_crea)),
		'usr_modf',
		//'fe_modf',
		array('name'=>'fe_modf','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_modf)),
		/*
		'id_certus_estadisticas',
		'indicador',
		'fecha',
		'formato',
		'tipo_saldo',
		'producto',
		'codigo_producto',
		'codigo_indicador',
		'indicador',
		'codigo_tipo_acceso',
		'tipo_acceso',
		'codigo_servicio',
		'servicio',
		'modalidad_pago',
		'codigo_modalidad_pago',
		'moneda',
		'escenario',
		'entidad_legal',
		'unidad_negocio',
		'segmento',
		'monto',
		'acumulado',
		'in_stat',
		'usr_crea',
		//'fe_crea',
		array('name'=>'fe_crea','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_crea)),
		'usr_modf',
		//'fe_modf',
		array('name'=>'fe_modf','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_modf)),
		*/
	),
)); ?>

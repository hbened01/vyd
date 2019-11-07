<?php
/* @var $this TabCertusEstadoResultadosController */
/* @var $model TabCertusEstadoResultados */

$this->breadcrumbs=array(
	'insumos de estado resultados'=>array('index'),
	//$model->id_certus_estado_resultados,
);

$this->menu=array(
	/*
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Actualizar registro', 'url'=>array('update', 'id'=>$model->id_certus_estado_resultados)),
	array('label'=>'Eliminar registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_certus_estado_resultados),'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	*/
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<br>
<h1>Insumos de estado resultados</h1>
<br>

<!-- <h1>View TabCertusEstadoResultados #<?php echo $model->id_certus_estado_resultados; ?></h1> -->

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fecha',
		'anio',
		'mes',
		'rubro',
		'entidad_legal',
		'unidad_negocio',
		'escenario',
		'metodo',
		'segmento',
		'monto',
		'usr_crea',
		//'fe_crea',
		array('name'=>'fe_crea','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_crea)),
		'usr_modf',
		//'fe_modf',
		array('name'=>'fe_modf','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_modf)),
		/*
		'id_certus_estado_resultados',
		'id_mes',
		'moneda',
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

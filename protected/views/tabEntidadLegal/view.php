<?php
/* @var $this TabEntidadLegalController */
/* @var $model TabEntidadLegal */

$this->breadcrumbs=array(
	'Tab Entidad Legals'=>array('index'),
	$model->id_entidad_legal,
);

$this->menu=array(
	array('label'=>'List TabEntidadLegal', 'url'=>array('index')),
	array('label'=>'Create TabEntidadLegal', 'url'=>array('create')),
	array('label'=>'Update TabEntidadLegal', 'url'=>array('update', 'id'=>$model->id_entidad_legal)),
	array('label'=>'Delete TabEntidadLegal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_entidad_legal),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TabEntidadLegal', 'url'=>array('admin')),
);
?>

<h1>View TabEntidadLegal #<?php echo $model->id_entidad_legal; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_entidad_legal',
		'descrip_entidad_legal',
		'in_stat',
		'usr_crea',
		//'fe_crea',
		array('name'=>'fe_crea','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_crea)),
		'usr_modf',
		//'fe_modf',
		array('name'=>'fe_modf','value'=>Yii::app()->dateFormatter->format('dd/MM/yyyy HH:mm:ss',$model->fe_modf)),
	),
)); ?>

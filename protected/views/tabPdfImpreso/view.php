<?php
/* @var $this TabPdfImpresoController */
/* @var $model TabPdfImpreso */

$this->breadcrumbs=array(
	'Tab Pdf Impresos'=>array('index'),
	$model->id_informe,
);

$this->menu=array(
	array('label'=>'List TabPdfImpreso', 'url'=>array('index')),
	array('label'=>'Create TabPdfImpreso', 'url'=>array('create')),
	array('label'=>'Update TabPdfImpreso', 'url'=>array('update', 'id'=>$model->id_informe)),
	array('label'=>'Delete TabPdfImpreso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_informe),'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	array('label'=>'Manage TabPdfImpreso', 'url'=>array('admin')),
);
?>

<h1>View TabPdfImpreso #<?php echo $model->id_informe; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_informe',
		'descrip_pdf',
		'byte',
		'ext',
	),
)); ?>

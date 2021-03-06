<?php
/* @var $this TabPdfImpresoController */
/* @var $model TabPdfImpreso */

$this->breadcrumbs=array(
	'Tab Pdf Impresos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TabPdfImpreso', 'url'=>array('index')),
	array('label'=>'Create TabPdfImpreso', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tab-pdf-impreso-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tab Pdf Impresos</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tab-pdf-impreso-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_informe',
		'descrip_pdf',
		'byte',
		'ext',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

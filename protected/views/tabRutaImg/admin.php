<?php
/* @var $this TabRutaImgController */
/* @var $model TabRutaImg */

$this->breadcrumbs=array(
	'Tab Ruta Imgs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TabRutaImg', 'url'=>array('index')),
	array('label'=>'Create TabRutaImg', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tab-ruta-img-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tab Ruta Imgs</h1>

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
	'id'=>'tab-ruta-img-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_ruta',
		'id_seccion',
		'ruta_img',
		'descrip_img',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

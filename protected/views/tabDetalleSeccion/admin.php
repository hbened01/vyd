<?php
/* @var $this TabDetalleSeccionController */
/* @var $model TabDetalleSeccion */

$this->breadcrumbs=array(
	'Tab Detalle Seccions'=>array('index'),
	'vistas resumen',
);

$this->menu=array(
	array('label'=>'List TabDetalleSeccion', 'url'=>array('index')),
	array('label'=>'Create TabDetalleSeccion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tab-detalle-seccion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>vistas resumen Tab Detalle Seccions</h1>

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
	'id'=>'tab-detalle-seccion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_detalle',
		'id_seccion',
		'observacion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

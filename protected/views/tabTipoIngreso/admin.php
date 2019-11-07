<?php
/* @var $this TabTipoIngresoController */
/* @var $model TabTipoIngreso */

$this->breadcrumbs=array(
	'Tab Tipo Ingresos'=>array('index'),
	'vistas resumen',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tab-tipo-ingreso-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>vistas resumen Tab Tipo Ingresos</h1>

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
	'id'=>'tab-tipo-ingreso-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'htmlOptions'=>array('style' => 'font-style:italic;font-size:12px;'),
	'columns'=>array(
		'id_tipo_ingreso',
		'descripcion_ingreso',
		array(
			'class'=>'CButtonColumn',
			'header'=>'Accesos',
		),
	),
)); ?>

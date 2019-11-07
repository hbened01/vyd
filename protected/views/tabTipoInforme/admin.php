<?php
/* @var $this TabTipoInformeController */
/* @var $model TabTipoInforme */

$this->breadcrumbs=array(
	'Tab Tipo Informes'=>array('index'),
	'vistas resumen',
);

$this->menu=array(
	array('label'=>'List TabTipoInforme', 'url'=>array('index')),
	array('label'=>'Create TabTipoInforme', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tab-tipo-informe-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>vistas resumen Tab Tipo Informes</h1>

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
	'id'=>'tab-tipo-informe-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tipo_informe',
		'descrip_informe',
		array(
			'class'=>'CButtonColumn',
			'header'=>'Accesos',
		),
	),
)); ?>

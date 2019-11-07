<?php
/* @var $this TabCapRedController */
/* @var $model TabCapRed */

$this->breadcrumbs=array(
	'capacidad de la red'=>array('index'),
	'vistas resumen',
);

$this->menu=array(
	array('label'=>'Listar registro', 'url'=>array('index')),
	/*
	array('label'=>'Crear registro', 'url'=>array('create')),
	*/
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tab-cap-red-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<br>
<h1>Capacidad de la red</h1>
<br>
<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tab-cap-red-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'htmlOptions'=>array('style' => 'font-style:italic;font-size:12px;'),
	'columns'=>array(
		array(
        'header'=>'No.',
        'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
         ),
		//'id_cap_red',
		'distrito',
		'central',
		'nombre_central',
		'serial',
		'categoria',
		/*
		'total_numeros_con_normativa',
		'total_numeros_libres_con_normativa',
		'total_numeros_trabajados_asignados',
		'total_numeros_con_normativa',
		'total_numeros_libres_con_normativa',
		'total_numeros_trabajados_asignados',
		'numeros_en_investigacion',
		'no_asociado_a_pares',
		'pendiente_por_instalacion',
		'pendiente_por_retirar',
		'pendiente_por_transferencia',
		'ocupados',
		'pendiente_por_liberar',
		'número_ocupado_abonado_inactivo',
		'no_asociado_a_central',
		'no_asociado_a_red_local',
		'pendiente_por_mudanza',
		'modernizado',
		'desincorporado',
		'pendiente_por_ubicacion',
		'reubicado',
		'restriccion_tecnica',
		'capacidad_de_la_central',
		'fecha_procedimiento',
		*/
		array(
			'class'=>'CButtonColumn',
			'header'=>'Acceso',
			'template'=>'{view}',
		),
	),
)); ?>

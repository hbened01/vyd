<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TabIngPptoss'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TabIngPptoss', 'url'=>array('index')),
	array('label'=>'Create TabIngPptos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tabIngPptosgrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage TabIngPptoss</h1>

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

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'tabIngPptosgrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'htmlOptions'=>array('style' => 'font-style:italic;font-size:12px;'),
    'columns'=>array(
        'anio',
        'rubro',
        'entidad_legal',
        'unidad_negocio',
        'segmento',
        'linea_rubro',
        'enero',
        'febrero',
        'marzo',
        'abril',
        'mayo',
        'junio',
        'julio',
        'agosto',
        'septiembre',
        'octubre',
        'noviembre',
        'diciembre',
        'total_ingresos',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("tabIngPptos/view/", 
                                            array("anio"=>$data->anio, "rubro"=>$data->rubro, "entidad_legal"=>$data->entidad_legal, "unidad_negocio"=>$data->unidad_negocio, "segmento"=>$data->segmento
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("tabIngPptos/update/", 
                                            array("anio"=>$data->anio, "rubro"=>$data->rubro, "entidad_legal"=>$data->entidad_legal, "unidad_negocio"=>$data->unidad_negocio, "segmento"=>$data->segmento
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("tabIngPptos/delete/", 
                                            array("anio"=>$data->anio, "rubro"=>$data->rubro, "entidad_legal"=>$data->entidad_legal, "unidad_negocio"=>$data->unidad_negocio, "segmento"=>$data->segmento
											))',
                ),
            ),
        ),
    ),
)); ?>

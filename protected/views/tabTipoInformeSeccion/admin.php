<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TabTipoInformeSeccions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TabTipoInformeSeccions', 'url'=>array('index')),
	array('label'=>'Create TabTipoInformeSeccion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tabTipoInformeSecciongrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage TabTipoInformeSeccions</h1>

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
    'id'=>'tabTipoInformeSecciongrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id_tipo_informe',
        'id_seccion',
        'fecha',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("tabTipoInformeSeccion/view/", 
                                            array("id_tipo_informe"=>$data->id_tipo_informe, "id_seccion"=>$data->id_seccion
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("tabTipoInformeSeccion/update/", 
                                            array("id_tipo_informe"=>$data->id_tipo_informe, "id_seccion"=>$data->id_seccion
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("tabTipoInformeSeccion/delete/", 
                                            array("id_tipo_informe"=>$data->id_tipo_informe, "id_seccion"=>$data->id_seccion
											))',
                ),
            ),
        ),
    ),
)); ?>

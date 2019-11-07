<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TabInformeStatuss'=>array('index'),
	'Vistas resumen',
);

$this->menu=array(
	array('label'=>'List TabInformeStatuss', 'url'=>array('index')),
	array('label'=>'Create TabInformeStatus', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tabInformeStatusgrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Vistas resumen TabInformeStatuss</h1>

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
    'id'=>'tabInformeStatusgrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id_informe',
        'id_status',
        'fecha',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("tabInformeStatus/view/", 
                                            array("id_informe"=>$data->id_informe, "id_status"=>$data->id_status
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("tabInformeStatus/update/", 
                                            array("id_informe"=>$data->id_informe, "id_status"=>$data->id_status
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("tabInformeStatus/delete/", 
                                            array("id_informe"=>$data->id_informe, "id_status"=>$data->id_status
											))',
                ),
            ),
        ),
    ),
)); ?>

<?php $this->setPageTitle('listado de totales'); ?>
<?php
/* @var $this TabTipoTotalController */
/* @var $model TabTipoTotal */

$this->breadcrumbs=array(
	'tipos de totales'=>array('index'),
	'vistas resumen',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Crear registro', 'url'=>array('create')),
    array('label'=>'Generar excel', 'url'=>array('exportToExcel')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tab-tipo-total-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<br>
<h1>Listados de totales</h1>
<br>
<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<!--<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>-->
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div align="left" class="row">
<?php
    $this->widget('ext.PageSize.EPageSize', array(
    'gridViewId' => 'tab-tipo-total-grid',
    'beforeLabel' => 'Registros por pantalla: ',
    'pageSize' => Yii::app()->request->getParam('pageSize',null),
    'defaultPageSize' => 10 ,   // may use this :  Yii::app()->params['defaultPageSize'],
    'pageSizeOptions'=> array(5=>5, 10=>10, 15=>15, 25=>25, 50=>50, 75=>75, 100=>100), // you can config it in main.php under the config dir . Yii::app()->params['pageSizeOptions'],// Optional, you can use with the widget default
    ));
    ?>
<?php
$dataProvider = $model->search();
$pageSize = Yii::app()->user->getState('pageSize',10/*Yii::app()->params['defaultPageSize']*/);
$dataProvider->getPagination()->setPageSize($pageSize);
 ?>
 </div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tab-tipo-total-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
    'htmlOptions'=>array('style' => 'font-style:italic;font-size:12px;'),
	'columns'=>array(
		//'id_total',
		'descrip_total',
		//'in_stat',
		//'usr_crea',
		//'fe_crea',
		//'usr_modf',
		/*
		'fe_modf',
		*/
		array(
			'class'=>'CButtonColumn',
			'header'=>'Accesos',
		),
	),
)); ?>

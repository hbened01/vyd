<?php $this->setPageTitle('total ing. corporación'); ?>
<?php
/* @var $this TabTotalCorporacionController */
/* @var $model TabTotalCorporacion */

$this->breadcrumbs=array(
	'total ingresos de la corporación'=>array('index'),
	'vistas resumen',
);

$this->menu=array(
	/*
    array('label'=>'Listar registros', 'url'=>array('index')),
    */
    array('label'=>'Generar excel filtrado', 'url'=>array('excel')),
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
	$('#tab-total-corporacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<br>
<h1>Ingresos totales de la corporación</h1>
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

<div align="left" class="row">
<?php
    $this->widget('ext.PageSize.EPageSize', array(
    'gridViewId' => 'tab-total-corporacion-grid',
    'beforeLabel' => 'Registros por pantalla: ',
    'pageSize' => Yii::app()->request->getParam('pageSize',null),
    'defaultPageSize' => 10 ,   // may use this :  Yii::app()->params['defaultPageSize'],
    'pageSizeOptions'=> array(5=>5, 10=>10, 15=>15, 25=>25, 50=>50, 75=>75, 100=>100, 200=>200, 300=>300), // you can config it in main.php under the config dir . Yii::app()->params['pageSizeOptions'],// Optional, you can use with the widget default
    ));
    ?>
<?php
$dataProvider = $model->search();
$pageSize = Yii::app()->user->getState('pageSize',10/*Yii::app()->params['defaultPageSize']*/);
$dataProvider->getPagination()->setPageSize($pageSize);
 ?>
 </div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tab-total-corporacion-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
    'htmlOptions'=>array('style' => 'font-style:italic;font-size:12px;'),
	'columns'=>array(
		array(
        'header'=>'No.',
        'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
         ),
		//'id_tot_corp',
		//'anio',
        array(
        'header'=>'Año',
        'name'=>'anio',
        'value' => '$data->anio',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabTotalCorporacion::model()->findAll(array("select"=>"anio", "distinct"=>"true", "order"=>"anio")), 'anio','anio') 
                ),
		//'id_mes',
		array(
        'header'=>'Mes',
        'name'=>'id_mes',
        'value' => '$data->idMes->descrip_mes',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabMeses::model()->findAll(array("order"=>"id_mes")), 'id_mes','descrip_mes') 
                ),
		//'id_total',
        array(
        'header'=>'Total',
        'name'=>'id_total',
        'value' => '$data->idTotal->descrip_total',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabTipoTotal::model()->findAll(array("order"=>"descrip_total")), 'id_total','descrip_total')
                ),
		//'id_categoria',
        array(
        'header'=>'Categoria',
        'name'=>'id_categoria',
        'value' => '$data->idCategoria->descrip_categoria',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabCategorias::model()->findAll(array("order"=>"descrip_categoria")), 'id_categoria','descrip_categoria')
                ),
		//'id_tipo_ingreso',
		array(
        'header'=>'Tipo ingreso',
        'name'=>'id_tipo_ingreso',
        'value' => '$data->idTipoIngreso->descripcion_ingreso',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabTipoIngreso::model()->findAll(array("order"=>"descripcion_ingreso")), 'id_tipo_ingreso','descripcion_ingreso') 
               ),
        'total',
		/*
		'in_stat',
		'usr_crea',
		'fe_crea',
		'usr_modf',
		'fe_modf',
		*/
		array(
			'class'=>'CButtonColumn',
            'header'=>'Acceso',
            'template'=>'{view}',
		),
	),
)); ?>

<!--
<br>
<div class="column">

    <?php echo CHtml::submitButton('Generar excel filtrado', array('submit'=>array('TabTotalCorporacion/rubroExportToExcel_1'),)); ?>

</div>

<div class="column">
    
    <?php echo CHtml::submitButton('Generar excel completo', array('submit'=>array('TabTotalCorporacion/rubroExportToExcel_2'),)); ?>

</div>
<br>

<div class="column">

<?php $this->widget('zii.widgets.jui.CJuiButton', array(
                                    'buttonType'=>'link',
                                    'name'=>'btnClick',
                                    'caption'=>'Volver al menú de selección',
                                    'url'=>array('/site/index'),
)); ?>

</div>
-->


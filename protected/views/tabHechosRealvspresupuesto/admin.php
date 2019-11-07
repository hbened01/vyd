<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php $this->setPageTitle('total ing. individuales'); ?>
<?php
$this->breadcrumbs=array(
	'vistas de ingresos pptos vs reales'=>array('index'),
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
	$.fn.yiiGridView.update('tabHechosRealvspresupuestogrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<br>
<h1>Vistas de insumos depurados para ingresos Reales vs Presupuestados</h1>
<br>
<!--"COMENTADO"
<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p> 
-->

<p>
    Seleccionar los combos para realizar sus búsquedas de acuerdo al criterio de negocio.
</p>  

<?php //*echo CHtml::link('Advanced Search','#',array('class'=>'search-button'));*// //"COMENTADO"?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>

</div> <!-- search-form -->

<div align="left" class="row">
<?php
    $this->widget('ext.PageSize.EPageSize', array(
    'gridViewId' => 'tabHechosRealvspresupuestogrid',
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

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'tabHechosRealvspresupuestogrid',
    'dataProvider'=>$dataProvider,
    'filter'=>$model,
    'htmlOptions'=>array('style' => 'font-style:italic;font-size:12px;'),
    'columns'=>array(
        array(
        'header'=>'No.',
        'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
         ),
        //'id_rubro',
        //array('name'=>'id_rubro','header'=>'id_rubro','sortable'=>false,'value'=>'$data->idRubro->descrip_rubro'),
        array(
        'header'=>'Rubro',
        'name'=>'id_rubro',
        'value' => '$data->idRubro->descrip_rubro',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TablaIngresosIndividuales::model()->findAll(array("select"=>"id_rubro, descrip_rubro", "distinct"=>"true", "order"=>"descrip_rubro")), 'id_rubro','descrip_rubro')
                ),
        //'id_unidad_funcional',
        //array('name'=>'id_unidad_funcional','value'=>'$data->idUnidadFuncional->descrip_unidad_funcional'),
        array(
        'header'=>'Unidad Funcional',
        'name'=>'id_unidad_funcional',
        'value' => '$data->idUnidadFuncional->descrip_unidad_funcional',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TablaIngresosIndividuales::model()->findAll(array("select"=>"id_unidad_funcional, descrip_unidad_funcional", "distinct"=>"true", "order"=>"descrip_unidad_funcional")), 'id_unidad_funcional','descrip_unidad_funcional')
                ),
        //'id_categoria',
        //array('name'=>'id_categoria','value'=>'$data->idCategoria->descrip_categoria'),
        array(
        'header'=>'Categoria',
        'name'=>'id_categoria',
        'value' => '$data->idCategoria->descrip_categoria',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TablaIngresosIndividuales::model()->findAll(array("select"=>"id_categoria, descrip_categoria", "distinct"=>"true", "order"=>"descrip_categoria")), 'id_categoria','descrip_categoria')
                ),
        //'registration_year',
        //array('header'=>'Año','name'=>'registration_year','value'=>'$data->registration_year'),
        array(
        'header'=>'Año',
        'name'=>'registration_year',
        'value' => '$data->registration_year',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabHechosRealvspresupuesto::model()->findAll(array("select"=>"registration_year", "distinct"=>"true", "order"=>"registration_year")), 'registration_year','registration_year') 
                ),
        //'id_mes',
        //array('name'=>'id_mes','value'=>'$data->idMes->descrip_mes'),
        array(
        'header'=>'Mes',
        'name'=>'id_mes',
        'value' => '$data->idMes->descrip_mes',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TablaIngresosIndividuales::model()->findAll(array("select"=>"id_mes, descrip_mes", "distinct"=>"true", "order"=>"id_mes")), 'id_mes','descrip_mes') 
                ),
        //'valor',
        array('header'=>'Valor','name'=>'valor','value'=>'$data->valor'),
        //'id_tipo_ingreso',
        //array('name'=>'id_tipo_ingreso','value'=>'$data->idTipoIngreso->descripcion_ingreso'),
        array(
        'header'=>'Tipo ingreso',
        'name'=>'id_tipo_ingreso',
        'value' => '$data->idTipoIngreso->descripcion_ingreso',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabTipoIngreso::model()->findAll(array("order"=>"descripcion_ingreso")), 'id_tipo_ingreso','descripcion_ingreso') 
                ),
        //'id_moneda',
        //array('name'=>'id_moneda','value'=>'$data->idMoneda->descripcion_moneda'),
        array(
        'header'=>'Tipo moneda',
        'name'=>'id_moneda',
        'value' => '$data->idMoneda->descripcion_moneda',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabMoneda::model()->findAll(array("order"=>"descripcion_moneda")), 'id_moneda','descripcion_moneda') 
                ),
        array(
            'class'=>'CButtonColumn',
            'header'=>'Accesos',
            'template'=>'{view}{update}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("tabHechosRealvspresupuesto/view/", 
                                            array("id_rubro"=>$data->id_rubro, "id_unidad_funcional"=>$data->id_unidad_funcional, "id_categoria"=>$data->id_categoria, "registration_year"=>$data->registration_year, "id_mes"=>$data->id_mes, "id_tipo_ingreso"=>$data->id_tipo_ingreso, "id_moneda"=>$data->id_moneda
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("tabHechosRealvspresupuesto/update/", 
                                            array("id_rubro"=>$data->id_rubro, "id_unidad_funcional"=>$data->id_unidad_funcional, "id_categoria"=>$data->id_categoria, "registration_year"=>$data->registration_year, "id_mes"=>$data->id_mes, "id_tipo_ingreso"=>$data->id_tipo_ingreso, "id_moneda"=>$data->id_moneda
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("tabHechosRealvspresupuesto/delete/", 
                                            array("id_rubro"=>$data->id_rubro, "id_unidad_funcional"=>$data->id_unidad_funcional, "id_categoria"=>$data->id_categoria, "registration_year"=>$data->registration_year, "id_mes"=>$data->id_mes, "id_tipo_ingreso"=>$data->id_tipo_ingreso, "id_moneda"=>$data->id_moneda
											))',
                ),
            ),
        ),
    ),
)); ?>

<!--
<br>
<div class="column">

    <?php echo CHtml::submitButton('Generar excel filtrado', array('submit'=>array('TabHechosRealvspresupuesto/rubroExportToExcel_1'),)); ?>

</div>

<div class="column">
    
    <?php echo CHtml::submitButton('Generar excel completo', array('submit'=>array('TabHechosRealvspresupuesto/rubroExportToExcel_2'),)); ?>

</div>

<div class="column">

<?php $this->widget('zii.widgets.jui.CJuiButton', array(
                                    'buttonType'=>'link',
                                    'name'=>'btnClick',
                                    'caption'=>'Volver al menú de selección',
                                    'url'=>array('/site/index'),
)); ?>

</div>
<br>
-->
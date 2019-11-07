<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php $this->setPageTitle('insumos certus ing. pptos'); ?>
<?php
$this->breadcrumbs=array(
    'insumos presupuestados'=>array('index'),
    'vistas resumen',
);

$this->menu=array(
	/*
    array('label'=>'Listar registros', 'url'=>array('index')),
    */
    array('label'=>'Generar excel filtrado', 'url'=>array('excel')),
    /*
	array('label'=>'Crear registros', 'url'=>array('create')),
    */
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('vistasPptogrid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>
<br>
<h1>Vistas de insumos presupuestados</h1>
<br>
<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<!-- "COMENTADO"
<p>
    Utilizar operadores lògicos para realizar sus busquedas por años ó montos.
</p>  
-->

<?php //* echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button'));*// //"COMENTADO" ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
    'model'=>$model,
)); ?>
</div><!-- search-form -->

<div align="left" class="row">
<?php
    $this->widget('ext.PageSize.EPageSize', array(
    'gridViewId' => 'vistasPptogrid',
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
    'id'=>'vistasPptogrid',
    'dataProvider'=>$dataProvider,
    'filter'=>$model,
    'htmlOptions'=>array('style' => 'font-style:italic;font-size:12px;'),
    'columns'=>array(
        array(
        'header'=>'No.',
        'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
         ),
        //'rubro',
        array(
        'header'=>'Rubro',
        'name'=>'rubro',
        'value' => '$data->rubro',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(VistasPpto::model()->findAll(array("select"=>"rubro", "distinct"=>"true", "order"=>"rubro")), 'rubro','rubro') 
                ),
        //'unidad_negocio',
        array(
        'header'=>'Unidad funcional',
        'name'=>'unidad_negocio',
        'value' => '$data->unidad_negocio',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(VistasPpto::model()->findAll(array("select"=>"unidad_negocio", "distinct"=>"true", "order"=>"unidad_negocio")), 'unidad_negocio','unidad_negocio') 
                ),
        //'entidad_legal',
        array(
        'header'=>'Entidad legal',
        'name'=>'entidad_legal',
        'value' => '$data->entidad_legal',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(VistasPpto::model()->findAll(array("select"=>"entidad_legal", "distinct"=>"true", "order"=>"entidad_legal")), 'entidad_legal','entidad_legal') 
                ),
        //'anio',
        array(
        'header'=>'Año',
        'name'=>'anio',
        'value' => '$data->anio',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(VistasPpto::model()->findAll(array("select"=>"anio", "distinct"=>"true", "order"=>"anio")), 'anio','anio') 
                ),
        //'id_mes',
        array(
        'header'=>'Mes',
        'name'=>'id_mes',
        'value' => '$data->idMes->descrip_mes',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabMeses::model()->findAll(array("order"=>"id_mes")), 'id_mes','descrip_mes') 
                ),
        'monto',
        //'id_tipo_ingreso',
        array('name'=>'id_tipo_ingreso','value'=>'$data->idTipoIngreso->descripcion_ingreso'),
        //'id_moneda',
        array('name'=>'id_moneda','value'=>'$data->idMoneda->descripcion_moneda'),
        //'fecha',
        //'anio',
        //'rubro',
        //'entidad_legal',
        //'unidad_negocio',
        //'segmento',
        //'monto',
        //'id_mes',
        //'id_moneda',
        //'id_tipo_ingreso',
        //'id_rubro',
        //'id_categoria',
        //'id_unidad_funcional',
        //'id_voz_datos_ppto',
        //'signo',
        //'in_stat',
        //'usr_crea',
        //'fe_crea',
        //'usr_modf',
        //'fe_modf',
        array(
            'class'=>'CButtonColumn',
            //'template'=>'{view}{update}{delete}',
            'header'=>'Acceso',
            'template'=>'{view}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("vistasPpto/view/", 
                                            array("anio"=>$data->anio, "rubro"=>$data->rubro, "entidad_legal"=>$data->entidad_legal, "segmento"=>$data->segmento, "monto"=>$data->monto, "id_mes"=>$data->id_mes
                                            ))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("vistasPpto/update/", 
                                            array("anio"=>$data->anio, "rubro"=>$data->rubro, "entidad_legal"=>$data->entidad_legal, "segmento"=>$data->segmento, "monto"=>$data->monto, "id_mes"=>$data->id_mes
                                            ))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("vistasPpto/delete/", 
                                            array("anio"=>$data->anio, "rubro"=>$data->rubro, "entidad_legal"=>$data->entidad_legal, "segmento"=>$data->segmento, "monto"=>$data->monto, "id_mes"=>$data->id_mes
                                            ))',
                ),
            ),
        ),
    ),
)); ?>

<!--
<br>
<div class="column">

    <?php echo CHtml::submitButton('Generar excel filtrado', array('submit'=>array('VistasPpto/rubroExportToExcel_1'),)); ?>

</div>

<div class="column">
    
    <?php echo CHtml::submitButton('Generar excel completo', array('submit'=>array('VistasPpto/rubroExportToExcel_2'),)); ?>

</div>
<br>
-->
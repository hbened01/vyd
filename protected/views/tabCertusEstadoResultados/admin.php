<?php $this->setPageTitle('insumos certus edo. resultados'); ?>
<?php
/* @var $this TabCertusEstadoResultadosController */
/* @var $model TabCertusEstadoResultados */

$this->breadcrumbs=array(
	'insumos de estado resultados'=>array('index'),
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
	$('#tab-certus-estado-resultados-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

// (#5)
Yii::app()->clientScript->registerScript('re-install-date-picker', "
function reinstallDatePicker(id, data) {
    $('#datepicker_fecha').datepicker();
}
");

?>
<br>
<h1>Vistas de certus estados resultados</h1>
<br>
<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php /* echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); */ ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div align="left" class="row">
<?php
    $this->widget('ext.PageSize.EPageSize', array(
    'gridViewId' => 'tab-certus-estado-resultados-grid',
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
	'id'=>'tab-certus-estado-resultados-grid',
	'dataProvider'=>$dataProvider, //$model->search(),
	'filter'=>$model,
    'htmlOptions'=>array('style' => 'font-style:italic;font-size:12px;'),
	'afterAjaxUpdate' => 'reinstallDatePicker', // (#1)
	'columns'=>array(
		array(
        'header'=>'No.',
        'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
         ),
		//'fecha',
        array(
                    'name' => 'Fecha',
                    'value'=> '$data->fecha',
                    'filter' => $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'model'=>$model, 
                        'attribute'=>'fecha',
                        'language' => 'es',
                        'i18nScriptFile' => 'jquery.ui.datepicker-es.js', // (#2)
                        'htmlOptions' => array(
                        'id' => 'datepicker_fecha',
                        //'readonly'=>"readonly"
                        ),
                        'defaultOptions' => array(  // (#3)
                            //'showAnim'=>'fold',
                            'autoSize'=>false,
                            //'flat'=>false,
                            //'showButtonPanel' => true,
                            //'constrainInput'=>true,
                            //'currentText'=>'Now',
                            //'buttonImage'=>Yii::app()->baseUrl.'/images/caledario.jpg',
                            //'buttonImageOnly'=>true,
                            //'buttonText'=>'Fecha',
                            'showOn' => 'focus', // se puede colocar both
                            'language' => 'es',
                            'monthNames' => array('Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre'),
                            'monthNamesShort' => array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"),
                            'dayNames' => array('Domingo,Lunes,Martes,Miercoles,Jueves,Viernes,Sabado'),
                            'dayNamesMin' => array('Do','Lu','Ma','Mi','Ju','Vi','Sa'),
                            'dateFormat' => 'yy-mm-dd', // ó 'dd-mm-yy'
                            'yearRange'=>'2008',
                            'minDate'=>date("y-m-d",strtotime("2008-01-01")), //fecha minima
                            //'minDate'=>'date("Y-m-d")', //fecha minima
                            'maxDate'=>'date("y-m-d")', //fecha maxima  
                            'showOtherMonths' => true,
                            'selectOtherMonths' => true,
                            'changeMonth' => true,
                            'changeYear' => true,
                        )
                    ), 
                    true), // (#4)
                ),
		//'anio',
        array(
        'header'=>'Año',
        'name'=>'anio',
        'value' => '$data->anio',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabCertusEstadoResultados::model()->findAll(array("select"=>"anio", "distinct"=>"true", "order"=>"anio")), 'anio','anio') 
                ),
		//'id_mes',
        array(
        'header'=>'Mes',
        'name'=>'id_mes',
        'value' => '$data->idMes->descrip_mes',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabMeses::model()->findAll(array("order"=>"id_mes")), 'id_mes','descrip_mes') 
                ),
		//'rubro',
        array(
        'header'=>'Rubro',
        'name'=>'rubro',
        'value' => '$data->rubro',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabCertusEstadoResultados::model()->findAll(array("select"=>"rubro", "distinct"=>"true", "order"=>"rubro")), 'rubro','rubro') 
                ),
		//'entidad_legal',
        array(
        'header'=>'Entidad legal',
        'name'=>'entidad_legal',
        'value' => '$data->entidad_legal',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabCertusEstadoResultados::model()->findAll(array("select"=>"entidad_legal", "distinct"=>"true", "order"=>"entidad_legal")), 'entidad_legal','entidad_legal') 
                ),
		//'unidad_negocio',
        array(
        'header'=>'Unidad de negocio',
        'name'=>'unidad_negocio',
        'value' => '$data->unidad_negocio',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabCertusEstadoResultados::model()->findAll(array("select"=>"unidad_negocio", "distinct"=>"true", "order"=>"unidad_negocio")), 'unidad_negocio','unidad_negocio') 
                ),
		//'escenario',
        array(
        'header'=>'Tipo de ingreso',
        'name'=>'escenario',
        'value' => '$data->escenario',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabCertusEstadoResultados::model()->findAll(array("select"=>"escenario", "distinct"=>"true", "order"=>"escenario")), 'escenario','escenario') 
                ),
		'monto',
		/*
		'id_certus_estado_resultados',
		'mes',
		'metodo',
		'segmento',
		'moneda',
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

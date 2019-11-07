<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php $this->setPageTitle('listado de ins. reales'); ?>
<?php
$this->breadcrumbs=array(
	'listados de rubros reales'=>array('index'),
	'vistas resumen',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
    array('label'=>'Generar excel', 'url'=>array('exportToExcel')),
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
    $('#tab-list-rubros-reales-grid').yiiGridView('update', {
        data: $(this).serialize()
    });
    return false;
});
");
?>
<br>
<h1>Listado de insumos reales</h1>
<!--"COMENTADO"
<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>
-->
<?php //*echo CHtml::link('Advanced Search','#',array('class'=>'search-button'));*// //"COMENTADO" ?>
<br>
<p>
    Nota: "Seleccione la lista de acuerdo a la lógica de negocio."
</p>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div align="left" class="row">
<?php
    $this->widget('ext.PageSize.EPageSize', array(
    'gridViewId' => 'tab-list-rubros-reales-grid',
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
    'id'=>'tab-list-rubros-reales-grid',
    'dataProvider'=>$dataProvider,
    'filter'=>$model,
    'htmlOptions'=>array('style' => 'font-style:italic;font-size:12px;'),
    'columns'=>array(
       //'id_rubro',
        array(
        'header'=>'Id. Rubro',
        'name'=>'id_rubro',
        'value' => '$data->idRubro->descrip_rubro',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabRubros::model()->findAll(array("order"=>"id_rubro")), 'id_rubro','descrip_rubro')
                ),
        //'id_categoria',
        array(
        'header'=>'Id. Categoria',
        'name'=>'id_categoria',
        'value' => '$data->idCategoria->descrip_categoria',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabCategorias::model()->findAll(array("order"=>"id_categoria")), 'id_categoria','descrip_categoria')
                ),
        //'id_unidad_funcional',
        array(
        'header'=>'Id. Unidad Funcional',
        'name'=>'id_unidad_funcional',
        'value' => '$data->idUnidadFuncional->descrip_unidad_funcional',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabUnidadFuncional::model()->findAll(array("order"=>"id_unidad_funcional")), 'id_unidad_funcional','descrip_unidad_funcional')
                ),
        //'id_entidad_legal',
        array(
        'header'=>'Id. Entidad Legal',
        'name'=>'id_entidad_legal',
        'value' => '$data->idEntidadLegal->descrip_entidad_legal',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabEntidadLegal::model()->findAll(array("order"=>"id_entidad_legal")), 'id_entidad_legal','descrip_entidad_legal')
                ),
        //'nb_rubro',
        array(
        'header'=>'Nombre del insumo',
        'name'=>'nb_rubro',
        'value' => '$data->nb_rubro',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabListRubrosReales::model()->findAll(array("order"=>"nb_rubro")), 'nb_rubro','nb_rubro')
                ),
        //'nb_unidad_funcional',
        array(
        'header'=>'Nombre de la unidad funcional',
        'name'=>'nb_unidad_funcional',
        'value' => '$data->nb_unidad_funcional',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabListRubrosReales::model()->findAll(), 'nb_unidad_funcional','nb_unidad_funcional')
                ),
        //'estado',
        array(
        'header'=>'Estado',
        'name'=>'estado',
        'value' => '$data->estado',
        'htmlOptions'=>array('style'=>'text-align: center','width'=>'80px'),
        'filter' => CHtml::listData(TabListRubrosReales::model()->findAll(), 'estado','estado')
                ),
        'signo',
        /*
        'id_entidad_legal',
        'signo',
        'in_stat',
        'usr_crea',
        'fe_crea',
        'usr_modf',
        'fe_modf',
        */
        array(
            'class'=>'CButtonColumn',
            'header'=>'Accesos',
            'template'=>'{view}{update}',
        ),
    ),
)); ?>

<br>

<div class="row">

<h1><img src="<?php echo Yii::app()->baseUrl; ?>/images/big_icons/icon-bulb.png" width="30px" height="30px" style="margin: 0px 0px -3px 0px;"><u><b><i>Nota de interés:</i></b></u>&nbsp Actualizar si desea anexar un insumo de certus a un rubro padre de la unidad de negocios.</h1>
    
</div>

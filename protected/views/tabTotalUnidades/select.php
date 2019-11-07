<!-- ----------------------------------------------------------------------------------------------------------------------------------- -->

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/funciones_js/tabTotalUnidades.js"></script>

<!-- ----------------------------------------------------------------------------------------------------------------------------------- -->
<?php $this->setPageTitle('seleccione insumos und.'); ?>
<br>
<br>
<h1>Insertar condiciones para graficar</h1>
<hr size=3 width= 50% align=center/> 
<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-select-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    'clientOptions'=>array('validateOnSubmit'=>false,),
    )); ?>

    <p class="note">Campos requeridos para la consulta. <span class="required">(*)</span></p>

    <div class="column">

    <div class="row">

    <?php echo $form->labelEx(TablaIngresosUnidades::model(),'<span class="required">(*)</span> Año a consultar: ');?> 

    <?php 
        $list=CHtml::listData(TablaIngresosUnidades::model()->findAll(array("select"=>"anio", "distinct"=>"true", "order"=>"anio")),'anio','anio');
        //las condiciones de el finAll() pueden ser 'join', 'order', 'limit', 'distinct', dependiendo la necesidad.//
        echo CHtml::dropDownList('anio','',$list,//se coloca $list para mostrar lo que trae la consulta
        array(
              //'empty'=>'Seleccione',
              'style' => 'width:275px;font-style: italic;font-size:10px;',
              'ajax' => array(
              'type'=>'POST', //request type
              'url'=>CController::createUrl('TabTotalUnidades/und'), //url to call. 
              'update'=>'#descrip_unidad_funcional', //selector to update       
                        ),'prompt'=>'Seleccione')) ;            
    ?>

    <?php echo $form->error(TablaIngresosUnidades::model(),'anio'); ?>

    </div>

    <div class="row"> 

    <?php echo $form->labelEx(TablaIngresosUnidades::model(),'<span class="required">(*)</span> Unidad funcional: ');?> 

    <?php
        $list=CHtml::listData(TablaIngresosUnidades::model()->findAll(array("select"=>"descrip_unidad_funcional", "distinct"=>"true", "order"=>"descrip_unidad_funcional")),'descrip_unidad_funcional','descrip_unidad_funcional');
        //las condiciones de el finAll() pueden ser 'join', 'order', 'limit', 'distinct', dependiendo la necesidad.//
        echo CHtml::dropDownList('descrip_unidad_funcional','', $list,//se coloca $list para mostrar lo que trae la consulta
        array(
              //'empty'=>'Seleccione',
              'style' => 'width:275px;font-style: italic;font-size:10px;',
              'ajax' => array(
              'type'=>'POST', //request type
              'url'=>CController::createUrl('TabTotalUnidades/cat'), //url to call. 
              'update'=>'#descrip_total', //selector to update             
                        ),'prompt'=>'Seleccione')) ;           
    ?>

    <?php echo $form->error(TablaIngresosUnidades::model(),'descrip_unidad_funcional'); ?>

    </div>

    <div class="row">

    <?php echo $form->labelEx(TablaIngresosUnidades::model(),'<span class="required">(*)</span> Consultar total: ');?> 

    <?php
        $list=CHtml::listData(TablaIngresosUnidades::model()->findAll(array("select"=>"descrip_total", "distinct"=>"true", "order"=>"descrip_total")),'descrip_total','descrip_total');
        //las condiciones de el finAll() pueden ser 'join', 'order', 'limit', 'distinct', dependiendo la necesidad.//
        echo CHtml::dropDownList('descrip_total','', $list,//se coloca $list para mostrar lo que trae la consulta
        array(
              //'empty'=>'Seleccione',
              'style' => 'width:275px;font-style: italic;font-size:10px;',
              'ajax' => array(
              'type'=>'POST', //request type
              'url'=>CController::createUrl('TabTotalUnidades/tot'), //url to call. 
              'update'=>'#descrip_categoria', //selector to update
                        ),'prompt'=>'Seleccione')) ;                
    ?>

    <?php echo $form->error(TablaIngresosUnidades::model(),'descrip_total'); ?>

    </div>

    <div class="row">

    <?php echo $form->labelEx(TablaIngresosUnidades::model(),'<span class="required">(*)</span> Categoria: ');?> 

    <?php
        $list=CHtml::listData(TablaIngresosUnidades::model()->findAll(array("select"=>"descrip_categoria", "distinct"=>"true", "order"=>"descrip_categoria")),'descrip_categoria','descrip_categoria');
        //las condiciones de el finAll() pueden ser 'join', 'order', 'limit', 'distinct', dependiendo la necesidad.//
        echo CHtml::dropDownList('descrip_categoria','', $list,//se coloca $list para mostrar lo que trae la consulta
        array(
              'style' => 'width:275px;font-style: italic;font-size:10px;',
              'empty'=>'Seleccione',
              'ajax' => array(
              'type'=>'POST', //request type
              'url'=>CController::createUrl('TabTotalUnidades/parametro'), //url to call. 
              'update'=>'#graficar', //selector to update
                        ),)) ;                 
    ?>

    <?php echo $form->error(TablaIngresosUnidades::model(),'descrip_categoria'); ?>

    </div>
    </div>

    <div class="column buttons">
    <!-- boton para generar grafico -->
    <br><br><br>
    <?php //echo CHtml::submitButton('Generar gráfico', array('submit'=>array('TabTotalUnidades/grafica'),)); ?>
    <?php echo CHtml::submitButton('Generar gráfico', array('name'=>'grafica')); ?>
    </div>

    <div class="column buttons">
    <!-- boton para generar grafico -->
    <br><br><br>
    <?php echo CHtml::submitButton(('Volver a inicio'),array('submit' => array('/site/index'))); ?>
    </div>

    <div id="graficar" name="graficar">
    <!-- en este div es que se mostrara la tabla -->
    </div>

    <?php $this->layout='column1'; ?>  <!-- Para elegir layout a utilizar -->

    <?php $this->endWidget(); ?>

</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="row">

<h1><img src="<?php echo Yii::app()->baseUrl; ?>/images/big_icons/icon-bulb.png" width="30px" height="30px" style="margin: 0px 0px -3px 0px;"><u><b><i>Nota de interés:</i></b></u>&nbsp Seleccionar los combos de acuerdo a su necesidad o lógica de negocios.</h1>
    
</div>


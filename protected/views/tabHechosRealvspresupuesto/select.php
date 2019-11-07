<!-- ----------------------------------------------------------------------------------------------------------------------------------- -->

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/funciones_js/tabHechosRealvspresupuesto.js"></script>

<!-- ----------------------------------------------------------------------------------------------------------------------------------- -->
<?php $this->setPageTitle('seleccione insumos ind.'); ?>
<br>
<br>
<h1>Insertar condiciones para graficar</h1>
<hr size=3 width= 50% align=center/> 
<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-select-form',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>false,
    'clientOptions'=>array('validateOnSubmit'=>false,),
    )); ?>
    
    <p class="note">Campos requeridos para la consulta. <span class="required">(*)</span></p>

    <div class="column">

    <div class="row">

    <?php echo $form->labelEx(TablaIngresosIndividuales::model(),'<span class="required">(*)</span> Año a consultar: ');?> 

    <?php $list=CHtml::listData(TablaIngresosIndividuales::model()->findAll(array("select"=>"registration_year", "distinct"=>"true", "order"=>"registration_year")),'registration_year','registration_year');
        //las condiciones de el finAll() pueden ser 'join', 'order', 'limit', 'distinct', dependiendo la necesidad.//
        echo CHtml::dropDownList('registration_year','',$list,//se coloca $list para mostrar lo que trae la consulta
        array(
              //'empty'=>'Seleccione',
              //'style'=>'width:700px;height:340px;font-style: italic;font-size: 12px;color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: #ffffff; margin: 8px;'
              //Personalización de los combos dependientes.
              'style' => 'width:240px;font-style: italic;font-size:10px;',
              'ajax' => array(
              'type'=>'POST', //request type
              'url'=>CController::createUrl('TabHechosRealvspresupuesto/und'), //url to call. 
              'update'=>'#descrip_unidad_funcional', //selector to update       
                        ),'prompt'=>'Seleccione')) ;            
    ?>

    <?php echo $form->error(TablaIngresosIndividuales::model(),'registration_year'); ?>

    </div>

    <div class="row"> 

    <?php echo $form->labelEx(TablaIngresosIndividuales::model(),'<span class="required">(*)</span> Unidad Funcional: ');?> 

    <?php $list=CHtml::listData(TablaIngresosIndividuales::model()->findAll(array("select"=>"descrip_unidad_funcional", "distinct"=>"true", "order"=>"descrip_unidad_funcional")),'descrip_unidad_funcional','descrip_unidad_funcional');
        //las condiciones de el finAll() pueden ser 'join', 'order', 'limit', 'distinct', dependiendo la necesidad.//
        echo CHtml::dropDownList('descrip_unidad_funcional','', $list,//se coloca $list para mostrar lo que trae la consulta
        array(
              //'empty'=>'Seleccione',
              'style' => 'width:240px;font-style: italic;font-size:10px;',
              'ajax' => array(
              'type'=>'POST', //request type
              'url'=>CController::createUrl('TabHechosRealvspresupuesto/cat'), //url to call. 
              'update'=>'#descrip_categoria', //selector to update             
                        ),'prompt'=>'Seleccione')) ;           
    ?>

    <?php echo $form->error(TablaIngresosIndividuales::model(),'descrip_unidad_funcional'); ?>

    </div>

    <div class="row">

    <?php echo $form->labelEx(TablaIngresosIndividuales::model(),'<span class="required">(*)</span> Categoria: ');?> 

    <?php $list=CHtml::listData(TablaIngresosIndividuales::model()->findAll(array("select"=>"descrip_categoria", "distinct"=>"true", "order"=>"descrip_categoria")),'descrip_categoria','descrip_categoria');
        //las condiciones de el finAll() pueden ser 'join', 'order', 'limit', 'distinct', dependiendo la necesidad.//
        echo CHtml::dropDownList('descrip_categoria','', $list,//se coloca $list para mostrar lo que trae la consulta
        array(
              //'empty'=>'Seleccione',
              'style' => 'width:240px;font-style: italic;font-size:10px;',
              'ajax' => array(
              'type'=>'POST', //request type
              'url'=>CController::createUrl('TabHechosRealvspresupuesto/rub'), //url to call. 
              'update'=>'#descrip_rubro', //selector to update
                        ),'prompt'=>'Seleccione')) ;                
    ?>

    <?php echo $form->error(TablaIngresosIndividuales::model(),'descrip_categoria'); ?>

    </div>

    <div class="row">

    <?php echo $form->labelEx(TablaIngresosIndividuales::model(),'<span class="required">(*)</span> Rubro: ');?> 

    <?php $list=CHtml::listData(TablaIngresosIndividuales::model()->findAll(array("select"=>"descrip_rubro", "distinct"=>"true", "order"=>"descrip_rubro")),'descrip_rubro','descrip_rubro');
        //las condiciones de el finAll() pueden ser 'join', 'order', 'limit', 'distinct', dependiendo la necesidad.//
        echo CHtml::dropDownList('descrip_rubro','', $list,//se coloca $list para mostrar lo que trae la consulta
        array('style' => 'width:240px;font-style: italic;font-size:10px;',
              'empty'=>'Seleccione',
              'ajax' => array(
              'type'=>'POST', //request type
              'url'=>CController::createUrl('TabHechosRealvspresupuesto/parametro'), //url to call. 
              'update'=>'#graficar', //selector to update
                        ),)) ;                 
    ?>

    <?php echo $form->error(TablaIngresosIndividuales::model(),'descrip_rubro'); ?>

    </div>
    </div>

    <div class="column buttons">
    <!-- boton para generar grafico -->
    <br><br><br>
    <?php echo CHtml::submitButton('Generar gráfico', array('name'=>'grafica')); ?>
    <?php //echo CHtml::submitButton('Generar gráfico', array('submit'=>array('TabHechosRealvspresupuesto/grafica'),)); ?> 
    </div>

    <div class="column buttons">
    <!-- boton para retornar al index -->
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

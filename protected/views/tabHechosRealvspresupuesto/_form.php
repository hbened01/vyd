<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <br>
	<p class="note">Los campos que lleven <span class="required">*</span>
 son obligatorios.</p>
 	<br>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_rubro'); ?>
        <?php echo $form->dropDownList($model,'id_rubro', CHtml::listData(TabRubros::model()->findAll(),'id_rubro','descrip_rubro'),array('style' => 'width:240px;font-style: italic;font-size:10px;')); ?>
        <?php echo $form->error($model,'id_rubro'); ?>
    </div>
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_unidad_funcional'); ?>
        <?php echo $form->dropDownList($model,'id_unidad_funcional', CHtml::listData(TabUnidadFuncional::model()->findAll(),'id_unidad_funcional','descrip_unidad_funcional'),array('style' => 'width:240px;font-style: italic;font-size:10px;')); ?>
        <?php echo $form->error($model,'id_unidad_funcional'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_categoria'); ?>
        <?php echo $form->dropDownList($model,'id_categoria', CHtml::listData(TabCategorias::model()->findAll(),'id_categoria','descrip_categoria'),array('style' => 'width:240px;font-style: italic;font-size:10px;')); ?>
        <?php echo $form->error($model,'id_categoria'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'registration_year'); ?>
        <?php echo $form->dropDownList($model,'registration_year', CHtml::listData(TabHechosRealvspresupuesto::model()->findAll(array("order"=>"registration_year")),'registration_year','registration_year'),array('style' => 'width:240px;font-style: italic;font-size:10px;')); ?>
        <?php echo $form->error($model,'registration_year'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_mes'); ?>
        <?php echo $form->dropDownList($model,'id_mes', CHtml::listData(TabMeses::model()->findAll(),'id_mes','descrip_mes'),array('style' => 'width:240px;font-style: italic;font-size:10px;')); ?>
        <?php echo $form->error($model,'id_mes'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'valor'); ?>
        <?php echo $form->textField($model,'valor',array('size'=>37,'maxlength'=>37)); ?>
        <?php echo $form->error($model,'valor'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_tipo_ingreso'); ?>
        <?php echo $form->dropDownList($model,'id_tipo_ingreso', CHtml::listData(TabTipoIngreso::model()->findAll(),'id_tipo_ingreso','descripcion_ingreso'),array('style' => 'width:240px;font-style: italic;font-size:10px;')); ?>
        <?php echo $form->error($model,'id_tipo_ingreso'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_moneda'); ?>
        <?php echo $form->dropDownList($model,'id_moneda', CHtml::listData(TabMoneda::model()->findAll(),
        'id_moneda','descripcion_moneda'),array('style' => 'width:240px;font-style: italic;font-size:10px;')); ?>
        <?php echo $form->error($model,'id_moneda'); ?>
    </div>
	
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 

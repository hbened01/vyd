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
        <?php echo $form->labelEx($model,'fecha'); ?>
        <?php echo $form->textField($model,'fecha'); ?>
        <?php echo $form->error($model,'fecha'); ?>
    </div>
    
    
    <div class="row">
        <?php echo $form->labelEx($model,'anio'); ?>
        <?php echo $form->textField($model,'anio'); ?>
        <?php echo $form->error($model,'anio'); ?>
    </div>
    
    
    <div class="row">
        <?php echo $form->labelEx($model,'rubro'); ?>
        <?php echo $form->textField($model,'rubro'); ?>
        <?php echo $form->error($model,'rubro'); ?>
    </div>
    
    
    <div class="row">
        <?php echo $form->labelEx($model,'entidad_legal'); ?>
        <?php echo $form->textField($model,'entidad_legal'); ?>
        <?php echo $form->error($model,'entidad_legal'); ?>
    </div>
    
    
    <div class="row">
        <?php echo $form->labelEx($model,'unidad_negocio'); ?>
        <?php echo $form->textField($model,'unidad_negocio'); ?>
        <?php echo $form->error($model,'unidad_negocio'); ?>
    </div>
    
    
    <div class="row">
        <?php echo $form->labelEx($model,'segmento'); ?>
        <?php echo $form->textField($model,'segmento'); ?>
        <?php echo $form->error($model,'segmento'); ?>
    </div>
    
    
    <div class="row">
        <?php echo $form->labelEx($model,'monto'); ?>
        <?php echo $form->textField($model,'monto'); ?>
        <?php echo $form->error($model,'monto'); ?>
    </div>
    
    
    <div class="row">
        <?php echo $form->labelEx($model,'id_mes'); ?>
        <?php echo $form->dropDownList($model,'id_mes', CHtml::listData(TabMeses::model()->findAll(),'id_mes','descrip_mes')); ?>
        <?php echo $form->error($model,'id_mes'); ?>
    </div>
    
    
    <div class="row">
        <?php echo $form->labelEx($model,'id_moneda'); ?>
        <?php echo $form->dropDownList($model,'id_moneda', CHtml::listData(TabMoneda::model()->findAll(),
        'id_moneda','descripcion_moneda')); ?>
        <?php echo $form->error($model,'id_moneda'); ?>
    </div>
    
    
    <div class="row">
        <?php echo $form->labelEx($model,'id_tipo_ingreso'); ?>
        <?php echo $form->dropDownList($model,'id_tipo_ingreso', CHtml::listData(TabTipoIngreso::model()->findAll(),'id_tipo_ingreso','descripcion_ingreso')); ?>
        <?php echo $form->error($model,'id_tipo_ingreso'); ?>
    </div>
    
    <!--
    <div class="row">
        <?php echo $form->labelEx($model,'in_stat'); ?>
        <?php echo $form->textField($model,'in_stat'); ?>
        <?php echo $form->error($model,'in_stat'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'usr_crea'); ?>
        <?php echo $form->textField($model,'usr_crea'); ?>
        <?php echo $form->error($model,'usr_crea'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'fe_crea'); ?>
        <?php echo $form->textField($model,'fe_crea'); ?>
        <?php echo $form->error($model,'fe_crea'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'usr_modf'); ?>
        <?php echo $form->textField($model,'usr_modf'); ?>
        <?php echo $form->error($model,'usr_modf'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'fe_modf'); ?>
        <?php echo $form->textField($model,'fe_modf'); ?>
        <?php echo $form->error($model,'fe_modf'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'id_rubro'); ?>
        <?php echo $form->dropDownList($model,'id_rubro', CHtml::listData(TabRubros::model()->findAll(),'id_rubro','descrip_rubro')); ?>
        <?php echo $form->error($model,'id_rubro'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'id_categoria'); ?>
        <?php echo $form->dropDownList($model,'id_categoria', CHtml::listData(TabCategorias::model()->findAll(),'id_categoria','descrip_categoria')); ?>
        <?php echo $form->error($model,'id_categoria'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'id_unidad_funcional'); ?>
        <?php echo $form->dropDownList($model,'id_unidad_funcional', CHtml::listData(TabUnidadFuncional::model()->findAll(),'id_unidad_funcional','descrip_unidad_funcional')); ?>
        <?php echo $form->error($model,'id_unidad_funcional'); ?>
    </div>
     <div class="row">
        <?php echo $form->labelEx($model,'signo'); ?>
        <?php echo $form->textField($model,'signo'); ?>
        <?php echo $form->error($model,'signo'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'id_voz_datos_reales'); ?>
        <?php echo $form->textField($model,'id_voz_datos_reales'); ?>
        <?php echo $form->error($model,'id_voz_datos_reales'); ?>
    </div>
    -->
    
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 

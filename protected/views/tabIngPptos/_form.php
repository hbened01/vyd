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
        <?php echo $form->labelEx($model,'linea_rubro'); ?>
        <?php echo $form->textField($model,'linea_rubro'); ?>
        <?php echo $form->error($model,'linea_rubro'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'enero'); ?>
        <?php echo $form->textField($model,'enero'); ?>
        <?php echo $form->error($model,'enero'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'febrero'); ?>
        <?php echo $form->textField($model,'febrero'); ?>
        <?php echo $form->error($model,'febrero'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'marzo'); ?>
        <?php echo $form->textField($model,'marzo'); ?>
        <?php echo $form->error($model,'marzo'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'abril'); ?>
        <?php echo $form->textField($model,'abril'); ?>
        <?php echo $form->error($model,'abril'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'mayo'); ?>
        <?php echo $form->textField($model,'mayo'); ?>
        <?php echo $form->error($model,'mayo'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'junio'); ?>
        <?php echo $form->textField($model,'junio'); ?>
        <?php echo $form->error($model,'junio'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'julio'); ?>
        <?php echo $form->textField($model,'julio'); ?>
        <?php echo $form->error($model,'julio'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'agosto'); ?>
        <?php echo $form->textField($model,'agosto'); ?>
        <?php echo $form->error($model,'agosto'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'septiembre'); ?>
        <?php echo $form->textField($model,'septiembre'); ?>
        <?php echo $form->error($model,'septiembre'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'octubre'); ?>
        <?php echo $form->textField($model,'octubre'); ?>
        <?php echo $form->error($model,'octubre'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'noviembre'); ?>
        <?php echo $form->textField($model,'noviembre'); ?>
        <?php echo $form->error($model,'noviembre'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'diciembre'); ?>
        <?php echo $form->textField($model,'diciembre'); ?>
        <?php echo $form->error($model,'diciembre'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'total_ingresos'); ?>
        <?php echo $form->textField($model,'total_ingresos'); ?>
        <?php echo $form->error($model,'total_ingresos'); ?>
    </div>
	
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 

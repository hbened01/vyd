<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_tipo_informe'); ?>
        <?php echo $form->textField($model,'id_tipo_informe'); ?>
        <?php echo $form->error($model,'id_tipo_informe'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_seccion'); ?>
        <?php echo $form->textField($model,'id_seccion'); ?>
        <?php echo $form->error($model,'id_seccion'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'fecha'); ?>
        <?php echo $form->textField($model,'fecha'); ?>
        <?php echo $form->error($model,'fecha'); ?>
    </div>
	
    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 

<?php
/* @var $this TabInformeController */
/* @var $model TabInforme */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tab-informe-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
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
		<?php echo $form->labelEx($model,'id_usr'); ?>
		<?php echo $form->textField($model,'id_usr'); ?>
		<?php echo $form->error($model,'id_usr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_status'); ?>
		<?php echo $form->textField($model,'id_status'); ?>
		<?php echo $form->error($model,'id_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo'); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtitulo1'); ?>
		<?php echo $form->textField($model,'subtitulo1'); ?>
		<?php echo $form->error($model,'subtitulo1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtitulo2'); ?>
		<?php echo $form->textField($model,'subtitulo2'); ?>
		<?php echo $form->error($model,'subtitulo2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
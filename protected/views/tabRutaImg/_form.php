<?php
/* @var $this TabRutaImgController */
/* @var $model TabRutaImg */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tab-ruta-img-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_seccion'); ?>
		<?php echo $form->textField($model,'id_seccion'); ?>
		<?php echo $form->error($model,'id_seccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ruta_img'); ?>
		<?php echo $form->textField($model,'ruta_img'); ?>
		<?php echo $form->error($model,'ruta_img'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descrip_img'); ?>
		<?php echo $form->textField($model,'descrip_img'); ?>
		<?php echo $form->error($model,'descrip_img'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
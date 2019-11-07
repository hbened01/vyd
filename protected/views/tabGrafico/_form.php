<?php
/* @var $this TabGraficoController */
/* @var $model TabGrafico */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tab-grafico-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_detalle'); ?>
		<?php echo $form->textField($model,'id_detalle'); ?>
		<?php echo $form->error($model,'id_detalle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descrip_grafico'); ?>
		<?php echo $form->textField($model,'descrip_grafico'); ?>
		<?php echo $form->error($model,'descrip_grafico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textField($model,'observacion'); ?>
		<?php echo $form->error($model,'observacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'byte'); ?>
		<?php echo $form->textField($model,'byte'); ?>
		<?php echo $form->error($model,'byte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ext'); ?>
		<?php echo $form->textField($model,'ext'); ?>
		<?php echo $form->error($model,'ext'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
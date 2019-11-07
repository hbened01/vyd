<?php
/* @var $this TabUnidadFuncionalController */
/* @var $model TabUnidadFuncional */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tab-unidad-funcional-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<br>
	<p class="note">Los campos que lleven <span class="required">*</span>
 son obligatorios.</p>
 	<br>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descrip_unidad_funcional'); ?>
		<?php echo $form->textField($model,'descrip_unidad_funcional',array('size'=>37,'maxlength'=>37)); ?>
		<?php echo $form->error($model,'descrip_unidad_funcional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'acronimo'); ?>
		<?php echo $form->textField($model,'acronimo',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'acronimo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
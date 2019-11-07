<?php
/* @var $this TabTipoSeccionController */
/* @var $model TabTipoSeccion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tab-tipo-seccion-form',
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
		<?php echo $form->labelEx($model,'descrip_seccion'); ?>
		<?php echo $form->textField($model,'descrip_seccion',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'descrip_seccion'); ?>
	</div>
	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'parent_id_seccion'); ?>
		<?php echo $form->textField($model,'parent_id_seccion'); ?>
		<?php echo $form->error($model,'parent_id_seccion'); ?>
	</div>
	-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
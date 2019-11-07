<?php
/* @var $this TabRubrosController */
/* @var $model TabRubros */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tab-rubros-form',
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
		<?php echo $form->labelEx($model,'descrip_rubro'); ?>
		<?php echo $form->textField($model,'descrip_rubro',array('size'=>37,'maxlength'=>37)); ?>
		<?php echo $form->error($model,'descrip_rubro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_categoria'); ?>
		<!--<?php echo $form->textField($model,'id_categoria'); ?>-->
		<?php echo $form->dropDownList($model,'id_categoria',array('1' => 'VOZ', '2' => 'DATOS'),array('empty'=>'Seleccione','style'=>'width:240px;font-style: italic;font-size:10px;')); ?>
		<?php echo $form->error($model,'id_categoria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
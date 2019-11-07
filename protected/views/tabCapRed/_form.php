<?php
/* @var $this TabCapRedController */
/* @var $model TabCapRed */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tab-cap-red-form',
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
		<?php echo $form->labelEx($model,'distrito'); ?>
		<?php echo $form->textField($model,'distrito'); ?>
		<?php echo $form->error($model,'distrito'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'central'); ?>
		<?php echo $form->textField($model,'central'); ?>
		<?php echo $form->error($model,'central'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_central'); ?>
		<?php echo $form->textField($model,'nombre_central',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombre_central'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'serial'); ?>
		<?php echo $form->textField($model,'serial'); ?>
		<?php echo $form->error($model,'serial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categoria'); ?>
		<?php echo $form->textField($model,'categoria',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'categoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_numeros_con_normativa'); ?>
		<?php echo $form->textField($model,'total_numeros_con_normativa'); ?>
		<?php echo $form->error($model,'total_numeros_con_normativa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_numeros_libres_con_normativa'); ?>
		<?php echo $form->textField($model,'total_numeros_libres_con_normativa'); ?>
		<?php echo $form->error($model,'total_numeros_libres_con_normativa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_numeros_trabajados_asignados'); ?>
		<?php echo $form->textField($model,'total_numeros_trabajados_asignados'); ?>
		<?php echo $form->error($model,'total_numeros_trabajados_asignados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numeros_en_investigacion'); ?>
		<?php echo $form->textField($model,'numeros_en_investigacion'); ?>
		<?php echo $form->error($model,'numeros_en_investigacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_asociado_a_pares'); ?>
		<?php echo $form->textField($model,'no_asociado_a_pares'); ?>
		<?php echo $form->error($model,'no_asociado_a_pares'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pendiente_por_instalacion'); ?>
		<?php echo $form->textField($model,'pendiente_por_instalacion'); ?>
		<?php echo $form->error($model,'pendiente_por_instalacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pendiente_por_retirar'); ?>
		<?php echo $form->textField($model,'pendiente_por_retirar'); ?>
		<?php echo $form->error($model,'pendiente_por_retirar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pendiente_por_transferencia'); ?>
		<?php echo $form->textField($model,'pendiente_por_transferencia'); ?>
		<?php echo $form->error($model,'pendiente_por_transferencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ocupados'); ?>
		<?php echo $form->textField($model,'ocupados'); ?>
		<?php echo $form->error($model,'ocupados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pendiente_por_liberar'); ?>
		<?php echo $form->textField($model,'pendiente_por_liberar'); ?>
		<?php echo $form->error($model,'pendiente_por_liberar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'número_ocupado_abonado_inactivo'); ?>
		<?php echo $form->textField($model,'número_ocupado_abonado_inactivo'); ?>
		<?php echo $form->error($model,'número_ocupado_abonado_inactivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_asociado_a_central'); ?>
		<?php echo $form->textField($model,'no_asociado_a_central'); ?>
		<?php echo $form->error($model,'no_asociado_a_central'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_asociado_a_red_local'); ?>
		<?php echo $form->textField($model,'no_asociado_a_red_local'); ?>
		<?php echo $form->error($model,'no_asociado_a_red_local'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pendiente_por_mudanza'); ?>
		<?php echo $form->textField($model,'pendiente_por_mudanza'); ?>
		<?php echo $form->error($model,'pendiente_por_mudanza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modernizado'); ?>
		<?php echo $form->textField($model,'modernizado'); ?>
		<?php echo $form->error($model,'modernizado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desincorporado'); ?>
		<?php echo $form->textField($model,'desincorporado'); ?>
		<?php echo $form->error($model,'desincorporado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pendiente_por_ubicacion'); ?>
		<?php echo $form->textField($model,'pendiente_por_ubicacion'); ?>
		<?php echo $form->error($model,'pendiente_por_ubicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reubicado'); ?>
		<?php echo $form->textField($model,'reubicado'); ?>
		<?php echo $form->error($model,'reubicado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'restriccion_tecnica'); ?>
		<?php echo $form->textField($model,'restriccion_tecnica'); ?>
		<?php echo $form->error($model,'restriccion_tecnica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'capacidad_de_la_central'); ?>
		<?php echo $form->textField($model,'capacidad_de_la_central'); ?>
		<?php echo $form->error($model,'capacidad_de_la_central'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_procedimiento'); ?>
		<?php echo $form->textField($model,'fecha_procedimiento'); ?>
		<?php echo $form->error($model,'fecha_procedimiento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
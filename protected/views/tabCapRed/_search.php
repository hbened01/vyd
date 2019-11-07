<?php
/* @var $this TabCapRedController */
/* @var $model TabCapRed */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_cap_red'); ?>
		<?php echo $form->textField($model,'id_cap_red'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'distrito'); ?>
		<?php echo $form->textField($model,'distrito'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'central'); ?>
		<?php echo $form->textField($model,'central'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_central'); ?>
		<?php echo $form->textField($model,'nombre_central',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'serial'); ?>
		<?php echo $form->textField($model,'serial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categoria'); ?>
		<?php echo $form->textField($model,'categoria',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_numeros_con_normativa'); ?>
		<?php echo $form->textField($model,'total_numeros_con_normativa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_numeros_libres_con_normativa'); ?>
		<?php echo $form->textField($model,'total_numeros_libres_con_normativa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_numeros_trabajados_asignados'); ?>
		<?php echo $form->textField($model,'total_numeros_trabajados_asignados'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numeros_en_investigacion'); ?>
		<?php echo $form->textField($model,'numeros_en_investigacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_asociado_a_pares'); ?>
		<?php echo $form->textField($model,'no_asociado_a_pares'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pendiente_por_instalacion'); ?>
		<?php echo $form->textField($model,'pendiente_por_instalacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pendiente_por_retirar'); ?>
		<?php echo $form->textField($model,'pendiente_por_retirar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pendiente_por_transferencia'); ?>
		<?php echo $form->textField($model,'pendiente_por_transferencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ocupados'); ?>
		<?php echo $form->textField($model,'ocupados'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pendiente_por_liberar'); ?>
		<?php echo $form->textField($model,'pendiente_por_liberar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'número_ocupado_abonado_inactivo'); ?>
		<?php echo $form->textField($model,'número_ocupado_abonado_inactivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_asociado_a_central'); ?>
		<?php echo $form->textField($model,'no_asociado_a_central'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_asociado_a_red_local'); ?>
		<?php echo $form->textField($model,'no_asociado_a_red_local'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pendiente_por_mudanza'); ?>
		<?php echo $form->textField($model,'pendiente_por_mudanza'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modernizado'); ?>
		<?php echo $form->textField($model,'modernizado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'desincorporado'); ?>
		<?php echo $form->textField($model,'desincorporado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pendiente_por_ubicacion'); ?>
		<?php echo $form->textField($model,'pendiente_por_ubicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reubicado'); ?>
		<?php echo $form->textField($model,'reubicado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'restriccion_tecnica'); ?>
		<?php echo $form->textField($model,'restriccion_tecnica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'capacidad_de_la_central'); ?>
		<?php echo $form->textField($model,'capacidad_de_la_central'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_procedimiento'); ?>
		<?php echo $form->textField($model,'fecha_procedimiento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
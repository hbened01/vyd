<?php
/* @var $this TabCertusEstadisticasController */
/* @var $model TabCertusEstadisticas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tab-certus-estadisticas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos que lleven <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'formato'); ?>
		<?php echo $form->textField($model,'formato',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'formato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_saldo'); ?>
		<?php echo $form->textField($model,'tipo_saldo',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'tipo_saldo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'producto'); ?>
		<?php echo $form->textField($model,'producto',array('size'=>60,'maxlength'=>170)); ?>
		<?php echo $form->error($model,'producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_producto'); ?>
		<?php echo $form->textField($model,'codigo_producto',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'codigo_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_indicador'); ?>
		<?php echo $form->textField($model,'codigo_indicador',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'codigo_indicador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'indicador'); ?>
		<?php echo $form->textField($model,'indicador',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'indicador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_tipo_acceso'); ?>
		<?php echo $form->textField($model,'codigo_tipo_acceso',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'codigo_tipo_acceso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_acceso'); ?>
		<?php echo $form->textField($model,'tipo_acceso',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'tipo_acceso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_servicio'); ?>
		<?php echo $form->textField($model,'codigo_servicio',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'codigo_servicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'servicio'); ?>
		<?php echo $form->textField($model,'servicio',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'servicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modalidad_pago'); ?>
		<?php echo $form->textField($model,'modalidad_pago',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'modalidad_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_modalidad_pago'); ?>
		<?php echo $form->textField($model,'codigo_modalidad_pago',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'codigo_modalidad_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'moneda'); ?>
		<?php echo $form->textField($model,'moneda',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'moneda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'escenario'); ?>
		<?php echo $form->textField($model,'escenario',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'escenario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad_legal'); ?>
		<?php echo $form->textField($model,'entidad_legal',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'entidad_legal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unidad_negocio'); ?>
		<?php echo $form->textField($model,'unidad_negocio',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'unidad_negocio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segmento'); ?>
		<?php echo $form->textField($model,'segmento',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'segmento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto'); ?>
		<?php echo $form->textField($model,'monto'); ?>
		<?php echo $form->error($model,'monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'acumulado'); ?>
		<?php echo $form->textField($model,'acumulado'); ?>
		<?php echo $form->error($model,'acumulado'); ?>
	</div>

	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'in_stat'); ?>
		<?php echo $form->textField($model,'in_stat',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'in_stat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usr_crea'); ?>
		<?php echo $form->textField($model,'usr_crea',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'usr_crea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fe_crea'); ?>
		<?php echo $form->textField($model,'fe_crea'); ?>
		<?php echo $form->error($model,'fe_crea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usr_modf'); ?>
		<?php echo $form->textField($model,'usr_modf',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'usr_modf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fe_modf'); ?>
		<?php echo $form->textField($model,'fe_modf'); ?>
		<?php echo $form->error($model,'fe_modf'); ?>
	</div>
	-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
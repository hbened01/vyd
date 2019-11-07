<?php
/* @var $this TabCertusEstadoResultadosController */
/* @var $model TabCertusEstadoResultados */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tab-certus-estado-resultados-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos que lleven <span class="required">*</span>
 son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anio'); ?>
		<?php echo $form->textField($model,'anio',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'anio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mes'); ?>
		<?php echo $form->textField($model,'mes',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'mes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_mes'); ?>
		<?php echo $form->textField($model,'id_mes'); ?>
		<?php echo $form->error($model,'id_mes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rubro'); ?>
		<?php echo $form->textField($model,'rubro',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'rubro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad_legal'); ?>
		<?php echo $form->textField($model,'entidad_legal',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'entidad_legal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unidad_negocio'); ?>
		<?php echo $form->textField($model,'unidad_negocio',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'unidad_negocio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'escenario'); ?>
		<?php echo $form->textField($model,'escenario',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'escenario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metodo'); ?>
		<?php echo $form->textField($model,'metodo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'metodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segmento'); ?>
		<?php echo $form->textField($model,'segmento',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'segmento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'moneda'); ?>
		<?php echo $form->textField($model,'moneda',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'moneda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto'); ?>
		<?php echo $form->textField($model,'monto'); ?>
		<?php echo $form->error($model,'monto'); ?>
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
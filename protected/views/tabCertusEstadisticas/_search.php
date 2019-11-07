<?php
/* @var $this TabCertusEstadisticasController */
/* @var $model TabCertusEstadisticas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_certus_estadisticas'); ?>
		<?php echo $form->textField($model,'id_certus_estadisticas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formato'); ?>
		<?php echo $form->textField($model,'formato',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_saldo'); ?>
		<?php echo $form->textField($model,'tipo_saldo',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'producto'); ?>
		<?php echo $form->textField($model,'producto',array('size'=>60,'maxlength'=>170)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_producto'); ?>
		<?php echo $form->textField($model,'codigo_producto',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_indicador'); ?>
		<?php echo $form->textField($model,'codigo_indicador',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indicador'); ?>
		<?php echo $form->textField($model,'indicador',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_tipo_acceso'); ?>
		<?php echo $form->textField($model,'codigo_tipo_acceso',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_acceso'); ?>
		<?php echo $form->textField($model,'tipo_acceso',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_servicio'); ?>
		<?php echo $form->textField($model,'codigo_servicio',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'servicio'); ?>
		<?php echo $form->textField($model,'servicio',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modalidad_pago'); ?>
		<?php echo $form->textField($model,'modalidad_pago',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_modalidad_pago'); ?>
		<?php echo $form->textField($model,'codigo_modalidad_pago',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'moneda'); ?>
		<?php echo $form->textField($model,'moneda',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'escenario'); ?>
		<?php echo $form->textField($model,'escenario',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entidad_legal'); ?>
		<?php echo $form->textField($model,'entidad_legal',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unidad_negocio'); ?>
		<?php echo $form->textField($model,'unidad_negocio',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'segmento'); ?>
		<?php echo $form->textField($model,'segmento',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto'); ?>
		<?php echo $form->textField($model,'monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'acumulado'); ?>
		<?php echo $form->textField($model,'acumulado'); ?>
	</div>
	<!--
	<div class="row">
		<?php echo $form->label($model,'in_stat'); ?>
		<?php echo $form->textField($model,'in_stat',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usr_crea'); ?>
		<?php echo $form->textField($model,'usr_crea',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fe_crea'); ?>
		<?php echo $form->textField($model,'fe_crea'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usr_modf'); ?>
		<?php echo $form->textField($model,'usr_modf',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fe_modf'); ?>
		<?php echo $form->textField($model,'fe_modf'); ?>
	</div>
	-->
	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>
	
<?php $this->endWidget(); ?>

</div><!-- search-form -->
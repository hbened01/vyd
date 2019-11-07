<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>
	
	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'anio'); ?>
		<?php echo $form->textField($model,'anio'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'rubro'); ?>
		<?php echo $form->textField($model,'rubro'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'entidad_legal'); ?>
		<?php echo $form->textField($model,'entidad_legal'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'unidad_negocio'); ?>
		<?php echo $form->textField($model,'unidad_negocio'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'segmento'); ?>
		<?php echo $form->textField($model,'segmento'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'monto'); ?>
		<?php echo $form->textField($model,'monto'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_mes'); ?>
		<?php echo $form->textField($model,'id_mes'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_moneda'); ?>
		<?php echo $form->textField($model,'id_moneda'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_tipo_ingreso'); ?>
		<?php echo $form->textField($model,'id_tipo_ingreso'); ?>
	</div>
	<!--
	<div class="row">
		<?php echo $form->label($model,'id_rubro'); ?>
		<?php echo $form->textField($model,'id_rubro'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_categoria'); ?>
		<?php echo $form->textField($model,'id_categoria'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_unidad_funcional'); ?>
		<?php echo $form->textField($model,'id_unidad_funcional'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_voz_datos_ppto'); ?>
		<?php echo $form->textField($model,'id_voz_datos_ppto'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'signo'); ?>
		<?php echo $form->textField($model,'signo'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'in_stat'); ?>
		<?php echo $form->textField($model,'in_stat'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'usr_crea'); ?>
		<?php echo $form->textField($model,'usr_crea'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'fe_crea'); ?>
		<?php echo $form->textField($model,'fe_crea'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'usr_modf'); ?>
		<?php echo $form->textField($model,'usr_modf'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'fe_modf'); ?>
		<?php echo $form->textField($model,'fe_modf'); ?>
	</div>
	-->
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->

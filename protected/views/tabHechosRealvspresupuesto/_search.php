<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_rubro'); ?>
		<?php echo $form->textField($model,'id_rubro'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_unidad_funcional'); ?>
		<?php echo $form->textField($model,'id_unidad_funcional'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_categoria'); ?>
		<?php echo $form->textField($model,'id_categoria'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'registration_year'); ?>
		<?php echo $form->textField($model,'registration_year'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_mes'); ?>
		<?php echo $form->textField($model,'id_mes'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'valor'); ?>
		<?php echo $form->textField($model,'valor'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_tipo_ingreso'); ?>
		<?php echo $form->textField($model,'id_tipo_ingreso'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_moneda'); ?>
		<?php echo $form->textField($model,'id_moneda'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->

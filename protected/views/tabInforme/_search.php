<?php
/* @var $this TabInformeController */
/* @var $model TabInforme */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_informe'); ?>
		<?php echo $form->textField($model,'id_informe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipo_informe'); ?>
		<?php echo $form->textField($model,'id_tipo_informe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_usr'); ?>
		<?php echo $form->textField($model,'id_usr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_status'); ?>
		<?php echo $form->textField($model,'id_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subtitulo1'); ?>
		<?php echo $form->textField($model,'subtitulo1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subtitulo2'); ?>
		<?php echo $form->textField($model,'subtitulo2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
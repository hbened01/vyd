<?php
/* @var $this TabGraficoController */
/* @var $model TabGrafico */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_grafico'); ?>
		<?php echo $form->textField($model,'id_grafico'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_detalle'); ?>
		<?php echo $form->textField($model,'id_detalle'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descrip_grafico'); ?>
		<?php echo $form->textField($model,'descrip_grafico'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observacion'); ?>
		<?php echo $form->textField($model,'observacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'byte'); ?>
		<?php echo $form->textField($model,'byte'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ext'); ?>
		<?php echo $form->textField($model,'ext'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
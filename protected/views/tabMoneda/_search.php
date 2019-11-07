<?php
/* @var $this TabMonedaController */
/* @var $model TabMoneda */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_moneda'); ?>
		<?php echo $form->textField($model,'id_moneda'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion_moneda'); ?>
		<?php echo $form->textField($model,'descripcion_moneda'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
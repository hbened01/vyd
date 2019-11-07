<?php
/* @var $this TabTipoIngresoController */
/* @var $model TabTipoIngreso */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tipo_ingreso'); ?>
		<?php echo $form->textField($model,'id_tipo_ingreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion_ingreso'); ?>
		<?php echo $form->textField($model,'descripcion_ingreso'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
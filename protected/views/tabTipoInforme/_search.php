<?php
/* @var $this TabTipoInformeController */
/* @var $model TabTipoInforme */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tipo_informe'); ?>
		<?php echo $form->textField($model,'id_tipo_informe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descrip_informe'); ?>
		<?php echo $form->textField($model,'descrip_informe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
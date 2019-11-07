<?php
/* @var $this TabDetalleSeccionController */
/* @var $model TabDetalleSeccion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_detalle'); ?>
		<?php echo $form->textField($model,'id_detalle'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_seccion'); ?>
		<?php echo $form->textField($model,'id_seccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observacion'); ?>
		<?php echo $form->textField($model,'observacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
<?php
/* @var $this TabRutaImgController */
/* @var $model TabRutaImg */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_ruta'); ?>
		<?php echo $form->textField($model,'id_ruta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_seccion'); ?>
		<?php echo $form->textField($model,'id_seccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ruta_img'); ?>
		<?php echo $form->textField($model,'ruta_img'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descrip_img'); ?>
		<?php echo $form->textField($model,'descrip_img'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
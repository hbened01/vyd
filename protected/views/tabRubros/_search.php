<?php
/* @var $this TabRubrosController */
/* @var $model TabRubros */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	
	<!--<div class="row">
		<?php echo $form->label($model,'id_rubro'); ?>
		<?php echo $form->textField($model,'id_rubro'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'descrip_rubro'); ?>
		<?php echo $form->textField($model,'descrip_rubro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_categoria'); ?>
		<?php echo $form->textField($model,'id_categoria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
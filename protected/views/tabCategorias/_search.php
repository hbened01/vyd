<?php
/* @var $this TabCategoriasController */
/* @var $model TabCategorias */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<!--
	<div class="row">
		<?php echo $form->label($model,'id_categoria'); ?>
		<?php echo $form->textField($model,'id_categoria'); ?>
	</div>
	-->
	<div class="row">
		<?php echo $form->label($model,'descrip_categoria'); ?>
		<?php echo $form->textField($model,'descrip_categoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_padre_cat'); ?>
		<?php echo $form->textField($model,'id_padre_cat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
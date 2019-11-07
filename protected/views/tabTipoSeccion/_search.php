<?php
/* @var $this TabTipoSeccionController */
/* @var $model TabTipoSeccion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_seccion'); ?>
		<?php echo $form->textField($model,'id_seccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descrip_seccion'); ?>
		<?php echo $form->textField($model,'descrip_seccion'); ?>
	</div>
	<!--
	<div class="row">
		<?php echo $form->label($model,'parent_id_seccion'); ?>
		<?php echo $form->textField($model,'parent_id_seccion'); ?>
	</div>
	-->

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
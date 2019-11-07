<?php
/* @var $this TabUnidadFuncionalController */
/* @var $model TabUnidadFuncional */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<!--
	<div class="row">
		<?php echo $form->label($model,'id_unidad_funcional'); ?>
		<?php echo $form->textField($model,'id_unidad_funcional'); ?>
	</div>
	-->

	<div class="row">
		<?php echo $form->label($model,'descrip_unidad_funcional'); ?>
		<?php echo $form->textField($model,'descrip_unidad_funcional'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'acronimo'); ?>
		<?php echo $form->textField($model,'acronimo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
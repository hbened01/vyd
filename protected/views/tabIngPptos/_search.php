<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

	<div class="row">
		<?php echo $form->label($model,'anio'); ?>
		<?php echo $form->textField($model,'anio'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'rubro'); ?>
		<?php echo $form->textField($model,'rubro'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'entidad_legal'); ?>
		<?php echo $form->textField($model,'entidad_legal'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'unidad_negocio'); ?>
		<?php echo $form->textField($model,'unidad_negocio'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'segmento'); ?>
		<?php echo $form->textField($model,'segmento'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'linea_rubro'); ?>
		<?php echo $form->textField($model,'linea_rubro'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'enero'); ?>
		<?php echo $form->textField($model,'enero'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'febrero'); ?>
		<?php echo $form->textField($model,'febrero'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'marzo'); ?>
		<?php echo $form->textField($model,'marzo'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'abril'); ?>
		<?php echo $form->textField($model,'abril'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'mayo'); ?>
		<?php echo $form->textField($model,'mayo'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'junio'); ?>
		<?php echo $form->textField($model,'junio'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'julio'); ?>
		<?php echo $form->textField($model,'julio'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'agosto'); ?>
		<?php echo $form->textField($model,'agosto'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'septiembre'); ?>
		<?php echo $form->textField($model,'septiembre'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'octubre'); ?>
		<?php echo $form->textField($model,'octubre'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'noviembre'); ?>
		<?php echo $form->textField($model,'noviembre'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'diciembre'); ?>
		<?php echo $form->textField($model,'diciembre'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'total_ingresos'); ?>
		<?php echo $form->textField($model,'total_ingresos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->

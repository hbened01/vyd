<?php
/* @var $this TabTotalUnidadesController */
/* @var $model TabTotalUnidades */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tab-total-unidades-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<br>
	<p class="note">Los campos que lleven <span class="required">*</span>
 son obligatorios.</p>
 	<br>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_mes'); ?>
		<!--<?php echo $form->textField($model,'id_mes'); ?>-->
		<?php echo $form->dropDownList($model,'id_mes', CHtml::listData(TabMeses::model()->findAll(),'id_mes','descrip_mes')); ?>
		<?php echo $form->error($model,'id_mes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anio'); ?>
		<?php echo $form->textField($model,'anio'); ?>
		<?php echo $form->error($model,'anio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_total'); ?>
		<!--<?php echo $form->textField($model,'id_total'); ?>-->
		<?php echo $form->dropDownList($model,'id_total', CHtml::listData(TabTipoTotal::model()->findAll(),'id_total','descrip_total')); ?>
		<?php echo $form->error($model,'id_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_categoria'); ?>
		<?php echo $form->dropDownList($model,'id_categoria', CHtml::listData(TabCategorias::model()->findAll(),'id_categoria','descrip_categoria')); ?>
		<?php echo $form->error($model,'id_categoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_unidad_funcional'); ?>
		<?php echo $form->dropDownList($model,'id_unidad_funcional', CHtml::listData(TabUnidadFuncional::model()->findAll(),'id_unidad_funcional','descrip_unidad_funcional')); ?>
		<?php echo $form->error($model,'id_unidad_funcional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo_ingreso'); ?>
		<?php echo $form->dropDownList($model,'id_tipo_ingreso', CHtml::listData(TabTipoIngreso::model()->findAll(),'id_tipo_ingreso','descripcion_ingreso')); ?>
		<?php echo $form->error($model,'id_tipo_ingreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total'); ?>
		<?php echo $form->textField($model,'total',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'total'); ?>
	</div>

	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'in_stat'); ?>
		<?php echo $form->textField($model,'in_stat',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'in_stat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usr_crea'); ?>
		<?php echo $form->textField($model,'usr_crea',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'usr_crea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fe_crea'); ?>
		<?php echo $form->textField($model,'fe_crea'); ?>
		<?php echo $form->error($model,'fe_crea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usr_modf'); ?>
		<?php echo $form->textField($model,'usr_modf',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'usr_modf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fe_modf'); ?>
		<?php echo $form->textField($model,'fe_modf'); ?>
		<?php echo $form->error($model,'fe_modf'); ?>
	</div>
	-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
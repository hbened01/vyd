 <?php
/* @var $this TabListRubrosRealesController */
/* @var $model TabListRubrosReales */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <div class="row">
        <?php echo $form->label($model,'id_list_rubros_reales'); ?>
        <?php echo $form->textField($model,'id_list_rubros_reales'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'id_rubro'); ?>
        <?php echo $form->textField($model,'id_rubro'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'id_categoria'); ?>
        <?php echo $form->textField($model,'id_categoria'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'id_unidad_funcional'); ?>
        <?php echo $form->textField($model,'id_unidad_funcional'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'id_entidad_legal'); ?>
        <?php echo $form->textField($model,'id_entidad_legal'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'nb_rubro'); ?>
        <?php echo $form->textField($model,'nb_rubro',array('size'=>60,'maxlength'=>100)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'nb_unidad_funcional'); ?>
        <?php echo $form->textField($model,'nb_unidad_funcional',array('size'=>60,'maxlength'=>100)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'estado'); ?>
        <?php echo $form->textField($model,'estado',array('size'=>15,'maxlength'=>15)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'signo'); ?>
        <?php echo $form->textField($model,'signo',array('size'=>1,'maxlength'=>1)); ?>
    </div>

	<!-- 
	<div class="row">
		<?php echo $form->label($model,'in_stat'); ?>
		<?php echo $form->textField($model,'in_stat'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'usr_crea'); ?>
		<?php echo $form->textField($model,'usr_crea'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'fe_crea'); ?>
		<?php echo $form->textField($model,'fe_crea'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'usr_modf'); ?>
		<?php echo $form->textField($model,'usr_modf'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'fe_modf'); ?>
		<?php echo $form->textField($model,'fe_modf'); ?>
	</div>
	-->

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->


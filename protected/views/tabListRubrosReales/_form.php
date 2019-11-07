 <?php
/* @var $this TabListRubrosRealesController */
/* @var $model TabListRubrosReales */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'tab-list-rubros-reales-form',
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
        <?php echo $form->labelEx($model,'id_rubro'); ?>
        <?php echo $form->dropDownList($model,'id_rubro', CHtml::listData(TabRubros::model()->findAll(),'id_rubro','descrip_rubro'),array('style' => 'width:240px;font-style: italic;font-size:10px;')); ?>
        <?php echo $form->error($model,'id_rubro'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_categoria'); ?>
        <?php echo $form->dropDownList($model,'id_categoria', CHtml::listData(TabCategorias::model()->findAll(),'id_categoria','descrip_categoria'),array('style' => 'width:240px;font-style: italic;font-size:10px;')); ?>
        <?php echo $form->error($model,'id_categoria'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_unidad_funcional'); ?>
        <?php echo $form->dropDownList($model,'id_unidad_funcional', CHtml::listData(TabUnidadFuncional::model()->findAll(),'id_unidad_funcional','descrip_unidad_funcional'),array('style' => 'width:240px;font-style: italic;font-size:10px;')); ?>
        <?php echo $form->error($model,'id_unidad_funcional'); ?>
    </div>
	
    <div class="row">
        <?php echo $form->labelEx($model,'id_entidad_legal'); ?>
        <?php echo $form->dropDownList($model,'id_entidad_legal', CHtml::listData(VistasReales::model()->findAllBySql("SELECT DISTINCT a.id_entidad_legal, a.descrip_entidad_legal AS entidad_legal
            FROM tab_entidad_legal a
            JOIN vistas_reales b
            ON a.descrip_entidad_legal = b.entidad_legal
            OR a.id_entidad_legal=0
            ORDER BY a.descrip_entidad_legal"),'id_entidad_legal','entidad_legal'),array('style' => 'width:240px;font-style: italic;font-size:10px;')); ?>
        <?php echo $form->error($model,'id_entidad_legal'); ?>
    </div>
	
    <div class="row">
        <?php echo $form->labelEx($model,'nb_rubro'); ?>
        <?php echo $form->textField($model,'nb_rubro',array('size'=>37,'maxlength'=>37)); ?>
        <?php echo $form->error($model,'nb_rubro'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'nb_unidad_funcional'); ?>
        <?php echo $form->textField($model,'nb_unidad_funcional',array('size'=>37,'maxlength'=>37)); ?>
        <?php echo $form->error($model,'nb_unidad_funcional'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'estado'); ?>
        <?php //echo $form->textField($model,'estado'); ?>
        <?php echo $form->dropDownList($model, 'estado', array('HABILITADO' => 'HABILITADO', 'DESACTIVADO' => 'DESACTIVADO'),array('empty' => 'Seleccione','style' => 'width:240px;font-style: italic;font-size:10px;')); ?>
        <?php echo $form->error($model,'estado'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'signo'); ?>
        <?php echo $form->dropDownList($model,'signo', array('+' => '+', '-' => '-'),array('empty' => 'Seleccione','style' => 'width:240px;font-style: italic;font-size:10px;')); ?>
        <?php echo $form->error($model,'signo'); ?>
    </div>

    <!--
    <div class="row">
        <?php echo $form->labelEx($model,'in_stat'); ?>
        <?php echo $form->textField($model,'in_stat'); ?>
        <?php echo $form->error($model,'in_stat'); ?>
    </div>
    
    
    <div class="row">
        <?php echo $form->labelEx($model,'usr_crea'); ?>
        <?php echo $form->textField($model,'usr_crea'); ?>
        <?php echo $form->error($model,'usr_crea'); ?>
    </div>
    
    
    <div class="row">
        <?php echo $form->labelEx($model,'fe_crea'); ?>
        <?php echo $form->textField($model,'fe_crea'); ?>
        <?php echo $form->error($model,'fe_crea'); ?>
    </div>
    
    
    <div class="row">
        <?php echo $form->labelEx($model,'usr_modf'); ?>
        <?php echo $form->textField($model,'usr_modf'); ?>
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

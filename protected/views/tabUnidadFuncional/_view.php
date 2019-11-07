<?php
/* @var $this TabUnidadFuncionalController */
/* @var $data TabUnidadFuncional */
?>

<div class="view">
    <!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unidad_funcional')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_unidad_funcional), array('view', 'id'=>$data->id_unidad_funcional)); ?>
	<br />
    -->
	<b><?php echo CHtml::encode($data->getAttributeLabel('descrip_unidad_funcional')); ?>:</b>
	<?php echo CHtml::encode($data->descrip_unidad_funcional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acronimo')); ?>:</b>
	<?php echo CHtml::encode($data->acronimo); ?>
	<br />


</div>
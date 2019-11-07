<?php
/* @var $this TabTipoIngresoController */
/* @var $data TabTipoIngreso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_ingreso')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tipo_ingreso), array('view', 'id'=>$data->id_tipo_ingreso)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_ingreso); ?>
	<br />


</div>
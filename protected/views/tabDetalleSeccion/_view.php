<?php
/* @var $this TabDetalleSeccionController */
/* @var $data TabDetalleSeccion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_detalle')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_detalle), array('view', 'id'=>$data->id_detalle)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_seccion')); ?>:</b>
	<?php echo CHtml::encode($data->id_seccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />


</div>
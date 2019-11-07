<?php
/* @var $this TabGraficoController */
/* @var $data TabGrafico */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_grafico')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_grafico), array('view', 'id'=>$data->id_grafico)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_detalle')); ?>:</b>
	<?php echo CHtml::encode($data->id_detalle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descrip_grafico')); ?>:</b>
	<?php echo CHtml::encode($data->descrip_grafico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('byte')); ?>:</b>
	<?php echo CHtml::encode($data->byte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext')); ?>:</b>
	<?php echo CHtml::encode($data->ext); ?>
	<br />


</div>
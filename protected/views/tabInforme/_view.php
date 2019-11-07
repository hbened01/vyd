<?php
/* @var $this TabInformeController */
/* @var $data TabInforme */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_informe')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_informe), array('view', 'id'=>$data->id_informe)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_informe')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_informe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usr')); ?>:</b>
	<?php echo CHtml::encode($data->id_usr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_status')); ?>:</b>
	<?php echo CHtml::encode($data->id_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtitulo1')); ?>:</b>
	<?php echo CHtml::encode($data->subtitulo1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtitulo2')); ?>:</b>
	<?php echo CHtml::encode($data->subtitulo2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	*/ ?>

</div>
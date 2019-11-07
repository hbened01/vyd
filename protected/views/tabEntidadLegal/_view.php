<?php
/* @var $this TabEntidadLegalController */
/* @var $data TabEntidadLegal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_entidad_legal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_entidad_legal), array('view', 'id'=>$data->id_entidad_legal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descrip_entidad_legal')); ?>:</b>
	<?php echo CHtml::encode($data->descrip_entidad_legal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('in_stat')); ?>:</b>
	<?php echo CHtml::encode($data->in_stat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usr_crea')); ?>:</b>
	<?php echo CHtml::encode($data->usr_crea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_crea')); ?>:</b>
	<?php echo CHtml::encode($data->fe_crea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usr_modf')); ?>:</b>
	<?php echo CHtml::encode($data->usr_modf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_modf')); ?>:</b>
	<?php echo CHtml::encode($data->fe_modf); ?>
	<br />


</div>
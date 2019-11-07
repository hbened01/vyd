<?php
/* @var $this TabMovilnetClientesController */
/* @var $data TabMovilnetClientes */
?>

<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id_mov_cli')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_mov_cli), array('view', 'id'=>$data->id_mov_cli)); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anio')); ?>:</b>
	<?php echo CHtml::encode($data->anio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mes')); ?>:</b>
	<?php echo CHtml::encode($data->mes0->descrip_mes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_cuenta')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_cuenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plan')); ?>:</b>
	<?php echo CHtml::encode($data->plan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
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

	*/ ?>

</div>
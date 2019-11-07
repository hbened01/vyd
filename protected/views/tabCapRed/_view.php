<?php
/* @var $this TabCapRedController */
/* @var $data TabCapRed */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cap_red')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cap_red), array('view', 'id'=>$data->id_cap_red)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distrito')); ?>:</b>
	<?php echo CHtml::encode($data->distrito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('central')); ?>:</b>
	<?php echo CHtml::encode($data->central); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_central')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_central); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serial')); ?>:</b>
	<?php echo CHtml::encode($data->serial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria')); ?>:</b>
	<?php echo CHtml::encode($data->categoria); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('total_numeros_con_normativa')); ?>:</b>
	<?php echo CHtml::encode($data->total_numeros_con_normativa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_numeros_libres_con_normativa')); ?>:</b>
	<?php echo CHtml::encode($data->total_numeros_libres_con_normativa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_numeros_trabajados_asignados')); ?>:</b>
	<?php echo CHtml::encode($data->total_numeros_trabajados_asignados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numeros_en_investigacion')); ?>:</b>
	<?php echo CHtml::encode($data->numeros_en_investigacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_asociado_a_pares')); ?>:</b>
	<?php echo CHtml::encode($data->no_asociado_a_pares); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pendiente_por_instalacion')); ?>:</b>
	<?php echo CHtml::encode($data->pendiente_por_instalacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pendiente_por_retirar')); ?>:</b>
	<?php echo CHtml::encode($data->pendiente_por_retirar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pendiente_por_transferencia')); ?>:</b>
	<?php echo CHtml::encode($data->pendiente_por_transferencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ocupados')); ?>:</b>
	<?php echo CHtml::encode($data->ocupados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pendiente_por_liberar')); ?>:</b>
	<?php echo CHtml::encode($data->pendiente_por_liberar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('número_ocupado_abonado_inactivo')); ?>:</b>
	<?php echo CHtml::encode($data->número_ocupado_abonado_inactivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_asociado_a_central')); ?>:</b>
	<?php echo CHtml::encode($data->no_asociado_a_central); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_asociado_a_red_local')); ?>:</b>
	<?php echo CHtml::encode($data->no_asociado_a_red_local); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pendiente_por_mudanza')); ?>:</b>
	<?php echo CHtml::encode($data->pendiente_por_mudanza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modernizado')); ?>:</b>
	<?php echo CHtml::encode($data->modernizado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desincorporado')); ?>:</b>
	<?php echo CHtml::encode($data->desincorporado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pendiente_por_ubicacion')); ?>:</b>
	<?php echo CHtml::encode($data->pendiente_por_ubicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reubicado')); ?>:</b>
	<?php echo CHtml::encode($data->reubicado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('restriccion_tecnica')); ?>:</b>
	<?php echo CHtml::encode($data->restriccion_tecnica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capacidad_de_la_central')); ?>:</b>
	<?php echo CHtml::encode($data->capacidad_de_la_central); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_procedimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_procedimiento); ?>
	<br />

	*/ ?>

</div>
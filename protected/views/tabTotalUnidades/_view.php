<?php
/* @var $this TabTotalUnidadesController */
/* @var $data TabTotalUnidades */
?>

<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id_tot_unid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tot_unid), array('view', 'id'=>$data->id_tot_unid)); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('anio')); ?>:</b>
	<?php echo CHtml::encode($data->anio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mes')); ?>:</b>
	<?php echo CHtml::encode($data->idMes->descrip_mes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_total')); ?>:</b>
	<?php echo CHtml::encode($data->idTotal->descrip_total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria')); ?>:</b>
	<?php echo CHtml::encode($data->idCategoria->descrip_categoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unidad_funcional')); ?>:</b>
	<?php echo CHtml::encode($data->idUnidadFuncional->descrip_unidad_funcional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->idTipoIngreso->descripcion_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />

	<?php /*

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
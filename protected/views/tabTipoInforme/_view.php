<?php
/* @var $this TabTipoInformeController */
/* @var $data TabTipoInforme */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_informe')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tipo_informe), array('view', 'id'=>$data->id_tipo_informe)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descrip_informe')); ?>:</b>
	<?php echo CHtml::encode($data->descrip_informe); ?>
	<br />


</div>
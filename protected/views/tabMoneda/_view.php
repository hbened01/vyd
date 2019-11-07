<?php
/* @var $this TabMonedaController */
/* @var $data TabMoneda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_moneda')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_moneda), array('view', 'id'=>$data->id_moneda)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_moneda')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_moneda); ?>
	<br />


</div>
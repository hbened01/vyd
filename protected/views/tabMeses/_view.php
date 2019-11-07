<?php
/* @var $this TabMesesController */
/* @var $data TabMeses */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mes')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_mes), array('view', 'id'=>$data->id_mes)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descrip_mes')); ?>:</b>
	<?php echo CHtml::encode($data->descrip_mes); ?>
	<br />


</div>
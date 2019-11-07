<?php
/* @var $this TabStatusController */
/* @var $data TabStatus */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_status')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_status), array('view', 'id'=>$data->id_status)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descrip_status')); ?>:</b>
	<?php echo CHtml::encode($data->descrip_status); ?>
	<br />


</div>
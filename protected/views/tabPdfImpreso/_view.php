<?php
/* @var $this TabPdfImpresoController */
/* @var $data TabPdfImpreso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_informe')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_informe), array('view', 'id'=>$data->id_informe)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descrip_pdf')); ?>:</b>
	<?php echo CHtml::encode($data->descrip_pdf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('byte')); ?>:</b>
	<?php echo CHtml::encode($data->byte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext')); ?>:</b>
	<?php echo CHtml::encode($data->ext); ?>
	<br />


</div>
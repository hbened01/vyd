<?php
/* @var $this TabRutaImgController */
/* @var $data TabRutaImg */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ruta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ruta), array('view', 'id'=>$data->id_ruta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_seccion')); ?>:</b>
	<?php echo CHtml::encode($data->id_seccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruta_img')); ?>:</b>
	<?php echo CHtml::encode($data->ruta_img); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descrip_img')); ?>:</b>
	<?php echo CHtml::encode($data->descrip_img); ?>
	<br />


</div>
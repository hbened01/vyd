<?php
/* @var $this TabTipoSeccionController */
/* @var $data TabTipoSeccion */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_seccion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_seccion), array('view', 'id'=>$data->id_seccion)); ?>
	<br />
	-->
	<b><?php echo CHtml::encode($data->getAttributeLabel('descrip_seccion')); ?>:</b>
	<?php echo CHtml::encode($data->descrip_seccion); ?>
	<br />
    <!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_id_seccion')); ?>:</b>
	<?php echo CHtml::encode($data->parent_id_seccion); ?>
	<br />
    -->


</div>
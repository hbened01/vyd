<?php
/* @var $this TabRubrosController */
/* @var $data TabRubros */
?>

<div class="view">

    <!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rubro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_rubro), array('view', 'id'=>$data->id_rubro)); ?>
	<br />
    -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('descrip_rubro')); ?>:</b>
	<?php echo CHtml::encode($data->descrip_rubro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria')); ?>:</b>
	<?php echo CHtml::encode($data->idCategoria->descrip_categoria); ?>
	<br />


</div>
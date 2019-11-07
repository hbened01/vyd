<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'id_informe'=>$data->id_informe, 'id_detalle'=>$data->id_detalle)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_informe')); ?>:</b>
	<?php echo CHtml::encode($data->id_informe); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_detalle')); ?>:</b>
	<?php echo CHtml::encode($data->id_detalle); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?><br />
</div>

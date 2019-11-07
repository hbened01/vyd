<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'id_tipo_informe'=>$data->id_tipo_informe, 'id_seccion'=>$data->id_seccion)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_informe')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_informe); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_seccion')); ?>:</b>
	<?php echo CHtml::encode($data->id_seccion); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?><br />
</div>

<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'id_rubro'=>$data->id_rubro, 'id_unidad_funcional'=>$data->id_unidad_funcional, 'id_categoria'=>$data->id_categoria, 'registration_year'=>$data->registration_year, 'id_mes'=>$data->id_mes, 'id_tipo_ingreso'=>$data->id_tipo_ingreso, 'id_moneda'=>$data->id_moneda)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_rubro')); ?>:</b>
	<?php echo CHtml::encode($data->idRubro->descrip_rubro); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_unidad_funcional')); ?>:</b>
	<?php echo CHtml::encode($data->idUnidadFuncional->descrip_unidad_funcional); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria')); ?>:</b>
	<?php echo CHtml::encode($data->idCategoria->descrip_categoria); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('registration_year')); ?>:</b>
	<?php echo CHtml::encode($data->registration_year); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_mes')); ?>:</b>
	<?php echo CHtml::encode($data->idMes->descrip_mes); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->idTipoIngreso->descripcion_ingreso); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_moneda')); ?>:</b>
	<?php echo CHtml::encode($data->idMoneda->descripcion_moneda); ?><br />
</div>

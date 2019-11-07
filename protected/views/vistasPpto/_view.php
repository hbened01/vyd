<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
    <b>
    <?php echo CHtml::link(">> ", array('view', 
    'anio'=>$data->anio, 'rubro'=>$data->rubro, 'entidad_legal'=>$data->entidad_legal, 'segmento'=>$data->segmento, 'monto'=>$data->monto, 'id_mes'=>$data->id_mes)); ?><br/></b>
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('rubro')); ?>:</b>
    <?php echo CHtml::encode($data->rubro); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('unidad_negocio')); ?>:</b>
    <?php echo CHtml::encode($data->unidad_negocio); ?><br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('entidad_legal')); ?>:</b>
    <?php echo CHtml::encode($data->entidad_legal); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('anio')); ?>:</b>
    <?php echo CHtml::encode($data->anio); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_mes')); ?>:</b>
    <?php echo CHtml::encode($data->idMes->descrip_mes); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('monto')); ?>:</b>
	<?php echo CHtml::encode($data->monto); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_ingreso')); ?>:</b>
    <?php echo CHtml::encode($data->idTipoIngreso->descripcion_ingreso); ?><br />
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_moneda')); ?>:</b>
	<?php echo CHtml::encode($data->idMoneda->descripcion_moneda); ?><br />
	
    <!--
    <b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
    <?php echo CHtml::encode($data->fecha); ?><br />
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('segmento')); ?>:</b>
    <?php echo CHtml::encode($data->segmento); ?><br />
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria')); ?>:</b>
    <?php echo CHtml::encode($data->id_categoria); ?><br />
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_unidad_funcional')); ?>:</b>
    <?php echo CHtml::encode($data->id_unidad_funcional); ?><br />
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_voz_datos_ppto')); ?>:</b>
    <?php echo CHtml::encode($data->id_voz_datos_ppto); ?><br />
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('signo')); ?>:</b>
    <?php echo CHtml::encode($data->signo); ?><br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('in_stat')); ?>:</b>
    <?php echo CHtml::encode($data->in_stat); ?><br />
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('usr_crea')); ?>:</b>
    <?php echo CHtml::encode($data->usr_crea); ?><br />
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('fe_crea')); ?>:</b>
    <?php echo CHtml::encode($data->fe_crea); ?><br />
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('usr_modf')); ?>:</b>
    <?php echo CHtml::encode($data->usr_modf); ?><br />
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('fe_modf')); ?>:</b>
    <?php echo CHtml::encode($data->fe_modf); ?><br />
	-->
    
</div>

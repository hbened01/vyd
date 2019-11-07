<?php
/* @var $this TabCategoriasController */
/* @var $data TabCategorias */
?>

<div class="view">

    <!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_categoria), array('view', 'id'=>$data->id_categoria)); ?>
	<br />
    -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('descrip_categoria')); ?>:</b>
	<?php echo CHtml::encode($data->descrip_categoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_padre_cat')); ?>:</b>
	<?php echo CHtml::encode($data->idPadreCat->descrip_categoria); ?>
	<br />


</div>
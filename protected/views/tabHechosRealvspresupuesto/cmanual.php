<!-- PROCESO DE CARGA POR LOTES Y CORRIDA DE LOS KJB Y KTR-->
<?php $this->setPageTitle('carga manual de insumos'); ?>
<?php $this->layout='column1'; ?>  <!-- Para elegir layout a utilizar -->
<div>
<div>
<br>
<br>
<h1><CENTER><font SIZE="+0.5">PROCESO DE CARGA MANUAL DE LOS INSUMOS E INGRESOS <br> TANTO REALES COMO PRESUPUESTADOS.</font></CENTER></h1>
<br>
<br>
<br>
<!--<?php //echo $this->actionShell();?> PRUEBA EN PANTALLA DE SALIDA DEL SHELL-->
<!-- &nbsp -> se utilizo para hacer tabulación --> 
</div>

<div class="row">

<h1>1) <u><b><i>Carga de insumos reales:</i></b></u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo CHtml::submitButton('Correr proceso', array('submit'=>array('TabHechosRealvspresupuesto/shell_1'),'confirm'=>'¿Está seguro que desea realizar la carga manual del insumo #1?')); ?></h1>
    
</div>

<br>
<br>

<div class="row">

<h1>2) <u><b><i>Carga de insumos presupuestados:</i></b></u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<!--</h1><h1 align="CENTER">--><?php echo CHtml::submitButton('Correr proceso', array('submit'=>array('TabHechosRealvspresupuesto/shell_2'),'confirm'=>'¿Está seguro que desea realizar la carga manual del insumo #2?')); ?></h1>
    
</div>

<br>
<br>

<div class="row">

<h1>3) <u><b><i>Carga de insumos provenientes de movilnet:</i></b></u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo CHtml::submitButton('Correr proceso', array('submit'=>array('TabHechosRealvspresupuesto/shell_3'),'confirm'=>'¿Está seguro que desea realizar la carga manual del insumo #3?')); ?></h1>
    
</div>

<br>
<br>

<div class="row">

<h1>4) <u><b><i>Carga de insumos provenientes de Certus Estadísticas y Certus Estado Resultados:</i></b></u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo CHtml::submitButton('Correr proceso', array('submit'=>array('TabHechosRealvspresupuesto/shell_3'),'confirm'=>'¿Está seguro que desea realizar la carga manual del insumo #4?')); ?></h1>
    
</div>

<br>
<br>
<br>

<div class="row">

<h1><img src="<?php echo Yii::app()->baseUrl; ?>/images/big_icons/icon-bulb.png" width="50px" height="50px" style="margin: 0px 0px -3px 0px;"><u><b><i>Nota de interés:</i></b></u>&nbsp Para más información acerca del estatus y éxito de la carga manual dirigirse al correo de la aplicación.</h1>
    
</div>
</div>
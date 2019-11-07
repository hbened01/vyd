<h1><?php echo $saludo;?></h1>
<!--
<div>
<?php
//exec("sh /var/www/vyd/run.sh");
?>
<button type="button" onclick="sh /var/www/vyd/run.sh">Click Me!</button>

<?php
     /*if  ( isset ( $_POST [ 'button' ])) 
    { 
         exec ("sh /var/www/vyd/run.sh"); 
    } 
?> 
<html> 
<body> 
    <form  method = "post" > 
    <p> 
        <button  name = "button" onclick="sh /var/www/vyd/run.sh"> Run Perl </button> 
    </p> 
    </form> 
</body>


<? php if  ( isset ( $_POST [ 'button' ]))  {  shell_exec ('sh /var/www/vyd/run.sh');  }  ?> 
<form  action = ""  method = "post" > 
    <button  type = "submit"  name = "button" > bash </button> 
</form>

<input class="buttonClass" id="buttonId" name="yt1" type="button" value="myButton">
<?php echo CHtml::beginForm();  ?>

<?php echo shell_exec("sh /opt/data-integration-5/spoon.sh"); */?>

</div>
-->

<!-- ---------------------------------------------------------------------------------------------------------------------- -->

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/funciones_js/tabHechosRealvspresupuesto.js"></script>

<!-- ---------------------------------------------------------------------------------------------------------------------- -->


<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
    'id'=>'mydialog',
    // additional javascript options for the dialog plugin
    'options'=>array(
        'title'=>'Dialog box 1',
        'autoOpen'=>false,
    ),
));

    echo 'esto es una prueba';

$this->endWidget('zii.widgets.jui.CJuiDialog');
?>

<?php
echo CHtml::link('open dialog', '#', array(
   'onclick'=>'$("#mydialog").dialog("open"); return false;',
));

echo "<script>alert('message');</script>";
?>

<script type="text/javascript">javascript:prueba1();</script>
<script type="text/javascript">   
            alert('Category Can not be deleted as there is already liquor is assigned for particular liquor category.');   
</script>

<html>
<head>
<script type="text/javascript">function prueba1(){  //Agrega en BD la Informacion de Organismo de Forma Operativa
            $("#mydialog").dialog("open"); return false;
                //alert ('*****El Campo Organismo no puede quedar en Blanco*****');     
    }</script>
<script languaje="javascript">
//function funcion_javascript(){
   //alert ("Esto es javascript");
}
</script>
</head>
<body>
<?
if ($variable=="valor"){
?>
<script languaje="javascript">
funcion_javascript();
</script>

<script languaje="javascript">
prueba1();
$("#mydialog").dialog("open"); return false;
//$(document).ready(function(){echo CHtml::script('$("#mydialog").dialog("open")');
});
</script>

<script type="text/javascript">
document.write(nombre+' esta aprobado con un '+nota);

js:prueba1();

$("#mydialog").dialog("open"); return false;
//$(document).ready(function(){echo CHtml::script('$("#mydialog").dialog("open")');</script>
<?
}
?>
</body>
</html>

<?php 
//Yii::app()->clientScript->registerCoreScript("prueba1");
//echo CHtml::script('$("#mydialog").dialog("open")');

?>


<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'vistas de ingresos pptos vs reales',
);

$this->menu=array(
    /*
	array('label'=>'Crear registros', 'url'=>array('create')),
    */
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<!--<?php //echo Yii::t('app','Name') ;  ?> PARA PASAR MENSAJES DESDE LA CARPETA DE PROTECTED/MESSAGES--> 
<br>
<h1>Reales vs Presupuestados</h1>
<br>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

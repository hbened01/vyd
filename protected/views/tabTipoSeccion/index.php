<?php
/* @var $this TabTipoSeccionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'tipos de sección',
);

$this->menu=array(
	array('label'=>'Crear registro', 'url'=>array('create')),
	array('label'=>'Vistas de datos', 'url'=>array('admin')),
);
?>

<!--<?php //echo Yii::t('app','Name') ;  ?> PARA PASAR MENSAJES DESDE LA CARPETA DE PROTECTED/MESSAGES--> 
<br>
<h1>Tipos de sección</h1>
<br>

<div align="left" class="row">
<?php
    $this->widget('ext.PageSize.EPageSize', array(
    'listViewId' => 'tab-tipo-seccion-grid',
    'beforeLabel' => 'Registros por pantalla: ',
    'pageSize' => Yii::app()->request->getParam('pageSize',null),
    'defaultPageSize' => 10 , // may use this :  Yii::app()->params['defaultPageSize'],
    'pageSizeOptions'=> array(5=>5, 10=>10, 15=>15, 25=>25, 50=>50, 75=>75, 100=>100), // you can config it in main.php under the config dir . Yii::app()->params['pageSizeOptions'],// Optional, you can use with the widget default
    ));
    ?>
<?php
$dataProvider = $model->search();
$pageSize = Yii::app()->user->getState('pageSize',10/*Yii::app()->params['defaultPageSize']*/);
$dataProvider->getPagination()->setPageSize($pageSize);
?>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'id'=>'tab-tipo-seccion-grid',
)); ?>
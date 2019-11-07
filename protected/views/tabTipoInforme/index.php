<?php
/* @var $this TabTipoInformeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tab Tipo Informes',
);

$this->menu=array(
	array('label'=>'Create TabTipoInforme', 'url'=>array('create')),
	array('label'=>'Manage TabTipoInforme', 'url'=>array('admin')),
);
?>
<br>
<h1>Tab Tipo Informes</h1>
<br>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

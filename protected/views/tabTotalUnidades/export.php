<div class="init">
<?php $dataProvider=$_SESSION['unidades_records']->getData(); ?>
</div>
<table>
<tr>
<th style="background-color: #555; color:#fff"><?php echo utf8_decode('año')?></th>
<th style="background-color: #555; color:#fff">mes</th>
<th style="background-color: #555; color:#fff">total</th>
<th style="background-color: #555; color:#fff">categoria</th>
<th style="background-color: #555; color:#fff">unidad funcional</th>
<th style="background-color: #555; color:#fff">tipo de ingreso</th>
<th style="background-color: #555; color:#fff">total</th>
</tr>
<?php foreach($dataProvider as $data) : ?>
<tr>
<td align="center"><?php echo utf8_decode($data->anio)?> </td>
<td align="center"><?php echo utf8_decode($data->idMes->descrip_mes)?> </td>
<td align="center"><?php echo utf8_decode($data->idTotal->descrip_total)?> </td>
<td align="center"><?php echo utf8_decode($data->idCategoria->descrip_categoria)?> </td>
<td align="center"><?php echo utf8_decode($data->idUnidadFuncional->descrip_unidad_funcional)?> </td>
<td align="center"><?php echo utf8_decode($data->idTipoIngreso->descripcion_ingreso)?> </td>
<td align="right"><?php echo utf8_decode($data->total)?> </td>
</tr>
<?php endforeach ; ?>
</table>
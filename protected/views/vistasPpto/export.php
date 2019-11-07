<div class="init">
<?php $dataProvider=$_SESSION['ppto_records']->getData(); ?>
</div>
<table>
<tr>
<th style="background-color: #555; color:#fff">rubro</th>
<th style="background-color: #555; color:#fff">unidad de negocio</th>
<th style="background-color: #555; color:#fff">entidad legal</th>
<th style="background-color: #555; color:#fff"><?php echo utf8_decode('año')?></th>
<th style="background-color: #555; color:#fff">mes</th>
<th style="background-color: #555; color:#fff">total</th>
<th style="background-color: #555; color:#fff">tipo de ingreso</th>
<th style="background-color: #555; color:#fff">tipo de moneda</th>
</tr>
<?php foreach($dataProvider as $data) : ?>
<tr>
<td align="center"><?php echo utf8_decode($data->rubro)?> </td>
<td align="center"><?php echo utf8_decode($data->unidad_negocio)?> </td>
<td align="center"><?php echo utf8_decode($data->entidad_legal)?> </td>
<td align="center"><?php echo utf8_decode($data->anio)?> </td>
<td align="center"><?php echo utf8_decode($data->idMes->descrip_mes)?> </td>
<td align="right"><?php echo utf8_decode($data->monto)?> </td>
<td align="center"><?php echo utf8_decode($data->idTipoIngreso->descripcion_ingreso)?> </td>
<td align="center"><?php echo utf8_decode($data->idMoneda->descripcion_moneda) ?> </td>
</tr>
<?php endforeach ; ?>
</table>
<div class="init">
<?php $dataProvider=$_SESSION['estado_records']->getData(); ?>
</div>
<table>
<tr>
<th style="background-color: #555; color:#fff">fecha</th>
<th style="background-color: #555; color:#fff"><?php echo utf8_decode('año')?></th>
<th style="background-color: #555; color:#fff">mes</th>
<th style="background-color: #555; color:#fff">rubro</th>
<th style="background-color: #555; color:#fff">entidad legal</th>
<th style="background-color: #555; color:#fff">unidad de negocio</th>
<th style="background-color: #555; color:#fff">tipo de ingreso</th>
<th style="background-color: #555; color:#fff"><?php echo utf8_decode('método')?></th>
<th style="background-color: #555; color:#fff">segmento</th>
<th style="background-color: #555; color:#fff">monto</th>
</tr>
<?php foreach($dataProvider as $data) : ?>
<tr>
<td align="center"><?php echo utf8_decode($data->fecha)?> </td>
<td align="center"><?php echo utf8_decode($data->anio)?> </td>
<td align="center"><?php echo utf8_decode($data->mes)?> </td>
<td align="center"><?php echo utf8_decode($data->rubro)?> </td>
<td align="center"><?php echo utf8_decode($data->entidad_legal)?> </td>
<td align="center"><?php echo utf8_decode($data->unidad_negocio)?> </td>
<td align="center"><?php echo utf8_decode($data->escenario)?> </td>
<td align="center"><?php echo utf8_decode($data->metodo)?> </td>
<td align="center"><?php echo utf8_decode($data->segmento)?> </td>
<td align="right"><?php echo utf8_decode($data->monto)?> </td>
</tr>
<?php endforeach ; ?>
</table>
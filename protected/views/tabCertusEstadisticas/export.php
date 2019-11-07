<div class="init">
<?php $dataProvider=$_SESSION['estadisticas_records']->getData(); ?>
</div>
<table>
<tr>
<th style="background-color: #555; color:#fff">fecha</th>
<th style="background-color: #555; color:#fff">producto</th>
<th style="background-color: #555; color:#fff">servicio</th>
<th style="background-color: #555; color:#fff">tipo de ingreso</th>
<th style="background-color: #555; color:#fff">entidad legal</th>
<th style="background-color: #555; color:#fff">unidad de negocio</th>
<th style="background-color: #555; color:#fff">segmento</th>
<th style="background-color: #555; color:#fff">monto</th>
</tr>
<?php foreach($dataProvider as $data) : ?>
<tr>
<td align="center"><?php echo utf8_decode($data->fecha)?> </td>
<td align="center"><?php echo utf8_decode($data->producto)?> </td>
<td align="center"><?php echo utf8_decode($data->servicio)?> </td>
<td align="center"><?php echo utf8_decode($data->escenario)?> </td>
<td align="center"><?php echo utf8_decode($data->entidad_legal)?> </td>
<td align="center"><?php echo utf8_decode($data->unidad_negocio)?> </td>
<td align="center"><?php echo utf8_decode($data->segmento)?> </td>
<td align="right"><?php echo utf8_decode($data->monto)?> </td>
</tr>
<?php endforeach ; ?>
</table>
<div class="init">
<?php $dataProvider=$_SESSION['activaciones_records']->getData(); ?>
</div>
<table>
<tr>
<th style="background-color: #555; color:#fff">fecha</th>
<th style="background-color: #555; color:#fff"><?php echo utf8_decode('año')?></th>
<th style="background-color: #555; color:#fff">mes</th>
<th style="background-color: #555; color:#fff">tipo de cliente</th>
<th style="background-color: #555; color:#fff">tipo de cuenta</th>
<th style="background-color: #555; color:#fff">plan</th>
<th style="background-color: #555; color:#fff">cantidad</th>
</tr>
<?php foreach($dataProvider as $data) : ?>
<tr>
<td align="center"><?php echo utf8_decode($data->fecha)?> </td>
<td align="center"><?php echo utf8_decode($data->anio)?> </td>
<td align="center"><?php echo utf8_decode($data->mes0->descrip_mes)?> </td>
<td align="center"><?php echo utf8_decode($data->tipo_cliente)?> </td>
<td align="center"><?php echo utf8_decode($data->tipo_cuenta)?> </td>
<td align="center"><?php echo utf8_decode($data->plan)?> </td>
<td align="right"><?php echo utf8_decode($data->cantidad)?> </td>
</tr>
<?php endforeach ; ?>
</table>
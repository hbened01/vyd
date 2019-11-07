<div class="init">
<?php $dataProvider=$_SESSION['hecho_records']->getData(); ?>
</div>
<table>
<tr>
<th style="background-color: #555; color:#fff">rubro</th>
<th style="background-color: #555; color:#fff">unidad funcional</th>
<th style="background-color: #555; color:#fff"><?php echo utf8_decode('categoría')?></th>
<th style="background-color: #555; color:#fff"><?php echo utf8_decode('año')?></th>
<th style="background-color: #555; color:#fff">mes</th>
<th style="background-color: #555; color:#fff">total</th>
<th style="background-color: #555; color:#fff">tipo de ingreso</th>
<th style="background-color: #555; color:#fff">tipo de moneda</th>
</tr>
<?php foreach($dataProvider as $data) : ?>
<tr>
<td align="center"><?php echo utf8_decode($data->idRubro->descrip_rubro)?> </td>
<td align="center"><?php echo utf8_decode($data->idUnidadFuncional->descrip_unidad_funcional)?> </td>
<td align="center"><?php echo utf8_decode($data->idCategoria->descrip_categoria)?> </td>
<td align="center"><?php echo utf8_decode($data->registration_year)?> </td>
<td align="center"><?php echo utf8_decode($data->idMes->descrip_mes)?> </td>
<td align="right"><?php echo utf8_decode($data->valor)?> </td>
<td align="center"><?php echo utf8_decode($data->idTipoIngreso->descripcion_ingreso)?> </td>
<td align="center"><?php echo utf8_decode($data->idMoneda->descripcion_moneda) ?> </td>
</tr>
<?php endforeach ; ?>
</table>
<html>
<head>
</head>
<body>
  <mpdf
  <htmlpageheader name="myheader">
  <table width="100%"><tr>
    <td width="50%">Prueba para blog de Yises.com</td>
    <td width="50%" style="text-align: right;"><b>Prueba</b></td>
  </tr></table>
  </htmlpageheader>

  <htmlpagefooter name="myfooter">
    <div style="border-top: 1px solid #000000;text-align: center;">
      Página {PAGENO} de {nb}
    </div>
  </htmlpagefooter>

  <sethtmlpageheader name="myheader" value="on" show-this-page="1" />
  <sethtmlpagefooter name="myfooter" value="on" />
  mpdf>
  <div style="text-align: right">Lo que sea que se quiera poner</div>
</body>
</html>
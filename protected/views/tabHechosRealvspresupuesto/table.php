<div>
    <?php $this->layout='column1'; ?>
    <?php 

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/DataTables-1.10.1/media/js/jquery.js');

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/DataTables-1.10.1/media/js/jquery.dataTables.js');

        Yii :: app ()-> clientScript -> registerCssFile ( Yii :: app ()-> baseUrl . '/js/DataTables-1.10.1/media/css/jquery.dataTables.css');

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/DataTables-1.10.1/examples/resources/syntax/shCore.js');

        Yii :: app ()-> clientScript -> registerCssFile ( Yii :: app ()-> baseUrl . '/js/DataTables-1.10.1/examples/resources/syntax/shCore.css');

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/DataTables-1.10.1/extensions/TableTools/js/dataTables.tableTools.js');

        Yii :: app ()-> clientScript -> registerCssFile ( Yii :: app ()-> baseUrl . '/js/DataTables-1.10.1/extensions/TableTools/css/dataTables.tableTools.css');

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/DataTables-1.10.1/examples/resources/demo.js');

        Yii :: app ()-> clientScript -> registerCssFile ( Yii :: app ()-> baseUrl . '/js/DataTables-1.10.1/examples/resources/demo.css');
    ?>

    <style type="text/css" class="init">
    
            .datatable caption{
                font: bold 0.9em Arial, Helvetica, sans-serif;
                color: #33517A;
                text-align: left;
                padding-top: 3px;
                padding-bottom: 8px;
            }

            th, td{
                font: .8em Arial, Helvetica, sans-serif;
            }
 
            .datatable{
                border: 1px solid #D6DDE6;
                border-collapse: collapse;
                width: 80%;
            }
 
            .datatable td{
                border: 1px solid #D6DDE6;
                padding: 4px;
            }
 
            .datatable th{
                border: 1px solid #828282;
                background-color: #BCBCBC;
                font-weight: bold;
                text-align: left;
                padding-left: 4px;
            }

            div.dataTables_length {
                padding-left: 2em;
            }

            div.dataTables_length,
            div.dataTables_filter {
            padding-top: 0.55em;
            }

            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
            width: 900px;
            margin: 10 auto;
            }

    </style>
   
    </div>
    <script type="text/javascript" language="javascript" class="init">

        // script para configurar las tablas POR DATATABLE.

        $.extend( $.fn.dataTable.defaults, {
                "searching":    true,
                "ordering":     true,
                "paging":       true,
                "info":         true,
                "bScrollInfinite": true,
                "bScrollCollapse": true,
                "scrollX":      true
                //"scrollY":      200,
                
        } );

        $(document).ready(function(){
        $('table.display').dataTable( {
                "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                            }
                            },
                "lengthMenu": [[3, 6, 9, -1], [3, 6, 9, "todos los"]],
                "pagingType": "full_numbers"
        } );
        });
    </script>

    <div class="container">

    <?php
   //$Json = $this->actionConsulta(); 
   $Json = TabHechosRealvspresupuesto::model()->Consulta();
   $Json = json_decode($Json,true);
    ?>
          <br>
          <br>

          <h1><CENTER><font SIZE="+2">Total de ingresos individuales</font></CENTER></h1>

          <br>
          <br>
          <section>

    <table id="hola" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th><center>Rubro</center></th>
            <th><center>Unidad funcional</center></th>
            <th><center>Categoria</center></th>
            <th><center>Año</center></th> 
            <th><center>Mes</center></th>
            <th><center>Monto</center></th>
            <th><center>Tipo de ingreso</center></th>
            <th><center>Moneda</center></th>                         
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th><center>Rubro</center></th>
            <th><center>Unidad funcional</center></th>
            <th><center>Categoria</center></th>
            <th><center>Año</center></th> 
            <th><center>Mes</center></th>
            <th><center>Monto</center></th>
            <th><center>Tipo de ingreso</center></th>
            <th><center>Moneda</center></th>                
        </tr>
    </tfoot>
    <tbody>
    <?php foreach ($Json as $key => $value): ?>
        <tr>
            <td><center><?php print_r($value['descrip_rubro']); ?></center></td>
            <td><center><?php print_r($value['descrip_unidad_funcional']); ?></center></td>
            <td><center><?php print_r($value['descrip_categoria']); ?></center></td>
            <td><center><?php print_r($value['registration_year']); ?></center></td>
            <td><center><?php print_r($value['descrip_mes']); ?></center></td>
            <td><center><?php print_r($value['valor']); ?></center></td>
            <td><center><?php print_r($value['descripcion_ingreso']); ?></center></td>
            <td><center><?php print_r($value['descripcion_moneda']); ?></center></td>
        </tr>
    <?php endforeach ?>
    </tbody>
    </table>
    </section>           
    </div>
    </div>

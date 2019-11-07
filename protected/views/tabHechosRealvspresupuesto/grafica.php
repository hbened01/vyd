    <?php $this->setPageTitle('gráficas ins. individuales'); ?>

    <?php if ($_POST['registration_year']==null || empty($_POST['descrip_unidad_funcional']) || empty($_POST['descrip_categoria']) || empty($_POST['descrip_rubro'])){
            $this->redirect(array('TabHechosRealvspresupuesto/select'));      
    }?>
    <!-- Condiciones para mostrar mensaje de Unidad Funcional -->
    <?php if ($_POST['descrip_unidad_funcional']==$_POST['descrip_unidad_funcional']) {$mensaje_u = $_POST['descrip_unidad_funcional'];}
    ?>
    <!-- Condiciones para mostrar mensaje de categoria asociada -->
    <?php if ($_POST['descrip_categoria']==$_POST['descrip_categoria']) {$mensaje_c = $_POST['descrip_categoria'];}
    ?>
    <!-- Condiciones para mostrar mensaje de rubro asociado -->
    <?php if ($_POST['descrip_rubro']==$_POST['descrip_rubro']) {$mensaje_r = $_POST['descrip_rubro'];}
    ?>
    <div>
    <br>
    <br>
    <h1>Insertar condiciones para graficar</h1>
    <hr size=3 width= 50% align=center/> 
    <div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-select-form',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>false,
    'clientOptions'=>array('validateOnSubmit'=>false,),
    )); ?>

    <p class="note">Campos requeridos para la consulta. <span class="required">(*)</span></p>

    <?php echo $form->errorSummary($model); ?>

    <div class="column">

    <div class="row">

    <?php echo $form->labelEx(TablaIngresosIndividuales::model(),'<span class="required">(*)</span> Año a consultar: ');?> 

    <?php $list=CHtml::listData(TablaIngresosIndividuales::model()->findAll(array("select"=>"registration_year", "distinct"=>"true", "order"=>"registration_year")),'registration_year','registration_year');
        //las condiciones de el finAll() pueden ser 'join', 'order', 'limit', 'distinct', dependiendo la necesidad.//
        echo CHtml::dropDownList('registration_year','',$list,//se coloca $list para mostrar lo que trae la consulta
        array(
              //'empty'=>'Seleccione',
              'style' => 'width:240px;font-style: italic;font-size:10px;',
              'ajax' => array(
              'type'=>'POST', //request type
              'url'=>CController::createUrl('TabHechosRealvspresupuesto/und'), //url to call. 
              'update'=>'#descrip_unidad_funcional', //selector to update       
                        ),'prompt'=>'Seleccione')) ;            
    ?>

    <?php echo $form->error(TablaIngresosIndividuales::model(),'registration_year'); ?>

    </div>

    <div class="row"> 

    <?php echo $form->labelEx(TablaIngresosIndividuales::model(),'<span class="required">(*)</span> Unidad Funcional: ');?> 

    <?php $list=CHtml::listData(TablaIngresosIndividuales::model()->findAll(array("select"=>"descrip_unidad_funcional", "distinct"=>"true", "order"=>"descrip_unidad_funcional")),'descrip_unidad_funcional','descrip_unidad_funcional');
        //las condiciones de el finAll() pueden ser 'join', 'order', 'limit', 'distinct', dependiendo la necesidad.//
        echo CHtml::dropDownList('descrip_unidad_funcional','', $list,//se coloca $list para mostrar lo que trae la consulta
        array(
              //'empty'=>'Seleccione',
              'style' => 'width:240px;font-style: italic;font-size:10px;',
              'ajax' => array(
              'type'=>'POST', //request type
              'url'=>CController::createUrl('TabHechosRealvspresupuesto/cat'), //url to call. 
              'update'=>'#descrip_categoria', //selector to update             
                        ),'prompt'=>'Seleccione')) ;           
    ?>

    <?php echo $form->error(TablaIngresosIndividuales::model(),'descrip_unidad_funcional'); ?>

    </div>

    <div class="row">

    <?php echo $form->labelEx(TablaIngresosIndividuales::model(),'<span class="required">(*)</span> Categoria: ');?> 

    <?php $list=CHtml::listData(TablaIngresosIndividuales::model()->findAll(array("select"=>"descrip_categoria", "distinct"=>"true", "order"=>"descrip_categoria")),'descrip_categoria','descrip_categoria');
        //las condiciones de el finAll() pueden ser 'join', 'order', 'limit', 'distinct', dependiendo la necesidad.//
        echo CHtml::dropDownList('descrip_categoria','', $list,//se coloca $list para mostrar lo que trae la consulta
        array(
              //'empty'=>'Seleccione',
              'style' => 'width:240px;font-style: italic;font-size:10px;',
              'ajax' => array(
              'type'=>'POST', //request type
              'url'=>CController::createUrl('TabHechosRealvspresupuesto/rub'), //url to call. 
              'update'=>'#descrip_rubro', //selector to update
                        ),'prompt'=>'Seleccione')) ;                
    ?>

    <?php echo $form->error(TablaIngresosIndividuales::model(),'descrip_categoria'); ?>

    </div>

    <div class="row">

    <?php echo $form->labelEx(TablaIngresosIndividuales::model(),'<span class="required">(*)</span> Rubro: ');?> 

    <?php $list=CHtml::listData(TablaIngresosIndividuales::model()->findAll(array("select"=>"descrip_rubro", "distinct"=>"true", "order"=>"descrip_rubro")),'descrip_rubro','descrip_rubro');
        //las condiciones de el finAll() pueden ser 'join', 'order', 'limit', 'distinct', dependiendo la necesidad.//
        echo CHtml::dropDownList('descrip_rubro','', $list,//se coloca $list para mostrar lo que trae la consulta
        array('style' => 'width:240px;font-style: italic;font-size:10px;',
              'empty'=>'Seleccione',
              'ajax' => array(
              'type'=>'POST', //request type
              'url'=>CController::createUrl('TabHechosRealvspresupuesto/parametro'), //url to call. 
              'update'=>'#graficar', //selector to update
                        ),)) ;                 
    ?>

    <?php echo $form->error(TablaIngresosIndividuales::model(),'descrip_rubro'); ?>

    </div>
    </div>

    <div class="column buttons">
    <!-- boton para generar grafico -->
    <br><br><br>
    <?php echo CHtml::submitButton('Generar gráfico', array('name'=>'grafica')); ?>
    <?php //echo CHtml::submitButton('Generar gráfico', array('submit'=>array('TabHechosRealvspresupuesto/grafica'),)); ?>
    </div>

    <div class="column buttons">
    <!-- boton para retornar al index -->
    <br><br><br>
    <?php echo CHtml::submitButton(('Volver al menú de selección'),array('submit' => array('/site/index'))); ?>
    </div>

    <div id="graficar" name="graficar">
    <!-- en este div es que se mostrara la tabla -->
    </div>

    <?php $this->layout='column1'; ?>  <!-- Para elegir layout a utilizar -->

    <?php $this->endWidget(); ?>
    </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div>
        <br><hr>
            <h1><CENTER><font SIZE="+2"><?php echo $mensaje_u;?></font></CENTER></h1> 
    </div>
    <div>
            <h1><CENTER><font SIZE="+1"><?php //echo $mensaje_c;?></font></CENTER></h1> 
    </div>
     <div>
            <h1><CENTER><font SIZE="+0.5"><?php echo $mensaje_r;?></font></CENTER></h1>
        <br><hr>  
    </div>
    <div>

        <?php 

        // registro script de la extension de AMCHARTS versión 3.9

        /*
        Yii :: app () -> ClientScript-> registerScriptFile (. Yii :: app () -> baseUrl . '/ ruta / a / su / javascript / archivo');

        Yii :: app () -> ClientScript-> registerCssFile (Yii :: app () -> baseUrl . '/ ruta / al / css / archivo'.);
        */

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/amcharts_3.11.2/amcharts/amcharts.js');
        
        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/amcharts_3.11.2/amcharts/serial.js' );

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/amcharts_3.11.2/amcharts/pie.js' );

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/amcharts_3.11.2/amcharts/exporting/amexport.js' );

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/amcharts_3.11.2/amcharts/exporting/rgbcolor.js' );

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/amcharts_3.11.2/amcharts/exporting/canvg.js' );

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/amcharts_3.11.2/amcharts/exporting/jspdf.js' ); 

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/amcharts_3.11.2/amcharts/exporting/filesaver.js' );

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/amcharts_3.11.2/amcharts/exporting/jspdf.plugin.addimage.js' );

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/amcharts_3.11.2/amcharts/themes/dark.js' ); 

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/amcharts_3.11.2/amcharts/themes/black.js' ); 

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/amcharts_3.11.2/amcharts/themes/chalk.js' ); 

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/amcharts_3.11.2/amcharts/themes/light.js' ); 

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/amcharts_3.11.2/amcharts/themes/patterns.js' ); 

        // registro script de la extension de DATATABLES versión 1.10

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/DataTables-1.10.1/media/js/jquery.js');

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/DataTables-1.10.1/media/js/jquery.dataTables.js');

        Yii :: app ()-> clientScript -> registerCssFile ( Yii :: app ()-> baseUrl . '/js/DataTables-1.10.1/media/css/jquery.dataTables.css');

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/DataTables-1.10.1/examples/resources/syntax/shCore.js');

        Yii :: app ()-> clientScript -> registerCssFile ( Yii :: app ()-> baseUrl . '/js/DataTables-1.10.1/examples/resources/syntax/shCore.css');

        Yii :: app ()-> clientScript -> registerScriptFile ( Yii :: app ()-> baseUrl . '/js/DataTables-1.10.1/extensions/TableTools/js/dataTables.tableTools.js');

        Yii :: app ()-> clientScript -> registerCssFile ( Yii :: app ()-> baseUrl . '/js/DataTables-1.10.1/extensions/TableTools/css/dataTables.tableTools.css');

        ?>

    <script type="text/javascript" language="javascript" class="init">

            // script para configurar graficas POR AMCHARTS.

            var chart;

            document.write('Gráfica de totales por insumos individuales.');

            //var chartData =  <?php echo $this->actionParametro();?> //Consulta realizada al Controlador
            var chartData =  <?php echo TabHechosRealvspresupuesto::model()->Parametro1();?> //Consulta realizada al modelo

                AmCharts.ready(function () {
                // SERIAL CHART  
                chart = new AmCharts.AmSerialChart();
                chart.pathToImages = "../amcharts/images/";
                chart.dataProvider = chartData;
                chart.categoryField = "descrip_mes";
                chart.startDuration = 0.5;
                //degrada las columnas
                chart.handDrawn = false;
                chart.handDrawnScatter = 3;
                // the following two lines makes chart 3D
                chart.depth3D = 10;
                chart.angle = 20;

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.gridPosition = "start";

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.axisAlpha = 0;
                chart.addValueAxis(valueAxis);

                // GRAPHS
                // column graph
                var graph1 = new AmCharts.AmGraph();
                graph1.type = "column";
                graph1.title = "Ingresos reales";
                graph1.lineColor = "#FF4000";
                graph1.valueField = "real";
                graph1.lineAlpha = 1;
                graph1.fillAlphas = 1;
                graph1.dashLengthField = "dashLengthColumn";
                graph1.alphaField = "alpha";
                //graph1.labelText = "[[value]]"; // coloco el valor en el centro 
                graph1.balloonText = "<span style='font-size:10px;'>[[title]] en [[category]]:<b>[[value]]</b> [[additional]]</span>";
                chart.addGraph(graph1);

                // line
                var graph2 = new AmCharts.AmGraph();
                graph2.type = "line";
                graph2.title = "Ingresos presupuestados";
                graph2.lineColor = "#610B0B";
                graph2.valueField = "presupuesto";
                graph2.lineThickness = 2;
                graph2.bullet = "round";
                graph2.bulletBorderThickness = 1;
                graph2.bulletBorderColor = "#0404B4";
                graph2.bulletBorderAlpha = 1;
                graph2.bulletColor = "#610B0B";
                graph2.dashLengthField = "dashLengthLine";
                //graph2.labelText = "[[value]]"; // coloco el valor en el centro 
                graph2.balloonText = "<span style='font-size:10px;'>[[title]] en [[category]]:<b>[[value]]</b> [[additional]]</span>";
                chart.addGraph(graph2);

                // LEGEND                
                var legend = new AmCharts.AmLegend();
                legend.useGraphSettings = true;
                chart.addLegend(legend);

                // EXPORT

                chart.exportConfig = {
                    menuTop: "-5px",
                    menuBottom: "auto",
                    menuRight: "30px",
                    menuBottom: '0px',
                    menuItems: [{
                    textAlign: 'center',
                    icon: '/vyd/js/amcharts_3.11.2/amcharts/images/export.png',
                    iconTitle: 'Guardar la gráfica en el formato deseado',
                onclick: function () {},
                items: [/*{
                title: 'Formato JPG',
                format: 'jpg'
                }, */{
                title: 'Formato PNG',
                format: 'png'
                }, /*{
                title: 'Formato SVG',
                format: 'svg'
                },*/ {
                title: 'Formato PDF',
                format: 'pdf'
                }]
                }],
                menuItemOutput:{
                fileName:"Gráfica insumos individuales"
                },
                menuItemStyle: {
                backgroundColor: 'transparent',
                rollOverBackgroundColor: '#EFEFEF',
                color: '#000000',
                rollOverColor: '#CC0000',
                paddingTop: '6px',
                paddingRight: '6px',
                paddingBottom: '6px',
                paddingLeft: '6px',
                marginTop: '0px',
                marginRight: '-20px',
                marginBottom: '0px',
                marginLeft: '0px',
                textAlign: 'left',
                textDecoration: 'none'
                } 
                }; 

                // WRITE
                chart.theme = AmCharts.themes.light;
                chart.write("chartdiv");

            });

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
        $('#ingresos').dataTable( {
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

    <div id="chartdiv" style="width:750px; height:350px;"></div>
    
    <hr>
    <hr>

    <div class="container">

    <?php
    //$Json = $this->actionParametro(); 
    $Json = TabHechosRealvspresupuesto::model()->Parametro1(); 
    $Json = json_decode($Json,true);
    ?>

          <h1><CENTER><font SIZE="+2">Descripción detallada de los ingresos postulados</font></CENTER></h1>

          <br>
          <hr>

    <section>

    <table id="ingresos" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th><center>Año </center></th>
            <th><center>Mes </center></th>
            <th><center>Unidad funcional </center></th>
            <th><center>Categoria </center></th>
            <th><center>Rubro </center></th>
            <th><center>Ingreso real </center></th>  
            <th><center>Ingreso presupuestado </center></th>                 
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th><center>Año </center></th>
            <th><center>Mes </center></th>
            <th><center>Unidad funcional </center></th>
            <th><center>Categoria </center></th>
            <th><center>Rubro </center></th>
            <th><center>Ingreso real </center></th>  
            <th><center>Ingreso presupuestado </center></th>         
        </tr>
    </tfoot>
    <tbody>
    <?php foreach ($Json as $key => $value): ?>
        <tr>
            <td><center><?php print_r($value['registration_year']); ?></center></td>
            <td><center><?php print_r($value['descrip_mes']); ?></center></td>
            <td><center><?php print_r($value['descrip_unidad_funcional']); ?></center></td>
            <td><center><?php print_r($value['descrip_categoria']); ?></center></td>
            <td><center><?php print_r($value['descrip_rubro']); ?></center></td>
            <td><center><?php print_r($value['real']); ?></center></td>
            <td><center><?php print_r($value['presupuesto']); ?></center></td>
        </tr>
    <?php endforeach ?>
    </tbody>
    </table>
    </section>      
    </div>

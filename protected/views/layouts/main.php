<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo Yii::app()->language; ?>" lang="<?php echo Yii::app()->language; ?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo Yii::app()->charset; ?>" />
    <meta name="language" content="<?php echo Yii::app()->language; ?>" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css" />
</head>

<body>

<div class="container" id="page" >

    <div>
        <img src="http://www.cantv.com.ve/Portales/Cantv/Data/CabezalBolivariano_cantv_MEUCT_2015.jpg" style="width: 950px" />
        <!-- <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/cabecera_gobenlinea.gif" style="width: 950px" /> !-->
    </div>
	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
		<?php if(!Yii::app()->user->isGuest){ ?>		
		<div id="conectedUser">Bienvenido: &nbsp<?php echo CHtml::encode(Yii::app()->user->name); ?>&nbsp<img src="<?php echo Yii::app()->baseUrl; ?>/images/small_icons/user.png"></div>
		<div style="padding: 5px 10px 20px 0px;">
			<div id="logout"><?php echo CHtml::link('Salir del sistema', array('cruge/ui/logout')); ?></div>
		</div>
		<?php }?>
	</div>

	<!-- header -->     
	<div id="mainMbMenu">
		            
            <?php 
            
            if(!Yii::app()->user->isGuest){

                $this->widget('application.extensions.mbmenu.MbMenu',
                    array(
                    'items'=>array(
                            array('label'=>'Inicio', 'url'=>array('/site/index')),

                            //Menú para la administración de usuarios y sus respectivos roles en la Organización así como también el mantenimiento de tablas estáticas.//

                            array('label'=>'Administrar',
                                'items'=>array(
                                    array('label'=>'Usuarios', 'url'=>Yii::app()->user->ui->userManagementAdminUrl,'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Empleados', 'url'=>array('/baseEmpleados/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Organizacion', 'url'=>array('/baseOrg/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                ),
                             ),
                            //Menú para la administración de tablas a las cuales se les aplicará el mantenimiento de tablas estáticas.//
                            array('label'=>'Mantenimiento',
                                'items'=>array(
                                    array('label'=>'Carga manual de insumos', 'url'=>array('/tabHechosRealvspresupuesto/cmanual'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Listado de categorias', 'url'=>array('/tabCategorias/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Listado de insumos presupuestados', 'url'=>array('/TabListRubrosPptos/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Listado de insumos reales', 'url'=>array('/TabListRubrosReales/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Listado de rubros', 'url'=>array('/tabRubros/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Listado de totales', 'url'=>array('/tabTipoTotal/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Listado de tipos de sección', 'url'=>array('/tabTipoSeccion/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Listado de unidades funcionales', 'url'=>array('/tabUnidadFuncional/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                ),
                             ),

                            //Menú para la visualización de la data suministrada por CERTUS y otras organizaciones.//   

                           
                            array('label'=>'Consultas de insumos',
                                'items'=>array(
                                    /*
                                    array('label'=>'Capacidad de la red', 'url'=>array('/tabCapRed/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    */
                                    array('label'=>'Insumos de certus',
                                    'items'=>array(
                                    array('label'=>'Certus estadísticas', 'url'=>array('tabCertusEstadisticas/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Certus estado resultados', 'url'=>array('tabCertusEstadoResultados/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Certus ingresos pptos', 'url'=>array('/vistasPpto/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Certus ingresos reales', 'url'=>array('/vistasReales/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                        ),
                                    ),
                                    array('label'=>'Insumos de movilnet',
                                    'items'=>array(
                                    array('label'=>'Movilnet activaciones', 'url'=>array('/tabMovilnetActivaciones/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Movilnet clientes', 'url'=>array('/tabMovilnetClientes/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                        ),
                                    ),
                                    array('label'=>'Insumos totalizados',
                                    'items'=>array(
                                    array('label'=>'Total de ingresos individuales', 'url'=>array('/tabHechosRealvspresupuesto/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Total de ingresos por unidades', 'url'=>array('/tabTotalUnidades/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Total de ingresos de la corporación ', 'url'=>array('/tabTotalCorporacion/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                        ),
                                    ),
                                ),
                            ),

                            //Menú para la visualización de las graficas a presentar.//  

                            array('label'=>'Consultas generales',
                                'items'=>array(
                                array('label'=>'Gráficas de insumos individuales', 'url'=>array('TabHechosRealvspresupuesto/select'), 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Gráficas por unidades prestadoras de servicio', 'url'=>array('tabTotalUnidades/select'), 'visible'=>!Yii::app()->user->isGuest),   
                                array('label'=>'Gráficas de totales de la corporación', 'url'=>array('tabTotalCorporacion/select'), 'visible'=>!Yii::app()->user->isGuest),                                
                            ),
                                ),
                             array('label'=>'Reporte mensual',
                                'items'=>array(
                                array('label'=>'Crear ó editar informe',
                                'items'=>array( 
                                array('label'=>'Crear', 'url'=>array(''), 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Editar', 'url'=>array(''), 'visible'=>!Yii::app()->user->isGuest),
                                ),
                                ),
                                array('label'=>'Publicar informe', 'url'=>array(''), 'visible'=>!Yii::app()->user->isGuest),                               
                                array('label'=>'Reportes de datos', 'url'=>array(''), 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Reportes de voz', 'url'=>array(''), 'visible'=>!Yii::app()->user->isGuest),
                                    ),
                                ),
                            //array('label'=>'Acerca de',
                            //    'items'=>array(
                            //        array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
                            //        array('label'=>'Contacto', 'url'=>array('/site/contact')),
                            //    ),
                            //),
                            //array('label'=>'Ingresar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                            //array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>Yii::app()->user->ui->logoutUrl, 'visible'=>!Yii::app()->user->isGuest),
                        ),
                    )
                );
            }
            ?>
            
	</div><!-- mainmenu -->
        
	<?php if(isset($this->breadcrumbs)):?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'homeLink'=>CHtml::link('Inicio', array('/site/index')),
            'links'=>$this->breadcrumbs,
        )); ?><!-- breadcrumbs -->
	<?php endif?>
        
        <?php echo $content; ?>
        
	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by CANTV.<br/>
		Compañia Anónima Nacional Teléfonos de Venezuela. RIF: J-00124134-5.- Todos los derechos reservados.<br/>
		
	</div><!-- footer -->

</div><!-- page -->

<?php echo Yii::app()->user->ui->displayErrorConsole(); ?>

</body>
</html>

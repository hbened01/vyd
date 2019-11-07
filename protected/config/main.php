<?php
/**
 * Função para eliminar o erro dos redirects do demonho
 * 
 * @author bmvaghela
 * @since 2012-12-13
 * @see http://bmvaghela.wordpress.com/2012/12/13/how-to-solve-header-already-sent-error-yii/
 * @return unknown
 */
    ob_start('My_OB');
    function My_OB($str, $flags)
    {
        //remove UTF-8 BOM
        $str = preg_replace("/\xef\xbb\xbf/","",$str);

        return $str;
    }
// uncomment the following to define a path alias.
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable.
// CWebApplication properties can be configured here.
// Para ver la versión del nucleo colocar "echo Yii::getVersion();".
return array(
   'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
   'name'=>'Informe mensual de las categorias de voz y datos',
   'language'=>'es', // Este es el lenguaje en el que quieres que muestre las cosas.
   'sourceLanguage'=>'en', // Este es el lenguaje de programaciòn.
   'charset'=>'utf-8', // Tipo de codificaciòn.
    // preloading'log'component.
   'preload'=>array('log'),
    // autoloading model and component classes. 
   'import'=>array(
       'application.models.*',
       'application.components.*',
       'application.modules.cruge.components.*',
       'application.modules.cruge.extensions.crugemailer.*',
       'application.modules.ldap.components.*',
       'application.extensions.moneymask.*',
       'application.extensions.FormulaInterpreter.*',
       'application.extensions.phpPegMaster.*',
       'application.extensions.EScrollableGridView.*', // habilitar scroll y-x
       'application.extensions.PNotify.*', // notificaciones emergentes
       'application.extensions.jnotify.*', // notificaciones emergentes
       'ext.giix-components.*', // giix components.
       'ext.EDataTables.*', // data table js extension component.
       'ext.edropdownsdependents.*', // Para hacer combos dependientes amigables
       'ext.EchMultiSelect.*', // para combos multiple
    ),
   'modules'=>array(
        // uncomment the following to enable the Gii tool.
       'gii'=>array(
           'class'=>'system.gii.GiiModule',
           'password'=>'voz_datos',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
           'ipFilters'=>array('161.196.26.166','127.0.0.1','::1'),
           'generatorPaths'=>array(
           'ext.giix-core', // giix generators.
            //'bootstrap.gii', // bootstrap generators.
                    ),
        ),
       'reportico'=>array(), // reportico module.
                //modulo de auyenticación.
               'cruge'=>array(
                       'tableprefix'=>'cruge_',
                        // para que utilice a protected.modules.cruge.models.auth.CrugeAuthDefault.php
                        //
                        // en vez de'default'pon'authdemo'para que utilice el demo de autenticacion alterna
                        // para saber mas lee documentacion de la clase modules/cruge/models/auth/AlternateAuthDemo.php
                        //
                        'availableAuthMethods'=>array('default'),
                        //
                        'availableAuthModes'=>array('username','email'),
                        // url base para los links de activacion de cuenta de usuario
                        'baseUrl'=>'http://vyd.cantv.com.ve/',
                         // NO OLVIDES PONER EN FALSE TRAS INSTALAR
                        'debug'=>false,
                        'rbacSetupEnabled'=>false,
                        'allowUserAlways'=>false,
                        // MIENTRAS INSTALAS..PONLO EN: false
                        // lee mas abajo respecto a'Encriptando las claves'
                        //
                        'useEncryptedPassword'=> true,
                        // Algoritmo de la función hash que deseas usar
                        // Los valores admitidos están en: http://www.php.net/manual/en/function.hash-algos.php
                        'hash'=>'md5',
                        // Estos tres atributos controlan la redirección del usuario. Solo serán son usados si no
                        // hay un filtro de sesion definido (el componente MiSesionCruge), es mejor usar un filtro.
                        //  lee en la wiki acerca de:
                        //   "CONTROL AVANZADO DE SESIONES Y EVENTOS DE AUTENTICACION Y SESION"
                        //
                        // ejemplo:
                        //     'afterLoginUrl'=>array('/site/welcome'),  ( !!! no olvidar el slash inicial / )
                        //     'afterLogoutUrl'=>array('/site/page','view'=>'about'),
                        //
                        'afterLoginUrl'=>array('/site/index'),
                        'afterLogoutUrl'=>array('/site/login'),
                        'afterSessionExpiredUrl'=>null,
                        // manejo del layout con cruge.
                        //
                        'loginLayout'=>'//layouts/column2',
                        'registrationLayout'=>'//layouts/column2',
                        'activateAccountLayout'=>'//layouts/column2',
                        'editProfileLayout'=>'//layouts/column2',
                        // en la siguiente puedes especificar el valor "ui" o "column2" para que use el layout
                        // de fabrica, es basico pero funcional.  si pones otro valor considera que cruge
                        // requerirá de un portlet para desplegar un menu con las opciones de administrador.
                        //
                        'generalUserManagementLayout'=>'ui',
                        // permite indicar un array con los nombres de campos personalizados,
                        // incluyendo username y/o email para personalizar la respuesta de una consulta a:
                        // $usuario->getUserDescription();
                        'userDescriptionFieldsArray'=>array('email'),
                        //
                        'superuserName'=>'admin',
                ),
            //
            ),

    // application components
   'components'=>array(
        //'user'=>array(
        //  // enable cookie-based authentication
        // 'allowAutoLogin'=>true,
        //),

        // uncomment the following to enable URLs in path-format
        /*
       'urlManager'=>array(
           'urlFormat'=>'path',
           'rules'=>array(
               '<controller:\w+>/<id:\d+>'=>'<controller>/view',
               '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
               '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ),
        ),

       'db'=>array(
           'connectionString'=>'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
        ),*/
        //URL limpias
       'urlManager'=>array(
           'urlFormat'=>'path',
           'showScriptName'=>true,
           'caseSensitive'=>true,
           'rules'=>array(
               '<controller:\w+>/<id:\d+>'=>'<controller>/view',
               '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
               '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ),
        ),
        //to use a PSQL database.
       'db'=>array(
       'connectionString'=>'pgsql:host=localhost;dbname=voz_datos',
           'emulatePrepare'=> true, // para trabajar con booleanos comentar la linea
           'username'=>'postgres',
           'password'=>'<zaq12wsx',
           'charset'=>'utf8',
        ),
            // Traducir mensajes del core
       'coreMessages'=>array(
           'basePath'=>'protected/messages'
        ),
            //
       'errorHandler'=>array(
            // use'site/error'action to display errors
           'errorAction'=>'site/error',
        ),
            //
       'log'=>array(
           'class'=>'CLogRouter',
           'routes'=>array(
                array(
                   'class'=>'CFileLogRoute',
                   'levels'=>'error, warning, info, rbac',
                    ),
                // uncomment the following to show log messages on web pages
                /*
                array(
                   'class'=>'CWebLogRoute',
                ),
                */
                ),
            ),
                //
                //  IMPORTANTE:  asegurate de que la entrada'user'(y format) que por defecto trae Yii
                //               sea sustituida por estas a continuación:
                //
               'user'=>array(
                       'allowAutoLogin'=>true,
                       'class'=>'application.modules.cruge.components.CrugeWebUser',
                        //'loginUrl'=> array('/cruge/ui/login'),
                       'loginUrl'=> array('site/login'),
                ),
               'authManager'=> array(
                       'class'=>'application.modules.cruge.components.CrugeAuthManager',
                ),
               'crugemailer'=>array(
                       'class'=>'application.modules.cruge.components.CrugeMailer',
                       'mailfrom'=>'hbened01@cantv.com.ve',
                       'subjectprefix'=>'VOZ_DATOS -',
                       'debug'=> true,
                ),
               'authManagerLdap'=> array(
               'class'=>'application.modules.ldap.components.CrugeAuthManagerLdap',
            ),
               'userManagerLdap'=> array(
               'class'=>'application.modules.ldap.components.CrugeWebUserLdap',
            ),
               'format'=> array(
                       'datetimeFormat'=>"d M, Y h:m:s a",
            ),
               'ePdf'=>array(
               'class'=>'ext.yii-pdf.EYiiPdf',
               'params'=> array(
               'mpdf'=> array(
               'librarySourcePath'=>'application.vendors.mpdf.*',
               'constants'=>array(
               '_MPDF_TEMP_PATH'=>Yii::getPathOfAlias('application.runtime'),
            ),
               'class'=>'mpdf',
                 // the literal class filename to be loaded from the vendors folder
                    /*'defaultParams'=> array( // More info: http://mpdf1.com/manual/index.php?tid=184
                   'mode'=>'', // This parameter specifies the mode of the new document.
                   'format'=>'A4', // format A4, A5, ...
                   'default_font_size'=> 0, // Sets the default document font size in points (pt)
                   'default_font'=>'', // Sets the default font-family for the new document.
                   'mgl'=> 15, // margin_left. Sets the page margins for the new document.
                   'mgr'=> 15, // margin_right
                   'mgt'=> 16, // margin_top
                   'mgb'=> 16, // margin_bottom
                   'mgh'=> 9, // margin_header
                   'mgf'=> 9, // margin_footer
                   'orientation'=>'P', // landscape or portrait orientation
                    )*/
                    ),
               'HTML2PDF'=> array(
               'librarySourcePath'=>'application.vendors.html2pdf.*',
               'classFile'=>'html2pdf.class.php',
                ),
            ),
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
   'params'=>array(
        // this is used in contact page
       'adminEmail'=>'hbened01@cantv.com.ve',
    ),
   'defaultController'=>'site/login', // Vista por defecto
);

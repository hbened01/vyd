<?php

class TabHechosRealvspresupuestoController extends Controller
{
	public $layout='//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            //'accessControl', // perform access control for CRUD operations
            //'postOnly + delete', // we only allow deletion via POST request
                        array('CrugeAccessControlFilter'),
        );
    }

	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TabHechosRealvspresupuesto');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','grafica','parametro','formulario','select','table','cmanual','pdf'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionCreate()
	{
	    $model=new TabHechosRealvspresupuesto;

	    if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }

	    if(isset($_POST['TabHechosRealvspresupuesto']))
	    {
	        $model->attributes=$_POST['TabHechosRealvspresupuesto'];
	        if($model->validate())
	        {
				$this->saveModel($model);
				$this->redirect(array('view','id_rubro'=>$model->id_rubro, 'id_unidad_funcional'=>$model->id_unidad_funcional, 'id_categoria'=>$model->id_categoria, 'registration_year'=>$model->registration_year, 'id_mes'=>$model->id_mes, 'id_tipo_ingreso'=>$model->id_tipo_ingreso, 'id_moneda'=>$model->id_moneda));
	        }
	    }
	    $this->render('create',array('model'=>$model));
	} 
	
	public function actionDelete($id_rubro, $id_unidad_funcional, $id_categoria, $registration_year, $id_mes, $id_tipo_ingreso, $id_moneda)
	{
		if(Yii::app()->request->isPostRequest)
		{
			try
			{
				// we only allow deletion via POST request
				$this->loadModel($id_rubro, $id_unidad_funcional, $id_categoria, $registration_year, $id_mes, $id_tipo_ingreso, $id_moneda)->delete();
			}
			catch(Exception $e) 
			{
				$this->showError($e);
			}

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
		}
		else
			throw new CHttpException(400,'Solicitud invalida. Por favor no repetir esta solicitud nuevamente.');
	}
	
	public function actionUpdate($id_rubro, $id_unidad_funcional, $id_categoria, $registration_year, $id_mes, $id_tipo_ingreso, $id_moneda)
	{
		$model=$this->loadModel($id_rubro, $id_unidad_funcional, $id_categoria, $registration_year, $id_mes, $id_tipo_ingreso, $id_moneda);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TabHechosRealvspresupuesto']))
		{
			$model->attributes=$_POST['TabHechosRealvspresupuesto'];
			$this->saveModel($model);
			$this->redirect(array('view',
	                    'id_rubro'=>$model->id_rubro, 'id_unidad_funcional'=>$model->id_unidad_funcional, 'id_categoria'=>$model->id_categoria, 'registration_year'=>$model->registration_year, 'id_mes'=>$model->id_mes, 'id_tipo_ingreso'=>$model->id_tipo_ingreso, 'id_moneda'=>$model->id_moneda));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionAdmin()
	{
		$model=new TabHechosRealvspresupuesto('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TabHechosRealvspresupuesto']))
			$model->attributes=$_GET['TabHechosRealvspresupuesto'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionView($id_rubro, $id_unidad_funcional, $id_categoria, $registration_year, $id_mes, $id_tipo_ingreso, $id_moneda)
	{		
		$model=$this->loadModel($id_rubro, $id_unidad_funcional, $id_categoria, $registration_year, $id_mes, $id_tipo_ingreso, $id_moneda);
		$this->render('view',array('model'=>$model));
	}
	
	public function loadModel($id_rubro, $id_unidad_funcional, $id_categoria, $registration_year, $id_mes, $id_tipo_ingreso, $id_moneda)
	{
		$model=TabHechosRealvspresupuesto::model()->findByPk(array('id_rubro'=>$id_rubro, 'id_unidad_funcional'=>$id_unidad_funcional, 'id_categoria'=>$id_categoria, 'registration_year'=>$registration_year, 'id_mes'=>$id_mes, 'id_tipo_ingreso'=>$id_tipo_ingreso, 'id_moneda'=>$id_moneda));
		if($model==null)
			throw new CHttpException(404,'La página solicitada no existe.');
		return $model;
	}

	public function saveModel($model)
	{
		try
		{
			$model->save();
		}
		catch(Exception $e)
		{
			$this->showError($e);
		}		
	}

	function showError(Exception $e)
	{
		if($e->getCode()==23000)
			$message = "Esta operación no esta permitida debido a que no existe la referencia foránea.";
		else
			$message = "Operación invalida.";
		throw new CHttpException($e->getCode(), $message);
	}	

       /*
       public function actionFormulario() ///para formular nuevas vistas
       {
             $model=new TabHechosRealvspresupuesto;

        if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-sel-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if(isset($_POST['TabHechosRealvspresupuesto']))
        {
            $model->attributes=$_POST['TabHechosRealvspresupuesto'];
            if($model->validate())
            {
                $this->saveModel($model);
                $this->redirect(array('sel','id_rubro'=>$model->id_rubro, 'id_unidad_funcional'=>$model->id_unidad_funcional, 'id_categoria'=>$model->id_categoria, 'registration_year'=>$model->registration_year, 'id_mes'=>$model->id_mes, 'id_tipo_ingreso'=>$model->id_tipo_ingreso, 'id_moneda'=>$model->id_moneda));
            }
        }
        $this->render('sel',array('model'=>$model));
       }*/

    public function actionFormulario() ///para formular nuevas vistas
    {
             $model=new TablaIngresosIndividuales;

        if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-select-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if(isset($_POST['TablaIngresosIndividuales']))
        {
            $model->attributes=$_POST['TablaIngresosIndividuales'];
            if($model->validate())
            {
                $this->saveModel($model);
                $this->redirect(array('view','descrip_rubro'=>$model->descrip_rubro, 'descrip_unidad_funcional'=>$model->descrip_unidad_funcional, 'descrip_categoria'=>$model->descrip_categoria, 'registration_year'=>$model->registration_year, 'descrip_mes'=>$model->descrip_mes, 'descripcion_ingreso'=>$model->descripcion_ingreso, 'descripcion_moneda'=>$model->descripcion_moneda));
            }
        }
        $this->render('select',array('model'=>$model));
    }

	public function actionGrafica($error=null)
	{
		//$this->render('grafica');
        //$this->render('grafica',array(),false,true);
    $model=new TablaIngresosIndividuales;

    if(isset($_POST['grafica'])){
        if ($_POST['registration_year']==null || empty($_POST['descrip_unidad_funcional']) || empty($_POST['descrip_categoria']) || empty($_POST['descrip_rubro'])){
            $model=new TablaIngresosIndividuales;
            $this->render('select',array('model'=>$model));
            echo "<script>alert_graf();</script>";
            //echo "<script>alert('Recuerde que los campos con (*) son obligatorios.')</script>";
            Yii::app()->end();      
    }    
        }

    if(isset($_POST['grafica'])){
        if ($_POST['registration_year']<>null && isset($_POST['descrip_unidad_funcional']) && isset($_POST['descrip_categoria']) && isset($_POST['descrip_rubro'])){
            $model=new TablaIngresosIndividuales;
            $this->render('grafica', array('model'=>$model));
            Yii::app()->end();
    }    
        }

        $this->render('grafica',array('model'=>$model));
	}

    public function actionSelect()
    {
        /* CODIGO MUESTRAL
        $this->redirect(array('view','id'=>$model->id_etapa));
        $p=null;
        if (issett($_REQUEST['error'])) $p=$error; //comentado
        $this->render('select',array('error'=>$p));  
        if(isset($_POST['cancelar'])){
            sleep(3);  
        }else{Yii::app()->end();}
        <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
        <?php echo CHtml::submitButton('Volver al Home',array('name'=>'cancelar')); ?>
        </div> 
        */
    $model=new TablaIngresosIndividuales;

    if(isset($_POST['grafica'])){
        if ($_POST['registration_year']==null || empty($_POST['descrip_unidad_funcional']) || empty($_POST['descrip_categoria']) || empty($_POST['descrip_rubro'])){
            $model=new TablaIngresosIndividuales;
            $this->render('select',array('model'=>$model));
            echo "<script>alert_graf();</script>";
            //echo "<script>alert('Recuerde que los campos con (*) son obligatorios.')</script>";
            //echo CHtml::script('$("#dlg-address-view").dialog("open")');
            Yii::app()->end();      
    }    
        }

    if(isset($_POST['grafica'])){
        if ($_POST['registration_year']<>null && isset($_POST['descrip_unidad_funcional']) && isset($_POST['descrip_categoria']) && isset($_POST['descrip_rubro'])){
            $model=new TablaIngresosIndividuales;
            $this->render('grafica', array('model'=>$model));
            Yii::app()->end();
    }    
        }

       print_r($data=TabHechosRealvspresupuesto::model()->Unidad()) ;

        $this->render('select',array('model'=>$model));

    }

	public function actionUnd()
    {
        //verifico si esta seteado
        if (isset($_POST['registration_year']))   
        {
        $año_g = $_POST['registration_year'];

        $data=TabHechosRealvspresupuesto::model()->Unidad($año_g);

        $data=CHtml::listData($data,'descrip_unidad_funcional','descrip_unidad_funcional');

        echo CHtml::tag('option',array('value'=>''),'Seleccione',true);

        foreach($data as $value=>$name)
            {
            echo CHtml::tag('option',
            array('value'=>$value),CHtml::encode($name),true);
            }
        }
    }

    public function actionCat()
    {
        $model = new TablaIngresosIndividuales;
        //verifico si esta seteado
        if (isset($_POST['descrip_unidad_funcional']))   
        {
        $unidad_g = $_POST['descrip_unidad_funcional'];

        $data=TabHechosRealvspresupuesto::model()->Categoria($unidad_g);

        $data=CHtml::listData($data,'descrip_categoria','descrip_categoria');

        echo CHtml::tag('option',array('value'=>''),'Seleccione',true);

        foreach($data as $value=>$name)
            {
            echo CHtml::tag('option',
            array('value'=>$value),CHtml::encode($name),true);
            }
        }
    }

    public function actionRub()
    {
        $model = new TablaIngresosIndividuales;
        //verifico si esta seteado
        if (isset($_POST['descrip_categoria']))   
        {
        $categoria_g = $_POST['descrip_categoria'];

        $data=TabHechosRealvspresupuesto::model()->Rubro($categoria_g);

        echo CHtml::tag('option',array('value'=>''),'Seleccione',true);

        $data=CHtml::listData($data,'descrip_rubro','descrip_rubro');

        foreach($data as $value=>$name)
            {
            echo CHtml::tag('option',
            array('value'=>$value),CHtml::encode($name),true);
            }
        }
    }

    public function actionParametro()
    {
        $model = new TablaIngresosIndividuales;
       
        if (isset($_POST['descrip_rubro']))   
        {
        $rubro_g = $_POST['descrip_rubro'];
        $unidad_g = $_POST['descrip_unidad_funcional'];
        $categoria_g = $_POST['descrip_categoria'];
        $año_g = $_POST['registration_year'];  
        }

        return;
    }

    public function actionExcel()
    {
        $content=$this->renderPartial('export', Yii::app()->getSession()->get('hecho_records'),true);
        yii::app()->request->sendFile("LISTADO_TOTALES_INDIVIDUALES.xls",$content);
    }

    public function actionRubroExportToExcel_1()
    {
        $this->toExcel($_SESSION['hecho_records'],
        array(
            'idRubro.descrip_rubro::rubro',
            'idUnidadFuncional.descrip_unidad_funcional:unidad funcional',  
            'idCategoria.descrip_categoria::categoría',
            'registration_year:año',
            'idMes.descrip_mes::mes',
            'valor::monto',
            'idTipoIngreso.descripcion_ingreso::tipo de ingreso',
            'idMoneda.descripcion_moneda::moneda',   
        ),
        'LISTADO_TOTALES_INDIVIDUALES_F',
        array(
            'creator' => 'SWL',
        ),
        'Excel2007'
        );
    }

    public function actionRubroExportToExcel_2()
    {
    // Load data with a CActiveDataProvider (note that we can easily apply conditions over the result set)
    $model=TabHechosRealvspresupuesto::model()->findAll();
    // Export it (note the way we define columns, the same as in CGridView, thanks to EExcelView)
    $this->toExcel($model,
        array(
            'idRubro.descrip_rubro::rubro',
            'idUnidadFuncional.descrip_unidad_funcional:unidad funcional',  
            'idCategoria.descrip_categoria::categoría',
            'registration_year:año',
            'idMes.descrip_mes::mes',
            'valor::monto',
            'idTipoIngreso.descripcion_ingreso::tipo de ingreso',
            'idMoneda.descripcion_moneda::moneda',
        ),
        'LISTADO_TOTALES_INDIVIDUALES_C',
        array(
            'creator' => 'SWL',
        ),
        'Excel2007' // This is the default value, so you can omit it. You can export to CSV, PDF or HTML too
    );
    }

    public function behaviors()
    {
            return array(
            'eexcelview'=>array(
                'class'=>'ext.eexcelview.EExcelBehavior',
            ),
        );
    }

    public function actionTable($error=null)
    {
        $this->render('table',array(),false,true);
    }

    public function actionCmanual($error=null)
    {
        $this->render('cmanual',array(),false,true);
    }

    public function actionShell_1()
    {
        $p=shell_exec("sh /opt/data-integration-5/kitchen.sh /file:'/var/www/pentaho_etl/etl/etl_voz_datos/prueba0.kjb' /level:Minimal");

        //return execute status 
        //echo trim($p);

        return $this->render('cmanual');

        //var_dump("hola");
    }

    public function actionShell_2()
    {
        $p=shell_exec("sh /opt/data-integration-5/kitchen.sh /file:'/var/www/pentaho_etl/etl/etl_voz_datos/prueba0.kjb' /level:Minimal");

        $this->render('cmanual');

    }

    public function actionShell_3()
    {
        $p=shell_exec("sh /opt/data-integration-5/kitchen.sh /file:'/var/www/pentaho_etl/etl/etl_voz_datos/prueba0.kjb' /level:Minimal");

        $this->render('cmanual');

    }

    public function actionCrearPdf()
    {
         $model =TablaIngresosIndividuales::model()->findAll(); //Consulta para buscar todos los registros
         $mPDF1 = Yii::app()->ePdf->mpdf('utf-8','Letter','','',15,15,15,15,9,9,'P');   $html = iconv("UTF-8","UTF-8//IGNORE",$html);  //Esto lo pueden configurar como quieren, para eso deben de entrar en la web de MPDF para ver todo lo que permite.
         $mPDF1->useOnlyCoreFonts = true;
         $mPDF1->SetTitle("Reporte General");
         $mPDF1->SetAuthor("VYD");        
         //Coloca la Marca de Agua al Reporte
         $mPDF1->SetWatermarkText("INFORME MENSUAL DE LAS CATEGORIAS DE  VOZ Y DATOS");
         $mPDF1->showWatermarkText = true;
         $mPDF1->watermark_font = 'DejaVuSansCondensed';
         $mPDF1->watermarkTextAlpha = 0.1;
         $mPDF1->SetDisplayMode('fullpage');
         $mPDF1->WriteHTML($this->renderPartial('pdf', array('model'=>$model), true)); //hacemos un render partial a una vista preparada, en este caso es la vista Pdf_RD_AE
         $mPDF1->Output('Reporte General-'.date('YmdHis'),'I');  //Nombre del pdf y parámetro para ver pdf o descargarlo directamente.
         exit;
    }

    public function actionPdf()
    {
            $this->render('pdf');
    }

}

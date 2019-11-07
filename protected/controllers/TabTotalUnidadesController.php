<?php

class TabTotalUnidadesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
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

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','grafica','select'),
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

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new TabTotalUnidades;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TabTotalUnidades']))
		{
			$model->attributes=$_POST['TabTotalUnidades'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_tot_unid));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TabTotalUnidades']))
		{
			$model->attributes=$_POST['TabTotalUnidades'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_tot_unid));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TabTotalUnidades');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TabTotalUnidades('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TabTotalUnidades']))
			$model->attributes=$_GET['TabTotalUnidades'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return TabTotalUnidades the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=TabTotalUnidades::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'La página solicitada no existe.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param TabTotalUnidades $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tab-total-unidades-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    public function actionFormulario() ///para formular nuevas vistas
    {
             $model=new TablaIngresosUnidades;

        if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-select-form')

        if(isset($_POST['TablaIngresosUnidades']))
        {
            $model->attributes=$_POST['TablaIngresosUnidades'];
            if($model->validate())
            {
                $this->saveModel($model);
                $this->redirect(array('select','anio'=>$model->anio, 'descrip_mes'=>$model->descrip_mes, 'descrip_total'=>$model->descrip_total, 'descrip_categoria'=>$model->descrip_categoria, 'descrip_mes'=>$model->descrip_mes, 'descripcion_ingreso'=>$model->descripcion_ingreso, 'total'=>$model->total, 'descrip_unidad_funcional'=>$model->descrip_unidad_funcional));
            }
        }
        $this->render('select',array('model'=>$model));
    }

	public function actionGrafica($error=null)
	{
		//$this->render('grafica');

        $model=new TablaIngresosUnidades;

    if(isset($_POST['grafica'])){
        if ($_POST['anio']==null || empty($_POST['descrip_unidad_funcional']) || empty($_POST['descrip_categoria']) || empty($_POST['descrip_total'])){
            $model=new TablaIngresosUnidades;
            $this->render('select',array('model'=>$model));
            echo "<script>alert_graf();</script>";
            //echo "<script>alert('Recuerde que los campos con (*) son obligatorios.')</script>";
            Yii::app()->end();      
    }    
        }

    if(isset($_POST['grafica'])){
        if ($_POST['anio']<>null && isset($_POST['descrip_unidad_funcional']) && isset($_POST['descrip_categoria']) && isset($_POST['descrip_total'])){
            $model=new TablaIngresosUnidades;
            $this->render('grafica', array('model'=>$model));
            Yii::app()->end();
    }    
        }

        $this->render('grafica',array('model'=>$model),false,true);
	}

    public function actionSelect()
    {
        $p=null;
        //  if (issett($_REQUEST['error'])) $p=$error;

        $model=new TablaIngresosUnidades;

    if(isset($_POST['grafica'])){
        if ($_POST['anio']==null || empty($_POST['descrip_unidad_funcional']) || empty($_POST['descrip_categoria']) || empty($_POST['descrip_total'])){
            $model=new TablaIngresosUnidades;
            $this->render('select',array('model'=>$model));
            echo "<script>alert_graf();</script>";
            //echo "<script>alert('Recuerde que los campos con (*) son obligatorios.')</script>";
            Yii::app()->end();      
    }    
        }

    if(isset($_POST['grafica'])){
        if ($_POST['anio']<>null && isset($_POST['descrip_unidad_funcional']) && isset($_POST['descrip_categoria']) && isset($_POST['descrip_total'])){
            $model=new TablaIngresosUnidades;
            $this->render('grafica', array('model'=>$model));
            Yii::app()->end();
    }    
        }

        $this->render('select',array('error'=>$p, 'model'=>$model));
    }

    public function actionUnd()
    {
    //verifico si esta seteado
    $model = new TablaIngresosUnidades;
        if (isset($_POST['anio']))   {
        $año_u = $_POST['anio'];
                                      }

    $data=TablaIngresosUnidades::model()->findAllBySql("select distinct descrip_unidad_funcional from tabla_ingresos_unidades where anio='".$año_u."'");

        $data=CHtml::listData($data,'descrip_unidad_funcional','descrip_unidad_funcional');

        echo CHtml::tag('option',array('value'=>''),'Seleccione',true);

    foreach($data as $value=>$name)
        {
        echo CHtml::tag('option',
        array('value'=>$value),CHtml::encode($name),true);
        }
    }

    public function actionCat()
    {
    //verifico si esta seteado
    $model = new TablaIngresosUnidades;
        
        if (isset($_POST['descrip_unidad_funcional']))   
        {
        $unidad_u = $_POST['descrip_unidad_funcional'];
        }

    $data=TablaIngresosUnidades::model()->findAllBySql("select distinct descrip_total from tabla_ingresos_unidades where descrip_unidad_funcional ='".$unidad_u."'");

        $data=CHtml::listData($data,'descrip_total','descrip_total');

        echo CHtml::tag('option',array('value'=>''),'Seleccione',true);

    foreach($data as $value=>$name)
        {
        echo CHtml::tag('option',
        array('value'=>$value),CHtml::encode($name),true);
        }
    }

	public function actionTot()
    {
    //verifico si esta seteado
    $model = new TablaIngresosUnidades;

        if (isset($_POST['descrip_total']))   
        {
        $total_u = $_POST['descrip_total'];
        }

    $data=TablaIngresosUnidades::model()->findAllBySql("select distinct descrip_categoria from tabla_ingresos_unidades where descrip_total='".$total_u."'");

        $data=CHtml::listData($data,'descrip_categoria','descrip_categoria');

        echo CHtml::tag('option',array('value'=>''),'Seleccione',true);

    foreach($data as $value=>$name)
        {
        echo CHtml::tag('option',
        array('value'=>$value),CHtml::encode($name),true);
        }
    }

    public function actionParametro()
    {
        $model = new TablaIngresosUnidades;
              
        if (isset($_POST['descrip_categoria']))   
        {
        $total_u = $_POST['descrip_total'];
        $categoria_u = $_POST['descrip_categoria'];
        $año_u = $_POST['anio'];  
        $unidad_u = $_POST['descrip_unidad_funcional']; 
        }
        
        return;
    }

    public function actionExcel()
    {
        $content=$this->renderPartial('export', Yii::app()->getSession()->get('unidades_records'),true);
        yii::app()->request->sendFile("LISTADO_TOTALES_UNIDADES.xls",$content);
    }

    public function actionRubroExportToExcel_1()
    {
        $this->toExcel($_SESSION['unidades_records'],
        array(
            'idMes.descrip_mes::mes',
            'anio::año',
            'idTotal.descrip_total::nombre del total',
            'idCategoria.descrip_categoria::categoria',
            'idUnidadFuncional.descrip_unidad_funcional::unidad funcional', 
            'idTipoIngreso.descripcion_ingreso::tipo de ingreso',
            'total::monto',   
        ),
        'LISTADO_TOTALES_UNIDADES_F',
        array(
            'creator' => 'SWL',
        ),
        'Excel2007'
        );
    }

    public function actionRubroExportToExcel_2()
    {
    // Load data with a CActiveDataProvider (note that we can easily apply conditions over the result set)
    $model=TabTotalUnidades::model()->findAll();
    // Export it (note the way we define columns, the same as in CGridView, thanks to EExcelView)
    $this->toExcel($model,
        array(
            'idMes.descrip_mes::mes',
            'anio::año',
            'idTotal.descrip_total::nombre del total',
            'idCategoria.descrip_categoria::categoría',
            'idUnidadFuncional.descrip_unidad_funcional::unidad funcional', 
            'idTipoIngreso.descripcion_ingreso::tipo de ingreso',
            'total::monto',       
        ),
        'LISTADO_TOTALES_UNIDADES_C',
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
}

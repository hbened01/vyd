
<?php
class VistasPptoController extends Controller
{
	public $layout='//layouts/column2';

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
		$dataProvider=new CActiveDataProvider('VistasPpto');
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
                'actions'=>array('create','update'),
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
        $model=new VistasPpto;

        if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-create-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if(isset($_POST['VistasPpto']))
        {
            $model->attributes=$_POST['VistasPpto'];
            if($model->validate())
            {
                $this->saveModel($model);
                $this->redirect(array('view','anio'=>$model->anio, 'rubro'=>$model->rubro, 'entidad_legal'=>$model->entidad_legal, 'segmento'=>$model->segmento, 'monto'=>$model->monto, 'id_mes'=>$model->id_mes));
            }
        }
        $this->render('create',array('model'=>$model));
    } 
    
    public function actionDelete($anio, $rubro, $entidad_legal, $segmento, $monto, $id_mes)
    {
        if(Yii::app()->request->isPostRequest)
        {
            try
            {
                // we only allow deletion via POST request
                $this->loadModel($anio, $rubro, $entidad_legal, $segmento, $monto, $id_mes)->delete();
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
    
    public function actionUpdate($anio, $rubro, $entidad_legal, $segmento, $monto, $id_mes)
    {
        $model=$this->loadModel($anio, $rubro, $entidad_legal, $segmento, $monto, $id_mes);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['VistasPpto']))
        {
            $model->attributes=$_POST['VistasPpto'];
            $this->saveModel($model);
            $this->redirect(array('view',
                        'anio'=>$model->anio, 'rubro'=>$model->rubro, 'entidad_legal'=>$model->entidad_legal, 'segmento'=>$model->segmento, 'monto'=>$model->monto, 'id_mes'=>$model->id_mes));
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }
    
    public function actionAdmin()
    {
        $model=new VistasPpto('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['VistasPpto']))
            $model->attributes=$_GET['VistasPpto'];

        $this->render('admin',array(
            'model'=>$model,
        ));
    }
    
    public function actionView($anio, $rubro, $entidad_legal, $segmento, $monto, $id_mes)
    {       
        $model=$this->loadModel($anio, $rubro, $entidad_legal, $segmento, $monto, $id_mes);
        $this->render('view',array('model'=>$model));
    }
    
    public function loadModel($anio, $rubro, $entidad_legal, $segmento, $monto, $id_mes)
    {
        $model=VistasPpto::model()->findByPk(array('anio'=>$anio, 'rubro'=>$rubro, 'entidad_legal'=>$entidad_legal, 'segmento'=>$segmento, 'monto'=>$monto, 'id_mes'=>$id_mes));
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

	public function actionRubroExportToExcel_1()
    {
        $this->toExcel($_SESSION['ppto_records'],
        array(
            'rubro',
			'unidad_negocio::unidad de negocio',
			'entidad_legal::entidad legal',
			'anio::año',
			'idMes.descrip_mes::mes',
			'monto::total',
			'idTipoIngreso.descripcion_ingreso::tipo de ingreso',
			'idMoneda.descripcion_moneda::tipo de moneda',
        ),
        'INSUMOS_PRESUPUESTADOS_F',
        array(
            'creator' => 'SWL',
        ),
        'Excel2007'
        );
    }

    public function actionRubroExportToExcel_2()
    {
    // Load data with a CActiveDataProvider (note that we can easily apply conditions over the result set)
    $model=VistasPpto::model()->findAll();
    // Export it (note the way we define columns, the same as in CGridView, thanks to EExcelView)
    $this->toExcel($model,
        array(
            'rubro',
			'unidad_negocio::unidad de negocio',
			'entidad_legal::entidad legal',
			'anio::año',
			'idMes.descrip_mes::mes',
			'monto::total',
			'idTipoIngreso.descripcion_ingreso::tipo de ingreso',
			'idMoneda.descripcion_moneda::tipo de moneda', 
        ),
        'INSUMOS_PRESUPUESTADOS_C',
        array(
            'creator' => 'SWL',
        ),
        'Excel2007' // This is the default value, so you can omit it. You can export to CSV, PDF or HTML too
    );
    }

    public function actionExcel()
    {
        $content=$this->renderPartial('export', Yii::app()->getSession()->get('ppto_records'),true);
        yii::app()->request->sendFile("INSUMOS_PRESUPUESTADOS.xls",$content);
        //print_r(Yii::app()->getSession()->get('reales_records'));
        //return $_SESSION['reales_records'];
        //print_r($año_g.$unidad_g.$categoria_g.$rubro_g);
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


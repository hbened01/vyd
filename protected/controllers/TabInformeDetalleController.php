
<?php
class TabInformeDetalleController extends Controller
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
		$dataProvider=new CActiveDataProvider('TabInformeDetalle');
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
	    $model=new TabInformeDetalle;

	    if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }

	    if(isset($_POST['TabInformeDetalle']))
	    {
	        $model->attributes=$_POST['TabInformeDetalle'];
	        if($model->validate())
	        {
				$this->saveModel($model);
				$this->redirect(array('view','id_informe'=>$model->id_informe, 'id_detalle'=>$model->id_detalle));
	        }
	    }
	    $this->render('create',array('model'=>$model));
	} 
	
	public function actionDelete($id_informe, $id_detalle)
	{
		if(Yii::app()->request->isPostRequest)
		{
			try
			{
				// we only allow deletion via POST request
				$this->loadModel($id_informe, $id_detalle)->delete();
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
	
	public function actionUpdate($id_informe, $id_detalle)
	{
		$model=$this->loadModel($id_informe, $id_detalle);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TabInformeDetalle']))
		{
			$model->attributes=$_POST['TabInformeDetalle'];
			$this->saveModel($model);
			$this->redirect(array('view',
	                    'id_informe'=>$model->id_informe, 'id_detalle'=>$model->id_detalle));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionAdmin()
	{
		$model=new TabInformeDetalle('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TabInformeDetalle']))
			$model->attributes=$_GET['TabInformeDetalle'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionView($id_informe, $id_detalle)
	{		
		$model=$this->loadModel($id_informe, $id_detalle);
		$this->render('view',array('model'=>$model));
	}
	
	public function loadModel($id_informe, $id_detalle)
	{
		$model=TabInformeDetalle::model()->findByPk(array('id_informe'=>$id_informe, 'id_detalle'=>$id_detalle));
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
}

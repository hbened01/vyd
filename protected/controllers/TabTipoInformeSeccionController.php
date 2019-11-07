
<?php
class TabTipoInformeSeccionController extends Controller
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
		$dataProvider=new CActiveDataProvider('TabTipoInformeSeccion');
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
	    $model=new TabTipoInformeSeccion;

	    if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }

	    if(isset($_POST['TabTipoInformeSeccion']))
	    {
	        $model->attributes=$_POST['TabTipoInformeSeccion'];
	        if($model->validate())
	        {
				$this->saveModel($model);
				$this->redirect(array('view','id_tipo_informe'=>$model->id_tipo_informe, 'id_seccion'=>$model->id_seccion));
	        }
	    }
	    $this->render('create',array('model'=>$model));
	} 
	
	public function actionDelete($id_tipo_informe, $id_seccion)
	{
		if(Yii::app()->request->isPostRequest)
		{
			try
			{
				// we only allow deletion via POST request
				$this->loadModel($id_tipo_informe, $id_seccion)->delete();
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
	
	public function actionUpdate($id_tipo_informe, $id_seccion)
	{
		$model=$this->loadModel($id_tipo_informe, $id_seccion);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TabTipoInformeSeccion']))
		{
			$model->attributes=$_POST['TabTipoInformeSeccion'];
			$this->saveModel($model);
			$this->redirect(array('view',
	                    'id_tipo_informe'=>$model->id_tipo_informe, 'id_seccion'=>$model->id_seccion));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionAdmin()
	{
		$model=new TabTipoInformeSeccion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TabTipoInformeSeccion']))
			$model->attributes=$_GET['TabTipoInformeSeccion'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionView($id_tipo_informe, $id_seccion)
	{		
		$model=$this->loadModel($id_tipo_informe, $id_seccion);
		$this->render('view',array('model'=>$model));
	}
	
	public function loadModel($id_tipo_informe, $id_seccion)
	{
		$model=TabTipoInformeSeccion::model()->findByPk(array('id_tipo_informe'=>$id_tipo_informe, 'id_seccion'=>$id_seccion));
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

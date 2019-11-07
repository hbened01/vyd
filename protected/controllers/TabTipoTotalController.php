<?php

class TabTipoTotalController extends Controller
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
				'actions'=>array('create','update','exportToExcel'),
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
		$model=new TabTipoTotal;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TabTipoTotal']))
		{
			$model->attributes=$_POST['TabTipoTotal'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_total));
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

		if(isset($_POST['TabTipoTotal']))
		{
			$model->attributes=$_POST['TabTipoTotal'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_total));
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
		//$this->loadModel($id)->delete(); //borrado total en la tabla

		$in_stat = $this->loadModel($id); 
		$in_stat->in_stat = 'I';
		if($in_stat->save()){
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
	}

	/**
	 * Lists all models.
	 */

	/* "INDEX ORIGINAL CREADO POR GII"
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TabTipoTotal');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	*/

	public function actionIndex()
	{
		$model=new TabTipoTotal('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TabTipoTotal']))
			$model->attributes=$_GET['TabTipoTotal'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TabTipoTotal('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TabTipoTotal']))
			$model->attributes=$_GET['TabTipoTotal'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return TabTipoTotal the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=TabTipoTotal::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'La página solicitada no existe.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param TabTipoTotal $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tab-tipo-total-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionExportToExcel()
    {
    // Load data with a CActiveDataProvider (note that we can easily apply conditions over the result set)
    $model=TabTipoTotal::model()->findAll();
    // Export it (note the way we define columns, the same as in CGridView, thanks to EExcelView)
    $this->toExcel($model,
        array(
            'descrip_total::descripción del total',    
        ),
        	'LISTADO_TOTALES_COMPLETO',
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

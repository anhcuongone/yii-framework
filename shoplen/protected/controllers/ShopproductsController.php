<?php

class ShopproductsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/LayoutAdmin';

	/**
	 * @return array action filters
	 */
	/*public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}*/

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	/*public function accessRules()
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
*/
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
	
	/*public function actionView()
	{
		$id=$_GET['id'];
		if(isset($_GET['id']))
		{
			$data=Shopproducts::model()->findByPk($id);
			//$this->redirect(array('shopproducts/view','data'=>$data));
		}
		$this->render('view',array('data'=>$data));
	}
	*/
	
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Shopproducts;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Shopproducts']))
		{
			$model->attributes=$_POST['Shopproducts'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->product_id));
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
	/*public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this  ->performAjaxValidation($model);

		if(isset($_POST['Shopproducts']))
		{
			$model->attributes=$_POST['Shopproducts'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->product_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	*/
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		if(isset($_POST['Save']))
		{
			$model->category_id=$_POST['category_id'];
			$model->Ten=$_POST['Ten'];
			$model->MoTa=$_POST['MoTa'];
			$model->GiaTien=$_POST['GiaTien'];
			$model->Mau=$_POST['Mau'];
			$model->ChatLieu=$_POST['ChatLieu'];
			$model->DonVi=$_POST['DonVi'];
			$model->KichCo=$_POST['KichCo'];
			$images_path = realpath(Yii::app()->basePath . '/../images');
			if(($model->Image)!='')
			{
				unlink($images_path.'/'.$model->Image);
			}
			$model->Image=CUploadedFile::getInstance($model, 'Image');
			
			if($model->save())
			{
				$images_path = realpath(Yii::app()->basePath . '/../images');
				$model->Image->saveAs($images_path . '/' . $model->Image);
				$this->redirect(array('/shopproducts/index'));
			}
		}
		$this->render('update',array('model'=>$model));
	}
	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model=$this->loadModel($id);
		$this->loadModel($id)->delete();
		$images_path = realpath(Yii::app()->basePath . '/../images');
		unlink($images_path.'/'.$model->Image);
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		if (!isset($_GET['page']))
		{
			$_GET['page'] = 1;
		}
		$page=$_GET['page'];
		$limit = ($_GET['page']-1) * 20;
		$result='';
		$model=new Shopproducts;
		$data=Yii::app()->db->createCommand('select * from shopproducts')->query();
		$data1=Yii::app()->db
						->createCommand('select * from shopproducts s , shopcategory c where s.category_id=c.category_id limit '.$limit.', 20 ')
						->query();
		
		$this->render('index',array(
			'result'=>$result,
			'model'=>$model,
			'data'=>$data,
			'data1'=>$data1,
			'page'=>$page,
		));
	}
	public function LayDanhSachSanPham()
	{
		$data=Yii::app()->db->createCommand()->select('*')
		->from('shopproducts p')
		->join('shopcategory c','p.category_id=c.category_id')
		->query();
		return $data;
	}
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Shopproducts('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Shopproducts']))
			$model->attributes=$_GET['Shopproducts'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Shopproducts the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Shopproducts::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Shopproducts $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='shopproducts-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function LayDanhSachTheLoai()
	{
		$data=Yii::app()->db->createCommand()->select('*')->from('shopcategory')->query();
		return $data;
	}
	public function actionInsert()
	{
		$model=new Shopproducts;
		$result='';	
		if(isset($_POST['submit'])==true)
		{
			$model->category_id=$_POST['cbotheloai'];
			$model->Ten=$_POST['Ten'];
			$model->MoTa=$_POST['mota'];
			$model->GiaTien=$_POST['giatien'];
			$model->Mau=$_POST['mau'];
			$model->ChatLieu=$_POST['chatlieu'];
			$model->DonVi=$_POST['donvi'];
			$model->KichCo=$_POST['kichco'];
			$model->Image=CUploadedFile::getInstance($model, 'Image');
			if($_POST['Ten']=='' ||$_POST['mota']==''||$_POST['donvi']==''||$_POST['donvi']!='VND' ||$_POST['donvi']!='DOLA'||$model->Image=='')
				$result="Thêm không thành công";
			if($model->save())
			{
				$images_path = realpath(Yii::app()->basePath . '/../images');
				$model->Image->saveAs($images_path . '/' . $model->Image);
				//$model->Image->saveAs('C:/xampp/htdocs/shoplen/images/'.$model->Image);
				$this->redirect('index',array('result'=>$result,'model'=>$model,));
			}
			
			
		}
		if (!isset($_GET['page']))
		{
			$_GET['page'] = 1;
		}
		$page=$_GET['page'];
		$limit = ($_GET['page']-1) * 10;
		
		$data=Yii::app()->db->createCommand('select * from shopproducts')->query();
		$data1=Yii::app()->db
		->createCommand('select * from shopproducts s , shopcategory c where s.category_id=c.category_id limit '.$limit.', 10 ')
		->query();
		$this->render('index',array(
							'result'=>$result,
							'model'=>$model,
							'data'=>$data,
							'data1'=>$data1,
							'page'=>$page,
					));
	}
	public function actionDeleteall()
	{
		$images_path = realpath(Yii::app()->basePath . '/../images');
		$a=array();
		$lenght=$_POST['lenght'];
		for($i=0; $i<$lenght;$i++)
		{
			$a[$i]=$_POST['id'];
			$model=Shopproducts::model()->findByPk($a[$i]);
			$model->delete();
			if(empty($models->Image))
				unlink($images_path.'/'.$model->Image);
		}
		echo '/shoplen/index.php/shopproducts/index'; exit();
	}
	public function actionSearch($search)
	{
		$data=Yii::app()->db->createCommand("select * from shopproducts s INNER JOIN shopcategory c on s.category_id=c.category_id where s.Ten like '%".$search."%'")->query();
		$this->render('search',array('data'=>$data));
	}
}

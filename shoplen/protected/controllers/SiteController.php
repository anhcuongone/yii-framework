<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$result1=Shopcategory::model()->findByPk(1);
		$result2=Shopcategory::model()->findByPk(2);
		$result3=Shopcategory::model()->findByPk(3);
		$result4=Shopcategory::model()->findByPk(4);
		$data=Yii::app()->db->createCommand()->select('*')->from('shopproducts')->order(array('product_id DESC'))->limit(12)->query();
		$data1=Yii::app()->db->createCommand()->select('*')->from('shopproducts')->where('category_id=1')->order(array('product_id DESC'))->limit(8)->query();
		$data2=Yii::app()->db->createCommand()->select('*')->from('shopproducts')->where('category_id=2')->order(array('product_id DESC'))->limit(8)->query();
		$data3=Yii::app()->db->createCommand()->select('*')->from('shopproducts')->where('category_id=3')->order(array('product_id DESC'))->limit(8)->query();
		$data4=Yii::app()->db->createCommand()->select('*')->from('shopproducts')->where('category_id=4')->order(array('product_id DESC'))->limit(8)->query();
		$this->render('index',array('data'=>$data,
									'data1'=>$data1,
									'result1'=>$result1,
									'data2'=>$data2,
									'result2'=>$result2,
									'data3'=>$data3,
									'result3'=>$result3,
									'data4'=>$data4,
									'result4'=>$result4,
									));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	public function actionView()
	{
		$id=$_GET['id'];
		if(isset($_GET['id']))
		{
			$data=Shopproducts::model()->findByPk($id);
			//$this->redirect(array('shopproducts/view','data'=>$data));
		}
		$this->render('view',array('data'=>$data));
	}
	public function LoadDanhSachSanPham()
	{
		//echo $this->page.'sssssssssssssss';
		//$data=Yii::app()->db->createCommand()->select('*')->from('shopproducts')->order(array('product_id DESC'))->offset(20)->limit(20)->query();
		//$data=Yii::app()->db->createCommand('select * from shopproducts ORDER BY product_id DESC limit '.$limit.', 20 ')->query();
		//return $data;
	}
	public function actionViewcategoryID($id)
	{
		if (!isset($_GET['page']))
		{
			$_GET['page'] = 1;
		}
		$page=$_GET['page'];
		$limit = ($_GET['page']-1) * 20;
		$getTen=Shopcategory::model()->findByPk($id);
		$data=Yii::app()->db->createCommand('select * from shopproducts s where s.category_id='.$id.'')->query();
		$model=Yii::app()->db->createCommand('select * from shopproducts s where s.category_id='.$id.' ORDER BY s.product_id DESC limit '.$limit.', 20 ')->query();
		$this->render('_view',array(
						'model'=>$model,
						'page'=>$page,
						'getTen'=>$getTen,
						'data'=>$data,
					));
	}
	public function  actionLink($name)
	{
		echo '/shoplen/index.php/site/search?name='.$name.''; exit();
	}
	public function actionSearch($name)
	{
		if (!isset($_GET['page']))
		{
			$_GET['page'] = 1;
		}
		$page=$_GET['page'];
		$limit = ($_GET['page']-1) * 20;
		$data=Yii::app()->db->createCommand("select product_id from shopproducts where Ten like '%".$name."%'")->query();
		$model=Yii::app()->db->createCommand("select * from shopproducts where Ten like '%".$name."%' ORDER BY product_id DESC limit ".$limit.", 20 ")->query();
		$this->render('search',array('model'=>$model,'page'=>$page,'data'=>$data));
	}
	
}
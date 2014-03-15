<?php
	
class UserController extends Controller
{
	public $layout='//layouts/LayoutAdmin';
	public function actionIndex()
	{
		$result='';
		$model=new User;
		$data=$this->LoadDanhSachUser();
		$this->layout='LayoutAdmin';
		$this->render('index',array(
					'result'=>$result,
					'model'=>$model,
					'data'=>$data,
					));
	}
	public function LoadDanhSachUser()
	{
		$data=Yii::app()->db->createCommand()->select('*')->from('User')->query();
		return $data;
	}
	public function actionLogin()
	{
		$result='';
		$this->layout='LayoutNull';
		if(isset($_POST['submit'])==true)
		{
			$user=$_POST['username'];
			$pass=$_POST['password'];
			$login=Yii::app()->db->createCommand()->select('username,password')->from('user')->query();
			
			while (($row =$login->read())!=false)
			{
				if ($row['username']==$user && $row['password']==$pass)
				{
					
					$this->redirect(array('/shopproducts/index'));
					return ;
				}
			}
			$result='Đăng nhập không thành công';
		}
		$this->render('login',array('result'=>$result));
	}
	public function actionLogout()
	{
		$this->redirect('login');
	}
	public function actionInsert()
	{
		$this->layout='LayoutAdmin';
		$result='';
		$model=new User;
		$data=$this->LoadDanhSachUser();
		while ($row=$data->read())
		{
			if ($row['username']==$_POST['username'])
			{
				$result='Username đã tồn tại';
				$data=$this->LoadDanhSachUser();
				$this->render('index',array(
						'result'=>$result,
						'model'=>$model,
						'data'=>$data,
						));
				return;
			}
		}
		
		if(isset($_POST['submit']))
		{	
			if($_POST['username']=='' || $_POST['password']==''||$_POST['hoten']==''||$_POST['ngaytao']=='')
			{
				$result='Thêm không thành công';
			}
			$model->username=$_POST['username'];
			$model->password=$_POST['password'];
			$model->HoTen=$_POST['hoten'];
			$model->NgayTao=$_POST['ngaytao'];
			if($model->save())
			{
				$data=$this->LoadDanhSachUser();
				$this->redirect('index',array(
							'result'=>$result,
							'model'=>$model,
							'data'=>$data,
							));
			}
		}
		$this->render('index',array(
				'result'=>$result,
				'model'=>$model,
				'data'=>$data,
		));
	}
	public function actionDelete($id)
	{
		$model=User::model()->findByPk($id);
		$model->delete();
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}
	public function actionUpdate($id)
	{
		$model=User::model()->findByPk($id);
		if(isset($_POST['submit']))
		{
			$model->password=$_POST['password'];
			$model->HoTen=$_POST['HoTen'];
			$model->NgayTao=$_POST['NgayTao'];
			if($model->save())
			{
				$this->redirect('index');
			}
		}
		$this->render('update',array('model'=>$model));
	}
	public function actionDeleteall()
	{
		$a=array();
		$lenght=$_POST['lenght'];
		for($i=0; $i<$lenght;$i++)
		{
		$a[$i]=$_POST['id'];
		$model=User::model()->findByPk($a[$i]);
		$model->delete();
		}
		echo '/shoplen/index.php/user/index'; exit();
	}
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
<?php

class ShopcustomerController extends Controller
{
	public $layout='//layouts/LayoutAdmin';
	public function actionIndex()
	{
		if (!isset($_GET['page']))
		{
			$_GET['page'] = 1;
		}
		$page=$_GET['page'];
		$limit = ($_GET['page']-1) * 10;
		$data=Yii::app()->db->createCommand()->select('*')->from('shopcustomer')->query();
		$data1=Yii::app()->db->createCommand('select * from shopcustomer limit '.$limit.', 10 ')->query();
		$this->render('index',array('data'=>$data,'page'=>$page,'data1'=>$data1));
	}
	public function actionBuy($id)
	{
		$this->layout='//layouts/main';
		$model=new Shopcustomer();
		$data=Shopproducts::model()->findByPk($id);
		$this->render('buy',array(
						'model'=>$model,
						'data'=>$data,
					));
	}
	public function actionInsert($id)
	{
		$this->layout='//layouts/main';
		$model=new Shopcustomer();
		$data=Shopproducts::model()->findByPk($id);
		if(isset($_POST['submit']))
		{
			$model->HoTen=$_POST['HoTen'];
			$model->SDT=$_POST['SDT'];
			$model->address=$_POST['DiaChi'];
			$model->email=$_POST['Email'];
			$model->TenSP=$_POST['TenSP'];
			$model->Hinh=$_POST['Hinh'];
			$model->SoLuong=$_POST['SoLuong'];
			if($model->save())
			{
				$this->redirect('success');
			}
		}
		$this->render('buy',array('model'=>$model,'data'=>$data));
	}
	public function actionSuccess()
	{
		$this->layout='//layouts/main';
		$model=Yii::app()->db->createCommand("SELECT id FROM shopcustomer order by id DESC LIMIT 1")->query();
		while (($rows=$model->read())!=false)
		{
			$data=Shopcustomer::model()->findByPk($rows['id']);
		}
		$this->render('success',array('data'=>$data));
	}
	public function actionDeleteall()
	{
		$a=array();
		$lenght=$_POST['lenght'];
		for($i=0; $i<$lenght;$i++)
		{
		$a[$i]=$_POST['id'];
		$model=Shopcustomer::model()->findByPk($a[$i]);
		$model->delete();
		}
		echo '/shoplen/index.php/shopcustomer/index'; exit();
	}
	public function actionSearch($search)
	{
		$data=Yii::app()->db->createCommand("select * from shopcustomer where SDT like '%".$search."%'")->query();
		$this->render('search',array('data'=>$data));
	}
}
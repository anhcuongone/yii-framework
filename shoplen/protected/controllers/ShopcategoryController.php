<?php

class ShopcategoryController extends Controller
{
	public $layout='//layouts/LayoutAdmin';
	public function actionIndex()
	{
		$result=null;
		$data=$this->Loadcategory();
		$model=new Shopcategory;
		$this->render('index',array(
									'model'=>$model,
									'data'=>$data,
									'result'=>$result,
									));
	}
	public function Loadcategory()
	{
		$model=Yii::app()->db->createCommand()->select('*')->from('shopcategory')->query();
		return $model;
	}
	public function actionInsert()
	{
		$result='';
		$data=$this->Loadcategory();
		$model=new Shopcategory();
		if(isset($_POST['submit']))
		{
			if($_POST['tieude']=='')
			{
				$result='Thêm không thành công';
			}
			else
			{
				$result='Thêm thành công';
			}
			$model->title=$_POST['tieude'];
			$model->description=$_POST['MoTa'];
			$model->language=$_POST['NgonNgu'];
			$model->parent=0;
			if($model->save())
			{
				$this->redirect('index',array(
						'model'=>$model,
						'data'=>$data,
						'result'=>$result));
			}
		}
		$this->render('index',array(
					'model'=>$model,
					'data'=>$data,
					'result'=>$result));
	}
	public function actionDelete($id)
	{
		$result='Không được xóa thể loại này';
		$data=$this->Loadcategory();
		$model=new Shopcategory();
		$testpk=Yii::app()->db->createCommand()->select('category_id')->from('shopproducts')->query();
		while ($rows=$testpk->read())
		{
			if ($rows['category_id']==$id)
			{
				$this->render('index',array(
						'model'=>$model,
						'data'=>$data,
						'result'=>$result));
				return;
			}
		}
		$model=Shopcategory::model()->findByPk($id);
		$model->delete();
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}
	public function actionUpdate($id)
	{
		$model=Shopcategory::model()->findByPk($id);
		if(isset($_POST['submit']))
		{
			$model->title=$_POST['tieude'];
			$model->description=$_POST['MoTa'];
			$model->language=$_POST['NgonNgu'];
			$model->parent=0;
			if($model->save())
			{
				$this->redirect('index');
			}
		}
		$this->render('update',array('model'=>$model));
	}
	public function actionDeleteall()
	{
		$result='Không được xóa thể loại này';
		$a=array();
		$lenght=$_POST['lenght'];
					
		for($i=0; $i<$lenght;$i++)
		{
		$a[$i]=$_POST['id'];
		$model=Shopcategory::model()->findByPk($a[$i]);
		$model->delete();
		}
		echo '/shoplen/index.php/shopcategory/index'; exit();
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
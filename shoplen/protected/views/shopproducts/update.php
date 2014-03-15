<?php
/* @var $this ShopproductsController */
/* @var $model Shopproducts */

$this->breadcrumbs=array(
	'Shopproducts'=>array('index'),
	$model->product_id=>array('view','id'=>$model->product_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Shopproducts', 'url'=>array('index')),
	array('label'=>'Create Shopproducts', 'url'=>array('create')),
	array('label'=>'View Shopproducts', 'url'=>array('view', 'id'=>$model->product_id)),
	array('label'=>'Manage Shopproducts', 'url'=>array('admin')),
);
?>

<h1>Update Shopproducts <?php echo $model->product_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
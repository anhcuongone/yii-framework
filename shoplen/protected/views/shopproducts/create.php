<?php
/* @var $this ShopproductsController */
/* @var $model Shopproducts */

$this->breadcrumbs=array(
	'Shopproducts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Shopproducts', 'url'=>array('index')),
	array('label'=>'Manage Shopproducts', 'url'=>array('admin')),
);
?>

<h1>Create Shopproducts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
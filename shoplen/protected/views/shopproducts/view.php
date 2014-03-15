<?php
/* @var $this ShopproductsController */
/* @var $model Shopproducts */

/*$this->menu=array(
	array('label'=>'List Shopproducts', 'url'=>array('index')),
	array('label'=>'Create Shopproducts', 'url'=>array('create')),
	array('label'=>'Update Shopproducts', 'url'=>array('update', 'id'=>$model->product_id)),
	array('label'=>'Delete Shopproducts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->product_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Shopproducts', 'url'=>array('admin')),
);
*/
?>

<h1 id="chitietsanpham">Chi tiết sản phẩm</h1>

<table id="tbl_chitiet">
  <tr>
  	<td>
  		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$data->Image,'',array('width'=>'150','height'=>'150')) ?>
  	</td>
  </tr>
</table>

	
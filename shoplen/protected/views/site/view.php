<?php
/* @var $this ShopproductsController */
/* @var $model Shopproducts */
/* @var $form CActiveForm */
?>
<h1 id="chitietsanpham"><?php echo $data->Ten ?></h1>

<table id="tbl_chitiet">
  <tr>
  	<td>
  		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$data->Image,'',array('width'=>'250','height'=>'250')) ?>
  	</td>
  	<td>
  		<table style="width: 400px;margin-left: 30px;">
  			<thead>
  				<tr>
  					<th style="width: 100px"></th>
  					<th></th>
  				</tr>
  			</thead>
  			<tbody>
  				<tr>
  					<td><label>Tên sản phẩm: </label></td>
  					<td><?php echo $data->Ten ?></td>
  				</tr>
  				<tr>
  					<td><label>Mô tả: </label></td>
  					<td><?php echo $data->MoTa ?></td>
  				</tr>
  				<tr>
  					<td><label>Màu: </label></td>
  					<td><?php echo $data->Mau ?></td>
  				</tr>
  				<tr>
  					<td><label>Chất liệu: </label></td>
  					<td><?php echo $data->ChatLieu ?></td>
  				</tr>
  				<tr>
  					<td><label>Size: </label></td>
  					<td><?php echo $data->KichCo ?></td>
  				</tr>
  				<tr>
  					<td><label>Giá tiền: </label></td>
  					<td><span><?php echo $data->GiaTien.' '.$data->DonVi ?></span></td>
  				</tr>
  				<tr>
  					<td></td>
  					<td>
  						<a href="/shoplen/index.php/shopcustomer/buy?id=<?php echo $data->product_id ?>"><?php echo CHtml::image(Yii::app()->request->baseUrl.'/css/'.'btn-datmua.jpg') ?></a>
  					</td>
  				</tr>
  			</tbody>
  		</table>
  	</td>
  </tr>
</table>
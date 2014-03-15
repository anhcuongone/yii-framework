<?php
/* @var $this ShopcustomerController */
/* @var $model Shopcustomer */
/* @var $form CActiveForm */
?>

<div class="form">
	<div style="text-align: center; margin: 10px">
		<h1 style="font-family: Times New Roman">Thông tin sản phẩm</h1>
		<span style="font-size: medium;">
			<label>Tên sản phẩm: <?php echo $data->Ten ?></label> 
			<label>Giá tiền: <span style="color: red;"><?php echo $data->GiaTien; echo ' '; echo $data->DonVi; ?></span></label>
		</span> 
	</div>
	
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'shopcustomer-buy-form',
	'enableAjaxValidation'=>false,
	'action'=>'/shoplen/index.php/shopcustomer/insert?id='.$_GET['id'].'',
	'method'=>'POST',
)); ?>
<table id="tbl_chitiet" >
<tr>
	<td>
	<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$data->Image,'',array('width'=>'250','height'=>'250')); ?>
	</td>
	<td>
		<table style="width: 400px;margin-left: 30px;">
		<tr>
			<td><label>Họ Tên <span class="required">*</span></label></td>
			<td><?php echo $form->textField($model,'HoTen',array('size'=>'25','name'=>'HoTen')); ?>
			<?php echo $form->error($model,'HoTen'); ?></td>
		</tr>
		<tr>
			<td><label>Số điện thoại <span class="required">*</span></label></td>
			<td><?php echo $form->textField($model,'SDT',array('size'=>'25','name'=>'SDT')); ?>
			<?php echo $form->error($model,'SDT'); ?></td>
		</tr>
		<tr>
			<td><label>Địa chỉ <span class="required">*</span></label></td>
			<td><?php echo $form->textArea($model,'address',array('size'=>'25','name'=>'DiaChi')); ?>
			<?php echo $form->error($model,'address'); ?></td>
		</tr>
		<tr>
			<td><label>Email </label></td>
			<td><?php echo $form->textField($model,'email',array('size'=>'25','name'=>'Email')); ?>
			<?php echo $form->error($model,'email'); ?></td>
		</tr>
		<tr>
			<td><label>Tên sản phẩm <span class="required">*</span></label></td>
			<td><?php echo $form->textField($model,'TenSP',array('value'=>$data->Ten,'readonly'=>'readonly','name'=>'TenSP','size'=>'25',)); ?>
			<?php echo $form->error($model,'TenSP'); ?></td>
		</tr>
		<tr>
			<td><label>Số lượng <span class="required">*</span></label></td>
			<td><?php echo $form->textField($model,'SoLuong',array('size'=>'25','name'=>'SoLuong')); ?>
			<?php echo $form->error($model,'SoLuong'); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->hiddenField($model,'Hinh',array('name'=>'Hinh','value'=>$data->Image)) ?></td>
			
		</tr>
		<tr>
		<td></td>
			<td style="text-align: left;"><?php echo CHtml::submitButton('Đặt Hàng',array('name'=>'submit')); ?></td>
		</tr>
		</table>
	</td>
</tr>
</table>
<?php $this->endWidget(); ?>

</div><!-- form -->
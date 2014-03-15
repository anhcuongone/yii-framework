<?php 
/* @var $this ShopproductsController */
 /* @var $dataProvider CActiveDataProvider */ 
$obj=new ShopproductsController(null);
?>

<!-- /*Them san pham moi*/-->
<div>
	<h1>Danh sách sản phẩm </h1> 
		<div style="text-align: center; margin: 2px 2px 4px 2px">
			<button id="insert">Thêm</button>
			<button id="an">Đóng</button> 
			<label style="color: red;"><?php echo  utf8_encode($result) ?></label>
		</div>
		<div style="text-align: right;">
			<form action="/shoplen/index.php/shopproducts/search" method="get">
				<input type="text" name="search">
				<input type="submit" value="Tìm kiếm">
			</form>
		</div>
	<div id="form-insert">
		<!--  <form action="/shoplen/index.php/shopproducts/insert" method="POST">-->
		
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'shopproducts-form',
			'enableAjaxValidation'=>false,
			'action'=>'/shoplen/index.php/shopproducts/insert',
			'method'=>'POST',
			'htmlOptions' => array('enctype' => 'multipart/form-data'),
		)); ?>
			<table style="width: 650px; margin: 10px 50px 10px 150px"> 
				<tbody>
					<tr>
						<td><label>Loại Sản Phẩm:</label></td>
						<td>
							<select name="cbotheloai" style="width: 155px">
								  <?php 
								  $dong=$obj->LayDanhSachTheLoai();
								  while (($dongs=$dong->read())!=false)
								  {
								  	echo "<option value=".$dongs['category_id'].">".$dongs['title']."</option>";
								  }
								  ?>
							</select>
						</td>
						<td><label>Tên Sản Phẩm:</label></td>
						<td>
							<?php echo $form->textField($model,'Ten',array('maxlength'=>45,'name'=>'Ten')); ?>
							<?php echo $form->error($model,'Ten'); ?>
						</td>
					</tr>
					<tr>
						<td><label>Mô Tả:</label></td>
						<td>
							<?php echo $form->textField($model,'MoTa',array('maxlength'=>45,'name'=>'mota')); ?>
							<?php echo $form->error($model,'MoTa'); ?>
						</td>
						<td><label>Gía Tiền:</label></td>
						<td>
							<?php echo $form->textField($model,'GiaTien',array('maxlength'=>45,'name'=>'giatien')); ?>
							<?php echo $form->error($model,'GiaTien'); ?>
						</td>
					</tr>
					
					<tr>
						<td><label>Màu:</label></td>
						<td>
							<?php echo $form->textField($model,'Mau',array('maxlength'=>45,'name'=>'mau')); ?>
							<?php echo $form->error($model,'Mau'); ?>
						</td>
						<td><label>Chất Liệu:</label></td>
						<td>
							<?php echo $form->textField($model,'ChatLieu',array('maxlength'=>45,'name'=>'chatlieu')); ?>
							<?php echo $form->error($model,'ChatLieu'); ?>
						</td>
					</tr>
					<tr>
						<td><label>Kích Cở:</label></td>
						<td>
							<?php echo $form->textField($model,'KichCo',array('maxlength'=>45,'name'=>'kichco')); ?>
							<?php echo $form->error($model,'KichCo'); ?>
						</td>
						<td><label>Đơn Vị:</label></td>
						<td>
							<?php echo $form->textField($model,'DonVi',array('maxlength'=>45,'name'=>'donvi')); ?>
							<?php echo $form->error($model,'DonVi'); ?>
						</td>
					</tr>
					<tr>
						<td><label>Hình:</label></td>
						<td colspan="3">
							<?php echo $form->fileField($model, 'Image'); ?>
							<?php echo $form->error($model, 'Image');?>
						</td>
						<td>
							
						</td>
						<td>
							
						</td>
					</tr>
					<tr>
					<td></td><td></td>
						<td>
							<input type="submit" value="Thêm" name="submit">
							<input type="reset" name="reset" value="Hủy">
						</td>
						<td></td><td></td>
					</tr>
					<tr>
						<td>
							<label style="color: red;"></label>
						</td>
					</tr>
				</tbody>
			</table>
		
		<?php $this->endWidget(); ?>
		<!--  </form>-->
	</div>
</div>
<!--/* Hien thi danh sach san pham */-->

<div id="deleteall" style="margin-left: 25px">	
	<input type="button" value="Delete" id="test">
</div>

	<table id="tableOne" style="width: 900px"> 
		<thead> 
			<tr>
				<th><input type="checkbox" name="all" id="all"> </th>
				<th>ID</th>
				<th>Tên</th>
				<th>Loại</th>
				<th>Mô Tả</th>
				<th>Giá Tiền</th>
				<th>Màu</th>
				<th>Chất Liệu</th>
				<th>Kích Cở</th>
				<th>Đơn Vị</th>
				<th>Hình</th>
				<th>Xóa</th>
				<th>Sửa</th>
			</tr> 
		</thead> 
	<tbody>
	
		<?php
		$row=$data1; 
		while(($rows=$row->read())!=false) 
		{ 
			echo '<tr>';
			echo '<td><input type="checkbox" name="child" value="'.$rows['product_id'].'" ></td>';
			echo '<td>'. $rows['product_id']. '</td>';
			echo '<td>'. $rows['Ten']. '</td>';
			echo '<td>'. $rows['title']. '</td>';
			echo '<td>'. $rows['MoTa']. '</td>';
			echo '<td>'. $rows['GiaTien']. '</td>';
			echo '<td>'. $rows['Mau']. '</td>';
			echo '<td>'. $rows['ChatLieu']. '</td>';
			echo '<td>'. $rows['KichCo']. '</td>';
			echo '<td>'. $rows['DonVi']. '</td>';
			echo '<td>'.CHtml::image(Yii::app()->request->baseUrl.'/images/'.$rows['Image'],'',array('width'=>'60','height'=>'60')). '</td>';
			
			echo '<td>'. '<a title="Xóa" onclick="return confirm(\'Bạn thật sự muốn xóa không?\');" href='.'/shoplen/index.php/shopproducts/delete?id='.$rows['product_id'].'>
						<img src="/shoplen/assets/3ece6ff3/gridview/delete.png" alt="Delete">
						</a>' 
				.'</td>';
			echo '<td>'.'<a title="Sửa" href='.'/shoplen/index.php/shopproducts/update?id='.$rows['product_id'].'>
						<img src="/shoplen/assets/3ece6ff3/gridview/update.png" alt="Update">
						</a>'  
				.'</td>'; 
			echo '</tr>'; 
		} 
		?>
		</tbody>
	</table>

<p></p>
		<div id="pagination">
				<ul>
					<?php 
					$n=$data->count();
					$tong_so_trang= floor($n/20) + 1;
					if($n==0)
					{
						$tong_so_trang=0;
					}
					for ($i=1 ; $i<=$tong_so_trang ; $i++) 
					{	
						if ($i == $page) 
						{
							echo '['.$i.']' ;
						} 
						else 
						{
							echo '<li><a href="/shoplen/index.php/shopproducts/index?page='.$i.'">'.$i.'</a></li>';
						}
					}
					?>
				</ul>
		</div>
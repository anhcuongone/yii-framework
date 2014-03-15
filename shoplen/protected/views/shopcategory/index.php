<?php
/* @var $this ShopcategoryController */

?>
<div>
	<h1>Danh sách thể loại sản phẩm </h1> 
		<div style="text-align: center; margin: 2px 2px 4px 2px">
			<button id="insert">Thêm</button>
			<button id="an">Đóng</button> 
			<label style="color: red;"><?php echo $result ?></label>
		</div>
	<div id="form-insert">
		<!--  <form action="/shoplen/index.php/shopproducts/insert" method="POST">-->
		
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'shopcategory-form',
			'enableAjaxValidation'=>false,
			'action'=>'/shoplen/index.php/shopcategory/insert',
			'method'=>'POST',
		)); ?>
			<table style="width: 300px; margin: 10px 50px 10px 300px;"> 
				<tbody>
					<tr>
						<td><label>Tiêu Đề:</label></td>
						<td>
							<?php echo $form->textField($model,'title',array('maxlength'=>45,'size'=>'25','name'=>'tieude')); ?>
							<?php echo $form->error($model,'title'); ?>
						</td>
					</tr>
					<tr>
						<td><label>Mô Tả:</label></td>
						<td>
							<?php echo $form->textArea($model,'description',array('maxlength'=>45,'name'=>'MoTa')); ?>
							<?php echo $form->error($model,'description'); ?>
						</td>
					</tr>
					<tr>
						<td><label>Ngôn Ngữ:</label></td>
						<td>
							<?php echo $form->textField($model,'language',array('maxlength'=>45,'size'=>'25','name'=>'NgonNgu')); ?>
							<?php echo $form->error($model,'language'); ?>
						</td>
					</tr>
					
					<tr>
						<td></td>
						<td style="text-align: center;">
							<input type="submit" value="Thêm" name="submit" id="submit">
							<input type="reset" name="reset" value="Hủy">
						
						</td>
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
<div id="deleteall" style="margin-left: 25px">	
	<input type="button" value="Delete" id="delete-category">
</div>
<table id="tableOne" style="width: 900px"> 
		<thead> 
			<tr>
				<th><input type="checkbox" name="all" id="all"> </th>
				<th>ID</th>
				<th>Tiêu Đề</th>
				<th>Mô Tả</th>
				<th>Ngôn Ngữ</th>
				<th>Xóa</th>
				<th>Sửa</th>
			</tr> 
		</thead> 
	<tbody>
	
		<?php
		while(($rows=$data->read())!=false) 
		{ 
			echo '<tr>';
			echo '<td><input type="checkbox" name="child" value="'.$rows['category_id'].'" ></td>';
			echo '<td>'. $rows['category_id']. '</td>';
			echo '<td>'. $rows['title']. '</td>';
			echo '<td>'. $rows['description']. '</td>';
			echo '<td>'. $rows['language']. '</td>';
			
			echo '<td>'. '<a title="Xóa" onclick="return confirm(\'Bạn thật sự muốn xóa không?\');" href='.'/shoplen/index.php/shopcategory/delete?id='.$rows['category_id'].'>
						<img src="/shoplen/assets/3ece6ff3/gridview/delete.png" alt="Delete">
						</a>' 
				.'</td>';
			echo '<td>'.'<a title="Sửa" href='.'/shoplen/index.php/shopcategory/update?id='.$rows['category_id'].'>
						<img src="/shoplen/assets/3ece6ff3/gridview/update.png" alt="Update">
						</a>'  
				.'</td>'; 
			echo '</tr>'; 
		} 
		?>
		</tbody>
	</table>

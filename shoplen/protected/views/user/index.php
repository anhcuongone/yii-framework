<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<!-- /*Them san pham moi*/-->
<div>
	<h1>Quản Lý Người Dùng </h1> 
		<div style="text-align: center; margin: 2px 2px 4px 2px">
			<button id="insert">Thêm</button>
			<button id="an">Đóng</button> 
			<label style="color: red;"><?php echo $result ?></label>
		</div>
	<div id="form-insert">
		<!--  <form action="/shoplen/index.php/shopproducts/insert" method="POST">-->
		
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'user-form',
			'enableAjaxValidation'=>false,
			'action'=>'/shoplen/index.php/user/insert',
			'method'=>'POST',
		)); ?>
			<table style="width: 650px; margin: 10px 50px 10px 150px"> 
				<tbody>
					<tr>
						<td><label>UserName:</label></td>
						<td>
							<?php echo $form->textField($model,'username',array('maxlength'=>45,'name'=>'username')); ?>
							<?php echo $form->error($model,'username'); ?>
						</td>
						<td><label>Password:</label></td>
						<td>
							<?php echo $form->passwordField($model,'password',array('maxlength'=>45,'name'=>'password')); ?>
							<?php echo $form->error($model,'password'); ?>
						</td>
					</tr>
					<tr>
						<td><label>Họ Tên:</label></td>
						<td>
							<?php echo $form->textField($model,'HoTen',array('maxlength'=>45,'name'=>'hoten')); ?>
							<?php echo $form->error($model,'HoTen'); ?>
						</td>
						<td><label>Ngày Tạo:</label></td>
						<td>
							<?php echo $form->dateField($model,'NgayTao',array('maxlength'=>45,'name'=>'ngaytao')); ?>
							<?php echo $form->error($model,'NgayTao'); ?>
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
	</div>
</div>
<div id="deleteall" style="margin-left: 25px">	
	<input type="button" value="Delete" id="delete-user">
</div>
	<table id="tableOne" style="width: 900px"> 
		<thead> 
			<tr>
				<th><input type="checkbox" name="all" id="all"> </th>
				<th>Username</th>
				<th>Password</th>
				<th>Họ Tên</th>
				<th>Ngày Tạo</th>
				<th>Xóa</th>
				<th>Sửa</th>
			</tr> 
		</thead> 
	<tbody>
	
		<?php
		$row=$data; 
		while(($rows=$row->read())!=false) 
		{ 
			echo '<tr>';
			echo '<td><input type="checkbox" name="child" value="'.$rows['username'].'" ></td>';
			echo '<td>'. $rows['username']. '</td>';
			echo '<td>'. $rows['password']. '</td>';
			echo '<td>'. $rows['HoTen']. '</td>';
			echo '<td>'. $rows['NgayTao']. '</td>';
					
			echo '<td>'. '<a title="Xóa" onclick="return confirm(\'Bạn thật sự muốn xóa không?\');" href='.'/shoplen/index.php/user/delete?id='.$rows['username'].'>
						<img src="/shoplen/assets/3ece6ff3/gridview/delete.png" alt="Delete">
						</a>' 
				.'</td>';
			echo '<td>'.'<a title="Sửa" href='.'/shoplen/index.php/user/update?id='.$rows['username'].'>
						<img src="/shoplen/assets/3ece6ff3/gridview/update.png" alt="Update">
						</a>'  
				.'</td>'; 
			echo '</tr>'; 
		} 
		?>
		</tbody>
	</table>




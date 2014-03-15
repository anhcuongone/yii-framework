<div>
	<h1>Kết quả tìm kiếm </h1> 
	<div style="text-align: right; margin: 10px">
			<form action="/shoplen/index.php/shopcustomer/search" method="get">
				<label>Nhập số điện thoại: </label>
				<input type="text" name="search">
				<input type="submit" value="Tìm kiếm">
			</form>
	</div>
</div>
<div id="deleteall" style="margin-left: 25px">	
	<input type="button" value="Delete" id="delete-custormer">
</div>
	<table id="tableOne" style="width: 900px"> 
		<thead> 
			<tr>
				<th><input type="checkbox" name="all" id="all"> </th>
				<th>ID</th>
				<th>Họ Tên</th>
				<th>Phone</th>
				<th>Địa Chỉ</th>
				<th>Email</th>
				<th>Tên Sản Phẩm</th>
				<th>Số Lượng</th>
				<th>Hình</th>
			</tr> 
		</thead> 
	<tbody>
	
		<?php
		$row=$data; 
		while(($rows=$row->read())!=false) 
		{ 
			echo '<tr>';
			echo '<td><input type="checkbox" name="child" value="'.$rows['id'].'" ></td>';
			echo '<td>'. $rows['id']. '</td>';
			echo '<td>'. $rows['HoTen']. '</td>';
			echo '<td>'. $rows['SDT']. '</td>';
			echo '<td>'. $rows['address']. '</td>';
			echo '<td>'. $rows['email']. '</td>';
			echo '<td>'. $rows['TenSP']. '</td>';
			echo '<td>'. $rows['SoLuong']. '</td>';
			echo '<td>'.CHtml::image(Yii::app()->request->baseUrl.'/images/'.$rows['Hinh'],'',array('width'=>'100','height'=>'100')). '</td>';
			echo '</tr>'; 
		} 
		?>
		</tbody>
	</table>
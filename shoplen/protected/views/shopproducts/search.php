<?php
/* @var $this ShopproductsController */
/* @var $model Shopproducts */
/* @var $form CActiveForm */
?>
<h1 style="margin-left: 5px">Kết quả tìm kiếm </h1> 
	<div style="text-align: right; margin: 10px">
			<form action="/shoplen/index.php/shopproducts/search" method="get">
				<input type="text" name="search">
				<input type="submit" value="Tìm kiếm">
			</form>
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
		$row=$data; 
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
<div>
	<h1>Quản Lý Đặt Hàng </h1> 
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
		$row=$data1; 
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
<p></p>
		<div id="pagination">
				<ul>
					<?php 
					$n=$data->count();
					$tong_so_trang= floor($n/10) + 1;
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
							echo '<li><a href="/shoplen/index.php/shopcustomer/index?page='.$i.'">'.$i.'</a></li>';
						}
					}
					?>
				</ul>
		</div>
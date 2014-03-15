	
<div align="center" style="font-family: Times New Roman; font-size: 18px;">
	<h1 style="color: blue; text-align: center; margin: 10px">Đặt hàng thành công</h1>
	<table style="width: 400px">
		<tr>
			<td><label>Tên sản phẩm: </label></td>
			<td><?php echo $data->TenSP; ?> </td>
		</tr>
		<tr>
			<td><label>Số lượng đã đặt: </label></td>
			<td><?php echo $data->SoLuong; ?> </td>
		</tr>
		<tr>
			<td><label>Hình sản phẩm: </label></td>
			<td><?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$data->Hinh,'',array('width'=>'160','height'=>'160')) ?> </td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;"><h2 style="color: red;">Thanks You</h2></td>
			
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;"><span style="font-size: 12px">Quay về: <?php echo CHtml::link('Trang Chủ','/shoplen/index.php') ?></span></td>
		</tr>
	</table>
</div>
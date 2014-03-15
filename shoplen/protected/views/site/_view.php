<?php
/* @var $this ShopproductsController */
/* @var $model Shopproducts */
/* @var $form CActiveForm */
?>
<h1 class="main"><?php echo $getTen->title; ?></h1>
<div class="gallery">
<table id="Listtable">
	<?php 
		$str='';
		$dem =0;
		$cot = 4;
		while (($rows=$model->read())!=false)
		{
			if($dem % $cot == 0 ) 
			{ 
			  echo '<tr>'; 
			} 
				echo '<td>
					<a title="Tên Sản Phẩm: '.$rows['Ten'].' - Giá Tiền :'.$rows['GiaTien'].'" id="chitiet" href="/shoplen/index.php/site/view?id='.$rows['product_id'].'">'
					.CHtml::image(Yii::app()->request->baseUrl.'/images/'.$rows['Image'],'',array('width'=>'170','height'=>'170',)).'</a><br/>';
				echo '<span><a href="/shoplen/index.php/site/view?id='.$rows['product_id'].'">'.$rows['Ten'].'</a></span>';
				echo '<br/>';
				echo '<span>'.$rows['GiaTien'].' '.$rows['DonVi'].'</span>';
				echo '</td>';
			if($dem % $cot == ($cot - 1))
			{
				echo '</tr>';
			}
			$dem++;
		}
		?>
</table>
</div>
<p></p>
		<div id="pagination">
				<ul>
					<?php 
					$n=$data->count();
					$tong_so_trang= floor($n/20) + 1;
					/*if($n<20)
					{
						$tong_so_trang= floor($n/20) + 2;
					}*/
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
							echo '<li><a href="/shoplen/index.php/site/ViewcategoryID?id='.$_GET['id'].'&page='.$i.'">'.$i.'</a></li>';
						}
					}
					?>
				</ul>
		</div>
		<p></p>

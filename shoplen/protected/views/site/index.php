<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$obj=new SiteController(null);
?>
	<h1 class="main">Các sản phẩm mới</h1>
<div class="gallery">
<table id="Listtable">
	<?php 
		
		$str='';
		$dem =0;
		$cot = 4;
		while (($rows=$data->read())!=false)
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
	<h1 class="main"><?php echo $result1->title ?></h1>
<div class="gallery">
	<table id="Listtable">
		<?php 
			
			$str='';
			$dem =0;
			$cot = 4;
			while (($rows=$data1->read())!=false)
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
	<h1 class="main"><?php echo $result3->title ?></h1>
<div class="gallery">
	<table id="Listtable">
		<?php 
			
			$str='';
			$dem =0;
			$cot = 4;
			while (($rows=$data3->read())!=false)
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
	<h1 class="main"><?php echo $result4->title ?></h1>
<div class="gallery">
	<table id="Listtable">
		<?php 
			
			$str='';
			$dem =0;
			$cot = 4;
			while (($rows=$data4->read())!=false)
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

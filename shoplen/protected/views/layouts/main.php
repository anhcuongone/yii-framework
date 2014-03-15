<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/element.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/jquerytooltip/stickytooltip.css" />
	<!-- Jquery slide show header -->
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/css/style1.css" />
	<script language="javascript" type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/js/jquery.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/js/jquery.easing.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/js/jquery.touchSwipe.min.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/js/script.js"></script>
	<script type="text/javascript">
	 $(document).ready( function(){	
			// buttons for next and previous item						 
			var buttons = { previous:$('#jslidernews1 .button-previous') ,
							next:$('#jslidernews1 .button-next') };			
			 $('#jslidernews1').lofJSidernews( { interval : 4000,
												direction		: 'opacitys',	
												easing			: 'easeInOutExpo',
												duration		: 1200,
												auto		 	: true,
												maxItemDisplay  : 4,
	                      mobile   : true,
												navPosition     : 'horizontal', // horizontal
												navigatorHeight : 32,
												navigatorWidth  : 80,
												mainWidth		: 950,
												buttons			: buttons } );
		});
		
	</script>
	<script type="text/javascript">
	/*$(document).ready(function() { 
		   $('a[id="chitiet"]').click(function getid (){
			  var value = $(this).attr('val');
		      alert(value);
		      $.ajax(
		    	{
		    		url: '/shoplen/index.php/shopproducts/view',
					type: 'GET',
					data: {id: value},
					success: function(data) {
					alert(data);
					}
		    	});
		   });
		});*/
		$(document).ready(function () { 
			$('#submit').click(function(){
				var value= $('#search').val();
				
				 $.ajax(
					    {
					   		url: '/shoplen/index.php/site/link',
							type: 'GET',
							data: {name: value},
							success: function(data) {
								window.location.href=data;	
						}
				});
			});
		});
	</script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div id="tongthe">
<div id="container-left">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/left.png">
</div>
<div class="container" id="page">

	<div id="header">
			<!------------------------------------- THE CONTENT ------------------------------------------------->
	<div id="jslidernews1" class="lof-slidecontent" style="width:950px; height:340px;">
	    		 <!-- MAIN CONTENT --> 
	              <div class="main-slider-content" style="width:950px; height:340px;">
	              <div class="preload"><div></div></div>
	                <ul class="sliders-wrap-inner">
	                	<li>
	                      <img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/baby1.jpg" title="Newsflash 2" >           
	                    </li> 
	                    <li>
	                      <img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/baby.png" title="Newsflash 2" >           
	                    </li> 
	                    <li>
	                      <img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/baby2.jpg" title="Newsflash 2" >           
	                    </li> 
	                	<li>
	                      <img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/baby3.png" title="Newsflash 2" >           
	                    </li> 
	                    <li>
	                      <img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbl_980x340.png" title="Newsflash 2" >           
	                    </li> 
	                   <li>
	                      <img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbl_980x340_002.png" title="Newsflash 1" >           
	                         
	                    </li> 
	                   <li>
	                      <img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbl_980x340_003.png" title="Newsflash 3" >            
	                       
	                    </li> 
	                    <li>
	                      <img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbl_980x340_004.png" title="Newsflash 5" >            
	                        
	                    </li> 
	                    <li>
	                      <img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbl_980x340_005.png" title="Newsflash 5" >            
	                    </li> 
	                    <li>
	                      <img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbl_980x340_006.png" title="Newsflash 5" >               
	                    </li> 
	                     <li>
	                      <img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbl_980x340_007.png" title="Newsflash 5" >            
	                    </li> 
	                      <li>
	                      <img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbl_980x340_008.png" title="Newsflash 8" > 
	                    </li> 
	                  </ul>  	
	            </div>
	 		   <!-- END MAIN CONTENT --> 
	           <!-- NAVIGATOR -->
	           	<div class="navigator-content">
	                 
	                  <div class="navigator-wrapper">
	                        <ul class="navigator-wrap-inner">
	                        	<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbs/baby1.jpg" /></li>
	                           <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbs/baby.png" /></li>
	                           <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbs/baby2.jpg" /></li>
	                           <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbs/baby3.png" /></li>
	                           <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbs/thumbl_980x340.png" /></li>
	                           <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbs/thumbl_980x340_002.png" /></li>
	                           <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbs/thumbl_980x340_003.png" /></li>
	                           <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbs/thumbl_980x340_004.png" /></li>    
	                           <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbs/thumbl_980x340_005.png" /></li>
	                           <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbs/thumbl_980x340_006.png" /></li>       
	                           <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbs/thumbl_980x340_007.png" /></li>       
	                           <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/lofslidernews/images/thumbs/thumbl_980x340_008.png" /></li>       		
	                        </ul>
	                  </div>
	             </div> 
	          <!----------------- END OF NAVIGATOR --------------------->
	          <!-- BUTTON PLAY-STOP -->
	          <div class="button-control"><span></span></div>
	           <!-- END OF BUTTON PLAY-STOP -->
	          
	 </div> 
<!------------------------------------- END OF THE CONTENT ------------------------------------------------->
</div><!-- header -->
<!-- <?php // echo CHtml::encode(Yii::app()->name); ?> -->
	
	<div id="horizontallymenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Giới Thiệu', 'url'=>array('')),
				array('label'=>'Góp ý', 'url'=>array('')),
				array('label'=>'Liên Hệ', 'url'=>array('')),
				array('label'=>'Khuyển mại', 'url'=>array('')),
				array('label'=>'Administrator', 'url'=>array('/user/login')),
			),
			
		)); ?>
	</div>
	<div style="float: left;">
		<div id="mainmenu">
			<div id="title">Danh Mục Sản Phẩm</div>
				<?php 
					$data=Yii::app()->db->createCommand()->select('*')->from('shopcategory')->query();
					echo '<ul>';
					while(($rows=$data->read())!=false)
					{
						echo '<li><a id="hidden" href="/shoplen/index.php/site/ViewcategoryID?id='.$rows['category_id'].'">'.$rows['title'].'</a></li>';
					}
					echo '</ul>';
				?>
		</div><!-- mainmenu -->
		<div id="childmenu">
			<div id="title">Tìm Kiếm</div>
			<div style="text-align: center;">
				
				<input type="text" name="search" id="search">
				<a id="submit" href="#"><input type="submit" value="Search" name="submit" ></a>				
			</div>
		</div>
		<div id="childmenu">
			<div id="title">Đặt Hàng</div>
			<div style="text-align: center;">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/buy.png">
			<br/><label>Ms. Hồng</label><br/>
			<label>0979975467</label>
			</div>
		</div>
	</div>
	<?php echo $content; ?>
	<div class="clear"></div>

	<div id="footer">
		<label style="color: blue;">
			SHOP THỜI TRANG CỦA TÔI - Địa Chỉ : Tổ II - Phường Nghĩa Tân - TX.Gia Nghĩa - T.Đăk Nông <br/>
			Đặt hàng qua mạng: 0979975467 <br/>
			Email: hongtucau@gmail.com
		</label>
		<br/>
		Copyright &copy; <?php echo date('Y'); ?> <br/>
		<label>Powered and Designed by Cuong Ly</label>
	</div><!-- footer -->

</div><!-- page -->

<div id="container-right">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/right.png">
</div>
</div>
</body>
</html>

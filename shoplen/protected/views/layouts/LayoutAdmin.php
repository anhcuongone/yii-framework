<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin-screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/element.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
	</script>
	<script>
		$(document).ready(function(){
			$("#tableOne thead tr th:first input:checkbox").click(function() {
  	            var checkedStatus = this.checked;
  	            $("#tableOne tbody tr td:first-child input:checkbox").each(function() {
  	                this.checked = checkedStatus;
  	            });
  	            
  	        });

  			$(window).load(function(){
	  			  $('#form-insert').hide();
	  			  $('#an').hide();
	  			});
	  		
	  			$("#an").click(function(){
	  		    	$("#form-insert").hide();
	  		    	$("#insert").show();
	  		    	$('#an').hide();
	  	  		});
	  			$("#insert").click(function(){
	  	    		$("#form-insert").show();
	  	    		$("#an").show();
	  	    		$('#insert').hide();
	  	  			});
  	        
	  			$("#test").click(function(){
	  				 var allVals = [];
		  		     $("#tableOne tbody tr td input:checkbox:checked").each(function() {
		  		       allVals.push($(this).val());
		  		     });
		  		     
		  		   $.ajax({
	  					url: '/shoplen/index.php/shopproducts/deleteall',
	  					type: 'POST',
	  					data: {id:allVals, lenght:allVals.length},
	  					success: function(data) {
	  						window.location.href=data;
	  					}
	  					});
		  			});
	  			
	  			$("#delete-user").click(function(){
	  				 var allVals = [];
		  		     $("#tableOne tbody tr td input:checkbox:checked").each(function() {
		  		       allVals.push($(this).val());
		  		     });
		  		    
		  		   $.ajax({
	  					url: '/shoplen/index.php/user/deleteall',
	  					type: 'POST',
	  					data: {id:allVals, lenght:allVals.length},
	  					success: function(data) {
	  						window.location.href=data;
	  						
	  					}
	  					});
		  			});
	  			$("#delete-category").click(function(){
	  				 var allVals = [];
		  		     $("#tableOne tbody tr td input:checkbox:checked").each(function() {
		  		       allVals.push($(this).val());
		  		     });
		  		   $.ajax({
	  					url: '/shoplen/index.php/shopcategory/deleteall',
	  					type: 'POST',
	  					data: {id:allVals, lenght:allVals.length},
	  					success: function(data) {
	  						window.location.href=data;
	  					}
	  					});
		  			});
	  			
	  			$("#delete-custormer").click(function(){
	  				 var allVals = [];
		  		     $("#tableOne tbody tr td input:checkbox:checked").each(function() {
		  		       allVals.push($(this).val());
		  		     });
		  		   $.ajax({
	  					url: '/shoplen/index.php/shopcustomer/deleteall',
	  					type: 'POST',
	  					data: {id:allVals, lenght:allVals.length},
	  					success: function(data) {
	  						window.location.href=data;
	  					}
	  					});
		  			});
		});
	
</script>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo">
		</div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Quản Lý Tài Khoản', 'url'=>array('/user/index')),
				array('label'=>'Quản Lý Sản Phẩm', 'url'=>array('/shopproducts/index')),
				array('label'=>'Quản Lý Thể Loại', 'url'=>array('/shopcategory/index')),
				array('label'=>'Quản Lý Đặt Hàng', 'url'=>array('/shopcustomer/index')),
				array('label'=>'Logout', 'url'=>array('/user/logout')),
			),
		)); ?>
	</div><!-- mainmenu -->
		
	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

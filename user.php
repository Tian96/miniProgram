<?php 
	include 'key.php';
	$login_user_name = $_SESSION['user_name'];
	$login_user_img = $_SESSION['user_img'];
	$login_user_sex = $_SESSION['user_sex'];
	$login_user_openid = $_SESSION['user_openid'];
	if($login_user_sex=='1'){
		$login_user_sex='男';
	}else {
		$login_user_sex='女';
	}
?>
<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
        <meta content="yes" name="apple-mobile-web-app-capable">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <link rel="icon" href="images/favicon.ico">
        <title>微瑞微商城</title>
        <!-- Bootstrap -->
        <script src="js/jquery.min.js"></script>  
        <!--[if IE 8]>
			<script type="text/javascript" src="js/jquery.1.12.4.js"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="css/slick.css"/>
		<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
<body>
<?php include 'header.php';?> 
<div class="container-fluid">
	<div class="row clearfix">
		<div class="col-xs-12 column user">  
	     	<div class="col-xs-4 column">  
		     	<img src="<?php echo $login_user_img; ?>" class="img-responsive">	
			</div>
			<div class="col-xs-8 column" align="left">  
		     	<p class="user-name"><?php echo $login_user_name;  ?></p>
		     	<p class="user-sex"><?php echo $login_user_sex;  ?></p>
		     	<p class="user-number">用户ID:<?php echo $login_user_openid;  ?></p>
			</div>	
		</div>
		<div class="col-xs-12 column bgcolor1 margin1">  
	    	<a href="address.php"><h5>地址管理</h5></a> 	 	
		</div>
		<div class="col-xs-12 column bgcolor1 margin1">  
	    	<a href="order.php"><h5>订单查看</h5></a> 	
		</div>
	</div>
</div>
<?php include 'footer.php';?> 
</body>
</html>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>


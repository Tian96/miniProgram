<?php include 'key.php';?>
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
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
<body>
<?php include 'header.php';?> 
<div class="container-fluid" align="center">
	<?php 
		$id= $_GET['id'];
        $sql = "SELECT * FROM commodity where id='$id'";
        $result = mysqli_query($conn,$sql);
        mysqli_data_seek($result,0);
        $row = mysqli_fetch_array($result);
	?>
	<div class="row clearfix">
		<div class="col-xs-12 column goods-top">  
	     	<img src="images/<?php echo $row['img']; ?>">	
	     	<p class="goods-name"><?php echo $row['commodityname']; ?></p>
	     	<p><font class="goods-price"><?php echo $row['price']; ?></font><font class="goods-express">快递；免运费 北京发货</font></p>
	     	<form name="dingdan" method='get' action='chooseAddress.php'>
	     		<input type="hidden" class='form-control' name="g_id" value="<?php echo $id; ?>">
	     		<input type="hidden" class='form-control' name="g_img" value="<?php echo $row['img']; ?>">
	     		<input type="hidden" class='form-control' name="g_name" value="<?php echo $row['commodityname']; ?>">
	     		<input type="hidden" class='form-control' name="g_price" value="<?php echo $row['price']; ?>">
	     		<input type="submit" value="购买" class="btn btn-default btn-block goods-button">
	     	</form>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-xs-12 column margin1 bgcolor1 padding1" align="left">
			<div class="col-xs-12 column">  
		     	<h4><b>商品详情</b></h4> 	
			</div>  
	     	<div class="col-xs-12 column goods-introduce">  
		     	<?php echo $row['describe']; ?>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?> 
</body>
</html>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>


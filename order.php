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
		<link rel="stylesheet" type="text/css" href="css/slick.css"/>
		<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
<body>
<?php include 'header.php';?> 
<div class="container-fluid" align="center">
	<div class="row clearfix" align="left">
		<div class="col-xs-12 column">  
	     	<h4><b>我的订单</b></h4> 	
		</div>
	</div>
	<div class="row clearfix">
		<?php
            $login_user_openid = $_SESSION['user_openid'];
            $sql ="SELECT * FROM `cart` inner join `commodity` on `cart`.`commodityid` = `commodity`.`id` where useropenid = '".$login_user_openid."' ORDER BY `cart`.`cartid` DESC";
            $result = mysqli_query($conn,$sql);
            if(mysqli_affected_rows($conn)>0) {
                mysqli_data_seek($result,0);
                $k = 0;   
                while ($row = mysqli_fetch_array($result)) {
                	$id= $row['id'];
                    $img= $row['img'];
                    $commodityname=$row['commodityname'];
                    $price= $row['price'];
                    $address= $row['address'];
                    if($row['delivery']=='0'){
                    	$delivery= '未发货';	
                    }elseif ($row['delivery']=='1') {
                    	$delivery= '已发货';
                    }
                    $time= $row['time'];
                    $idnumber= $row['idnumber'];
					echo "<div class=\"col-xs-12 column padding1 bgcolor1 margin2\"> ";
						echo "<div class=\"col-xs-4 column goods\">";  
					     	echo "<img src=\"images/" .$img. "\" class=\"img-responsive\">	"; 
						echo "</div>";
						echo "<div class=\"col-xs-8 column goods\" align=\"left\">";  
					     	echo "<p class=\"goods-name\"><a href=\"goods.php?id=" .$id. "\">" .$commodityname. "</a></p>";
					     	echo "<p><font class=\"goods-price\">" .$price. "</font><a class=\"goods-buy\">" .$delivery. "</a></p>";
					     	echo "<p class=\"goods-time\">购买时间:" .$time. "</p>";
					     	echo "<p class=\"goods-order-number\">订单号:" .$idnumber. "</p>";
						echo "</div>";	
                        echo "<div class=\"col-xs-12 column goods padding3\" align=\"left\">";  
                            echo "<b>收货地址：</b>".$address; 
                        echo "</div>"; 
                    echo "</div>";
                }
            // 释放资源
            mysqli_free_result($result);
            }else{
                 echo "尚无数据";
            }
        ?>
	</div>
</div>
<?php include 'footer.php';?> 
</body>
</html>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>


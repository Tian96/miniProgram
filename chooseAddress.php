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
	     	<h4><b>确认订单</b></h4> 	
		</div>
	</div>
	<div class="row clearfix">
        <form name="dingdan" method='get' action='addOrder.php'>
		<?php
            $login_user_openid = $_SESSION['user_openid'];
            $sql ="SELECT * FROM `address` where addressoid = '".$login_user_openid."' ORDER BY `addressid` DESC";
            $result = mysqli_query($conn,$sql);
            if(mysqli_affected_rows($conn)>0) {
                mysqli_data_seek($result,0);
                $k = 0;  
                $g_id = $_GET['g_id'];
                $g_name = $_GET['g_name'];
                $g_img = $_GET['g_img'];
                $g_price = $_GET['g_price']; 
                echo "<div class=\"col-xs-12 column padding1 bgcolor1 margin2\"> ";
                    echo "<div class=\"col-xs-4 column goods\">";  
                        echo "<img src=\"images/" .$g_img. "\" class=\"img-responsive\">    "; 
                    echo "</div>";
                    echo "<div class=\"col-xs-8 column goods\" align=\"left\">";  
                        echo "<p class=\"goods-name\">" .$g_name. "</p>";
                        echo "<p><font class=\"goods-price\">" .$g_price. "</font></p>";
                        echo "<p class=\"goods-time\">预估送达时间 : 五天后</p>";
                    echo "</div>";   
                echo "</div>";
                echo "<div class=\"col-xs-12 column bgcolor1 margin2 padding2\" align=\"left\"> ";
                echo "<h5><b>选择地址</b></h5>"; 
                while ($row = mysqli_fetch_array($result)) {
                	$addressid= $row['addressid'];
                    $address=$row['address'];
					echo "<div class=\"radio\">"; 
                        echo "<label for=\"radios-" .$address. "\">"; 
                          echo "<input type=\"radio\" required=\"required\" name=\"address\" id=\"radios-" .$address. "\" value=\"" .$address. "\">"; 
                          echo $address; 
                        echo "</label>"; 
                    echo "</div>"; 
                    
                }
                echo "</div>";
                echo "<input type=\"hidden\" class=\"form-control\" name=\"g_id\" value=\"" .$g_id. "\">";
                echo "<input type=\"submit\" value=\"确认\" class=\"btn btn-default btn-block goods-button\">";
            // 释放资源
            mysqli_free_result($result);
            }else{
                 echo "<font style=\"color:#ff6700;margin-top:50px;font-size:18px;\">请您先添加地址~</font>";
                 echo"<meta http-equiv=\"refresh\" content=0.5;URL=address.php>";
            }
        ?>
        </form>
	</div>
</div>
<?php include 'footer.php';?> 
</body>
</html>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>


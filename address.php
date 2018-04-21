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
		<div class="col-xs-12 column" align="right">  
	     	<form class="navbar-form navbar-left address-form" role="search" method='post' action='addAddress.php'>
				<div class="form-group col-xs-10 column padding1">
					<input type="text" name="address" class="form-control" required="required"/>
				</div> 
				<div class="col-xs-2 column padding1" align="right">
					<button type="submit" class="btn btn-default">+</button>
				</div> 
			</form>
		</div>
		<div class="col-xs-12 column">  
	     	<h4><b>我的地址</b></h4> 	
		</div>
	</div>
	<div class="row clearfix">
		
		<?php
            $login_user_openid = $_SESSION['user_openid'];
            $sql ="SELECT * FROM `address` where addressoid = '".$login_user_openid."' ORDER BY `address`.`addressid` DESC";
            $result = mysqli_query($conn,$sql);
            if(mysqli_affected_rows($conn)>0) {
                mysqli_data_seek($result,0);
                $k = 0;   
                while ($row = mysqli_fetch_array($result)) {
                	$id= $row['addressid'];
                    $address= $row['address'];
					echo "<div class=\"col-xs-12 column bgcolor1 margin2 padding2\" align=\"left\"> ";
					    echo "<h5>" .$address. "</h5>"; 
					    echo "<h5><a href=\"delAddress.php?id=" .$id. "\"><font class=\"glyphicon glyphicon-trash float-right color1\"></a></font></h5>";
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


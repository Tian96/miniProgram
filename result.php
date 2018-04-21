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
	     	<h4><b>搜索结果</b></h4> 	
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-xs-12 column padding1 bgcolor1"> 
            <?php
	            $sql = "SELECT * FROM `commodity` where instr(commodityname, '".$_GET['query']."') > 0 or instr(type1, '".$_GET['query']."') > 0 or instr(type2, '".$_GET['query']."') > 0";
	            $result = mysqli_query($conn,$sql);
                if(mysqli_affected_rows($conn)>0) {
                    mysqli_data_seek($result,0);
                    $k = 0;   
                    while ($row = mysqli_fetch_array($result)) {
                        $id=$row['id'];
                        $img= $row['img'];
                        $commodityname=$row['commodityname'];
                        $describe=$row['describe'];
                        $price= $row['price'];
						echo "<div class='col-xs-6 column goods'>";
							echo "<a href='goods.php?id=" .$id. "'>";
								echo "<img class='img-responsive' src='images/" .$img. "'/>";
	                            echo "<p class='goods-name'>" .$commodityname. "</p>";
                            echo "</a>";
	                        echo "<p><font class='goods-price'>￥" .$price. "</font><a class='glyphicon glyphicon-shopping-cart goods-buy' href='addOrder.php?g_id=" .$id. "'></a></p>";
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
</div>
<?php include 'footer.php';?> 
</body>
</html>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>


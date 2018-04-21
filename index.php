<?php 
	include 'key.php';
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
<div class="container-fluid" align="center">
	<div class="row clearfix">
		<div class="col-xs-12 column padding1" id="slick1">  
	      	<a href="mother.html"><div><img src="images/lunbo1.jpg" class="img-responsive"></div></a>
	      	<a href="fushi.html"><div><img src="images/lunbo2.jpg" class="img-responsive"></div></a>
	      	<a href="tczy.html.html"><div><img src="images/lunbo3.jpg" class="img-responsive"></div></a>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-xs-5-1 column padding1">  
	     	<a class="type" href="result.php?query=服装">服装</a>	
		</div>
		<div class="col-xs-5-1 column padding1">  
	     	<a class="type" href="result.php?query=食品">食品</a>		
		</div>
		<div class="col-xs-5-1 column padding1">  
	     	<a class="type" href="result.php?query=电子">电子</a>	
		</div>
		<div class="col-xs-5-1 column padding1">  
	     	<a class="type" href="result.php?query=百货">百货</a>		
		</div>
		<div class="col-xs-5-1 column padding1">  
	     	<a class="type" href="result.php?query=美妆">美妆</a>	
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-xs-6 column padding1">  
	     	<img src="images/i1.jpg" class="img-responsive">
		</div>
		<div class="col-xs-6 column padding1">  
	     	<img src="images/i2.jpg" class="img-responsive">
		</div>
	</div>
	
	<div class="row clearfix" align="left">
		<div class="col-xs-12 column">  
	     	<h4><b>最新商品</b></h4> 	
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-xs-12 column padding1 bgcolor1">  
			<?php
                $sql = "SELECT * FROM `commodity` ORDER BY `commodity`.`id` DESC LIMIT 4";
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
                                echo "<p>" .$commodityname. "</p>";
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
	<div class="row clearfix" align="left">
		<div class="col-xs-12 column">  
	     	<h4><b>猜你喜欢</b></h4> 	
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-xs-12 column padding1 bgcolor1">  
			<?php
                $sql2 = "SELECT * FROM `commodity` ORDER BY RAND() LIMIT 3";
                $result2 = mysqli_query($conn,$sql2);
                if(mysqli_affected_rows($conn)>0) {
                    mysqli_data_seek($result2,0);
                    $k = 0;   
                    while ($row2 = mysqli_fetch_array($result2)) {
                        $id2=$row2['id'];
                        $img2= $row2['img'];
                        $commodityname2=$row2['commodityname'];
                        $describe2=$row2['describe'];
                        $price2= $row2['price'];
						echo "<div class='col-xs-12 col-sm-4 column goods'>";
                            echo "<a href='goods.php?id=" .$id2. "'>";
    							echo "<img class='img-responsive' src='images/" .$img2. "'/>";
                                echo "<p class='goods-name'>" .$commodityname2. "</p>";
                            echo "</a>"; 
                            echo "<p><font class='goods-price'>￥" .$price2. "</font><a class='glyphicon glyphicon-shopping-cart goods-buy' href='addOrder.php?g_id=" .$id2. "'></a></p>";
                            
                        echo "</div>";
                    }
                // 释放资源
                mysqli_free_result($result2);
                 // 关闭连接
                mysqli_close($conn);
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
<script type="text/javascript">
    $(document).ready(function(){
      $('#slick1').slick({
        dots: true,
        infinite: true,
        autoplay: true,
        adaptiveHeight: true,
        focusOnSelect:true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
      });
    });	      
</script>

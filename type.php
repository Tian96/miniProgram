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
<div class="container-fluid">
	<div class="row clearfix">
		<div class="col-xs-12 column padding1 goods-type" align="center">
			<div class="tabbable" id="tabs-1">
				<ul class="nav nav-tabs">
					<li class="active">
						 <a href="#panel-1" data-toggle="tab">服装</a>
					</li>
					<li>
						 <a href="#panel-2" data-toggle="tab">食品</a>
					</li>
					<li>
						 <a href="#panel-3" data-toggle="tab">电子</a>
					</li>
					<li>
						 <a href="#panel-4" data-toggle="tab">百货</a>
					</li>
					<li>
						 <a href="#panel-5" data-toggle="tab">美妆</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-1">
						<div class="col-xs-4 column">
							<a href="result.php?query=女装">
								<div>
									<img src="images/t1.jpg" class="img-responsive">
									<h5>女装</h5>
								</div>
							</a>
						</div>
						<div class="col-xs-4 column">
							<a href="result.php?query=男装">
								<div>
									<img src="images/t2.jpg" class="img-responsive">
									<h5>男装</h5>
								</div>
							</a>
						</div>
						<div class="col-xs-4 column">
							<a href="result.php?query=女鞋">
								<div>
									<img src="images/t3.jpg" class="img-responsive">
									<h5>女鞋</h5>
								</div>
							</a>
						</div>
						<div class="col-xs-4 column">
							<a href="result.php?query=男鞋">
								<div>
									<img src="images/t4.jpg" class="img-responsive">
									<h5>男鞋</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="tab-pane" id="panel-2">
						<div class="col-xs-4 column">
							<a href="result.php?query=水果">
								<div>
									<img src="images/t5.jpg" class="img-responsive">
									<h5>水果</h5>
								</div>
							</a>
						</div>
						<div class="col-xs-4 column">
							<a href="result.php?query=海鲜">
								<div>
									<img src="images/t6.jpg" class="img-responsive">
									<h5>海鲜</h5>
								</div>
							</a>
						</div>
						<div class="col-xs-4 column">
							<a href="result.php?query=肉蛋">
								<div>
									<img src="images/t7.jpg" class="img-responsive">
									<h5>肉蛋</h5>
								</div>
							</a>
						</div>
						<div class="col-xs-4 column">
							<a href="result.php?query=蔬菜">
								<div>
									<img src="images/t8.jpg" class="img-responsive">
									<h5>蔬菜</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="tab-pane" id="panel-3">
						<div class="col-xs-4 column">
							<a href="result.php?query=手机">
								<div>
									<img src="images/t9.jpg" class="img-responsive">
									<h5>手机</h5>
								</div>
							</a>
						</div>
						<div class="col-xs-4 column">
							<a href="result.php?query=电脑">
								<div>
									<img src="images/t10.jpg" class="img-responsive">
									<h5>电脑</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="tab-pane" id="panel-4">
						<div class="col-xs-4 column">
							<a href="result.php?query=保温杯">
								<div>
									<img src="images/t11.jpg" class="img-responsive">
									<h5>保温杯</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="tab-pane" id="panel-5">
						<div class="col-xs-4 column">
							<a href="result.php?query=套装">
								<div>
									<img src="images/t12.jpg" class="img-responsive">
									<h5>套装</h5>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?> 
</body>
</html>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>


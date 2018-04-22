<?php
	require_once 'public.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>微瑞微商城后台管理系统</title>
	<link rel="stylesheet" href="editor/themes/default/default.css" />
	<link rel="stylesheet" type="text/css" href="themes/css/base.css">
	<link rel="stylesheet" type="text/css" href="themes/css/home.css">
	<link rel="icon" type="image/x-icon" href="favicon.ico">

</head>
<body>


<header id="finance-header">
	<div class="finance-header">
		<div class="finance-header-content clearfix">
			<div class="finance-header-content-fl">
				<h1>微瑞微商城后台管理系统</h1>
			</div>
			<div class="finance-header-content-fr clearfix">
				<div class="finance-header-user">
					<span>
						<img src="images/logo.jpg" />
					</span>
					<em><?php echo $admin_name."管理员";  ?></em>
				</div>
				<a href="logout.php">退出</a>
			</div>
		</div>
	</div>
</header>


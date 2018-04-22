<?php
//插入连接数据库的相关信息
require_once '../key.php';
$error_msg = "";
//如果用户未登录，即未设置$_SESSION['id']时，执行以下代码
if(!isset($_SESSION['admin_id'])){
    if(isset($_POST['submit'])){//用户提交登录表单时执行如下代码
        $dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
        $user_username = mysqli_real_escape_string($dbc,trim($_POST['user']));
        $user_password = md5(mysqli_real_escape_string($dbc,trim($_POST['password'])));

        if(!empty($user_username)&&!empty($user_password)){
            $query = "SELECT admin_id, admin_name FROM admin WHERE admin_name = '".$user_username."' AND admin_password = '".$user_password."'";
            $data = mysqli_query($dbc,$query);
            //用用户名和密码进行查询，若查到的记录正好为一条，则设置SESSION，同时进行页面重定向
            if(mysqli_num_rows($data)==1){
                $row = mysqli_fetch_array($data);
                $_SESSION['admin_id']=$row['admin_id'];
                $_SESSION['admin_name']=$row['admin_name'];
                $home_url = 'index.php';    
                header('Location: '.$home_url);
            }else{//若查到的记录不对，则设置错误信息
                $error_msg = '请正确输入用户名和密码！';
            }
        }else{
            $error_msg = '请输入用户名和密码';
        }
    }
}else{//如果用户已经登录，则直接跳转到已经登录页面
    $home_url = 'index.php';
    header('Location: '.$home_url);
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>微瑞微商城后台管理系统</title>
<!--必要样式-->
<link type="text/css" rel="stylesheet" href="css/component.css" />
<!--[if IE]>
<script src="js/html5.js"></script>
<![endif]-->
</head>

<body>
<div class="container demo-1">
	<div class="content">
		<div id="large-header" class="large-header">
			<canvas id="demo-canvas"></canvas>
			<div class="logo_box">
				<h3>微瑞微商城后台管理系统</h3>
				<?php
	                if(!isset($_SESSION['user_id'])){
	                    echo '<p class="error">'.$error_msg.'</p>';
	                }
                ?>
				<form id="loginForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="input_outer">
						<span class="u_user"></span>
						<input name="user" class="text" style="color: #FFFFFF !important" type="text" placeholder="请输入账户">
					</div>
					<div class="input_outer">
						<span class="us_uer"></span>
						<input name="password" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;"value="" type="password" placeholder="请输入密码">
					</div>
					<div class="mb2"><button class="act-but submit" type="submit"  name="submit" style="color: #FFFFFF">登录</button></div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/EasePack.min.js"></script>
<script type="text/javascript" src="js/rAF.js"></script>
<script type="text/javascript" src="js/demo-1.js"></script>
</body>
</html>
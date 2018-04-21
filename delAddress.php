<?php
header('Content-Type:text/html;charset=utf-8');
//插入连接数据库的相关信息
require_once 'key.php';
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Unable to connect!".mysqli_connect_error());

mysqli_set_charset($conn,"utf8");
$id = $_GET['id'];
$login_user_openid = $_SESSION['user_openid'];
$sql = "DELETE FROM `address` WHERE `address`.`addressid` = '".$id."' AND `address`.`addressoid` = '".$login_user_openid."'";
$resault=mysqli_query($conn,$sql);
if(isset($resault)){
	mysqli_close($conn);
	echo "<meta http-equiv='refresh' content='0;url=address.php'>";	
}else{
	echo errorMessage();
	echo '删除失败';
	echo "<meta http-equiv='refresh' content='0.5;url=address.php'>";	
}
?>


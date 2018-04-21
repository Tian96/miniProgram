<?php
header('Content-Type:text/html;charset=utf-8');
//插入连接数据库的相关信息
require_once 'key.php';
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Unable to connect!".mysqli_connect_error());

mysqli_set_charset($conn,"utf8");

$login_user_openid = $_SESSION['user_openid'];
$id = $_GET['g_id'];
$address = $_GET['address'];
date_default_timezone_set('PRC');
$time =date('Y/m/d H:i:s');
$order_number = strtotime("now");
$sql = "INSERT INTO `cart` (`useropenid`,`time`,`commodityid`,`idnumber`,`address`) VALUES ('$login_user_openid','$time', '$id', '$order_number', '$address');";
mysqli_query($conn,$sql);
mysqli_close($conn);
echo '添加成功';
echo "<meta http-equiv='refresh' content='0;url=order.php'>";

?>


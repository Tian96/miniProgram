<?php
header('Content-Type:text/html;charset=utf-8');
//插入连接数据库的相关信息
require_once 'key.php';
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Unable to connect!".mysqli_connect_error());

mysqli_set_charset($conn,"utf8");

$login_user_openid = $_SESSION['user_openid'];
$address = $_POST['address'];
$sql = "INSERT INTO `address` (`address`,`addressoid`) VALUES ('$address','$login_user_openid');";
mysqli_query($conn,$sql);
mysqli_close($conn);
echo '添加成功';
echo "<meta http-equiv='refresh' content='0;url=address.php'>";

?>


<?php
require_once '../key.php';
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Unable to connect!".mysqli_connect_error());

mysqli_set_charset($conn,"utf8");
$openid = $_GET['openid'];
$sql = "DELETE FROM `user` WHERE `useropenid` = '".$openid."'";
$resault=mysqli_query($conn,$sql);
$sql2 = "DELETE FROM `cart` WHERE `useropenid` = '".$openid."'";
$resault2=mysqli_query($conn,$sql2);
$sql3 = "DELETE FROM `address` WHERE `addressoid` = '".$openid."'";
$resault3=mysqli_query($conn,$sql3);
if(isset($resault)){
	mysqli_close($conn);
echo '删除成功';
echo "<meta http-equiv='refresh' content='1;url=userList.php'>";	
}else{
	echo errorMessage();
}
?>


<?php
require_once '../key.php';
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Unable to connect!".mysqli_connect_error());

mysqli_set_charset($conn,"utf8");

$id = $_GET['id'];

$sql = "UPDATE `cart` SET `delivery` = '1' WHERE `cart`.`cartid` = '".$id."'";
mysqli_query($conn,$sql);
if(isset($sql)){
  mysqli_close($conn);
  echo '修改成功';
  echo "<meta http-equiv='refresh' content='0.1;url=orderList.php'>"; 
}else{
  echo errorMessage();
}

?>





<?php
require_once '../key.php';
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Unable to connect!".mysqli_connect_error());

mysqli_set_charset($conn,"utf8");
$id = $_GET['gid'];
$sql = "DELETE FROM `commodity` WHERE `commodity`.`id` = '".$id."'";
$resault=mysqli_query($conn,$sql);
if(isset($resault)){
	mysqli_close($conn);
echo '删除成功';
echo "<meta http-equiv='refresh' content='1;url=index.php'>";	
}else{
	echo errorMessage();
}
?>


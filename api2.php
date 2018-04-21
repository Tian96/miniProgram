<?php
  include 'key.php';
  $_SESSION['user_name']=$_GET['name'];
  $_SESSION['user_img']=$_GET['img'];
  $_SESSION['user_sex']=$_GET['sex'];
  $_SESSION['user_openid']=$_GET['oid'];
  $query = "SELECT useropenid FROM user where useropenid = '".$_GET['oid']."'";
	$data = mysqli_query($conn,$query);
  //用用户名和密码进行查询，若查到的记录正好为一条，则设置SESSION，同时进行页面重定向
  if(mysqli_num_rows($data)==1){
      $sql = "UPDATE `user` SET `username` = '".$_GET['name']."', `city` = '".$_GET['city']."', `province` = '".$_GET['province']."', `country` = '".$_GET['country']."', `sex` = '".$_GET['sex']."' WHERE `user`.`useropenid` = '".$_GET['oid']."'";
      mysqli_query($conn,$sql);
      mysqli_close($conn);
      echo"<meta http-equiv=\"refresh\" content=0;URL=index.php>";
  }else{
      $sql = "INSERT INTO `user` (`username`,`useropenid`,`city`,`province`,`country`,`sex`) VALUES ('".$_GET['name']."', '".$_GET['oid']."', '".$_GET['city']."', '".$_GET['province']."', '".$_GET['country']."', '".$_GET['sex']."')";
      mysqli_query($conn,$sql);
      mysqli_close($conn);
      echo"<meta http-equiv=\"refresh\" content=0;URL=index.php>";
  }	
?>
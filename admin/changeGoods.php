<?php
require_once '../key.php';
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Unable to connect!".mysqli_connect_error());

mysqli_set_charset($conn,"utf8");

$g_id = $_POST['g_id'];
$g_name = $_POST['g_name'];
$type1 = $_POST['type1'];
$type2 = $_POST['type2'];
$price = $_POST['price'];
$oldimg = $_POST['oldimg'];
$describe = $_POST['describe'];
$path = "../images/";

$extArr = array("png","jpg","jpeg","PNG","JPG","JPEG");

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST" and $_FILES['g_img']['name'] !=''){
  $name = $_FILES['g_img']['name'];
  $size = $_FILES['g_img']['size'];
  
  if(empty($name)){
    echo '请选择要上传的图片';
    echo "<meta http-equiv='refresh' content='1;url=index.php'>";
  }
  $ext = extend($name);
  if(!in_array($ext,$extArr)){
    echo '图片格式错误！';
    echo $ext;
    echo "<meta http-equiv='refresh' content='1;url=index.php'>";
  }
  if($size>(2*1024*1024)){
    echo '图片大小不能超过2m';
    echo "<meta http-equiv='refresh' content='1;url=index.php'>";
  }
  $image_name = date("U").".".$ext;
  $tmp = $_FILES['g_img']['tmp_name'];
  //若图片移动成功...
  if(move_uploaded_file($tmp, $path.$image_name)){
  //g_img = 图片名
    $g_img = $image_name;
  //imgarr = 图片大小
    $imgarr = getimagesize("../images/".$g_img);
  //获取原图片 资源 imgsrc（从jpeg转换）
  	if($ext=='jpeg'||$ext=='jpg'||$ext=='JPG'||$ext=='JPEG'){
  		$imgsrc = imagecreatefromjpeg("../images/".$g_img);	
  	}else if($ext=='png'||$ext=='PNG'){
  		$imgsrc = imagecreatefrompng("../images/".$g_img	);	
  	}
  //设置彩色画布 theimg 创建真彩色 底图 768*768
    $theimage = imagecreatetruecolor(768, 768);  //创建一个彩色的底图
  //图片重采样 - 原图 > 彩色画布 （0，0，w，h）>（0，0，768，768）
  imagecopyresampled($theimage, $imgsrc, 0, 0, 0, 0,768,768,$imgarr[0], $imgarr[1]);
  //输出 彩色画布 为 png 格式 （图片资源，路径+文件名，压缩程度(0低-9高)）
  imagepng($theimage,$path.$g_img,5);
  //释放此图片 的处理内存
	imagedestroy($theimage);
    $sql = "UPDATE `commodity` SET `commodityname` = '".$g_name."', `type1` = '".$type1."', `type2` = '".$type2."', `img` = '".$g_img."', `describe` = '".$describe."', `price` = '".$price."' WHERE `commodity`.`id` = '".$g_id."'";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    echo "<script>
      alert('修改成功');
      </script>";
    echo "<meta http-equiv='refresh' content='0.1;url=index.php'>";
  }else{
    echo '上传出错了！';
  }
  exit;
}else{
  $sql = "UPDATE `commodity` SET `commodityname` = '".$g_name."', `type1` = '".$type1."', `type2` = '".$type2."', `img` = '".$oldimg."', `describe` = '".$describe."', `price` = '".$price."' WHERE `commodity`.`id` = '".$g_id."'";
  mysqli_query($conn,$sql);
  mysqli_close($conn);
  echo "<script>
    alert('修改成功');
    </script>";
  echo "<meta http-equiv='refresh' content='0.1;url=index.php'>";
}
exit;




function extend($file_name){
  $extend = pathinfo($file_name);
  $extend = strtolower($extend["extension"]);
  return $extend;
}
?>





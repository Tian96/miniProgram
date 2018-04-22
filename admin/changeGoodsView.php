<?php
	include 'header.php';
	$id= $_GET['gid'];
    $sql = "SELECT * FROM commodity where id='".$id."'";
    $result = mysqli_query($conn,$sql);
    mysqli_data_seek($result,0);
    $row = mysqli_fetch_array($result);
?>


<section id="finance-content">
	<div class="finance-content clearfix">
		<?php
			include 'nav.php';
		?>
		<div class="finance-content-middle">
			<div class="finance-content-middle-title">
				<h4>修改商品</h4>
			</div>
			<div class="finance-content-middle-form">
				<form  action="changeGoods.php" method="post" enctype="multipart/form-data" autocomplete="off">
					<div class="finance-add-agent finance-add-agent-ad">
						<p>
							<label><em>*</em>商品名称：</label>
							<input type="text" name="g_name" value="<?php echo $row['commodityname']; ?>" placeholder="请输入商品名称" maxlength="100">
						</p>
						<p>
							<label><em>*</em>所属大类：</label>
							<select  name="type1">
								<option value="服装">服装</option>
								<option value="食品">食品</option>
								<option value="电子">电子</option>
								<option value="百货">百货</option>
								<option value="美妆">美妆</option>
							</select>
						</p>
						<p>
							<label><em>*</em>所属小类：</label>
							<input type="text" name="type2" value="<?php echo $row['type2']; ?>" placeholder="请输入商品所属小类" maxlength="15">
						</p>
						<p>
							<label><em>*</em>价格：</label>
							<input type="text" name="price" onkeyup="(this.v=function(){this.value=this.value.replace(/[^0-9-]+/,'');}).call(this)" onblur="this.v();"  value="<?php echo $row['price']; ?>" placeholder="请输入商品价格">
						</p>
						<p>
							<label>产品介绍：</label>
							<textarea class="form-control"  id="describe" name="describe" rows="10" style="width: 700px !important;"><?php echo $row['describe']; ?></textarea>
						</p>
						<div class="finance-add-list-up clearfix">
							<label>产品封面图：</label>
							<div id="fm_part" style="height: auto !important;width: 700px !important;" align="left">
								<p id="fm" style="width: auto;">
									<img src="../images/<?php echo $row['img']; ?>" style="width:375px;height:375px;">	
								</p>
								<input type="file" name="g_img" value="" placeholder="">
								<br>
								<p style="width: auto;">图片尺寸768x768，图片格式jpg、png、gif，图片大小2mb以内</p>
							</div>
						</div>
						<p>
							<input type="hidden" name="oldimg" value="<?php echo $row['img']; ?>">
							<input type="hidden" name="g_id" value="<?php echo $row['id']; ?>">
							<input class="finance-content-middle-form-btn finance-btn-ma1" type="submit" value="提交"></input>
						</p>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<?php
	include 'footer.php';
?>
<script>

var editor;

KindEditor.ready(function(K) {

    editor = K.create('textarea[name="describe"]', {

        allowFileManager : true

    });

    K('input[name=getHtml]').click(function(e) {

        alert(editor.html());

    });

    K('input[name=isEmpty]').click(function(e) {

        alert(editor.isEmpty());

    });

    K('input[name=getText]').click(function(e) {

        alert(editor.text());

    });

    K('input[name=selectedHtml]').click(function(e) {

        alert(editor.selectedHtml());

    });

    K('input[name=setHtml]').click(function(e) {

        editor.html('<h3>Hello KindEditor</h3>');

    });

    K('input[name=setText]').click(function(e) {

        editor.text('<h3>Hello KindEditor</h3>');

    });

    K('input[name=insertHtml]').click(function(e) {

        editor.insertHtml('<strong>插入HTML</strong>');

    });

    K('input[name=appendHtml]').click(function(e) {

        editor.appendHtml('<strong>添加HTML</strong>');

    });

    K('input[name=clear]').click(function(e) {

        editor.html('');

    });

});

</script>
<script type="text/javascript">
$("body").on("change","#fm_part input[type='file']",function(){
    var filePath=$(this).val();
    if(filePath.indexOf("jpg")!=-1 || filePath.indexOf("png")!=-1){
    	var objUrl = getObjectURL(this.files[0]) ;
        $("#fm").html("<img src=\""+objUrl+"\" style=\"width:375px;height:375px;\">");
    }else{
        $("#idcard").val("");
        alert("您未上传文件，或者您上传文件类型有误！");
        return false;
    }
});
function getObjectURL(file) {
	var url = null ;
	if (window.createObjectURL!=undefined) { // basic
	url = window.createObjectURL(file) ;
	} else if (window.URL!=undefined) { // mozilla(firefox)
	url = window.URL.createObjectURL(file) ;
	} else if (window.webkitURL!=undefined) { // webkit or chrome
	url = window.webkitURL.createObjectURL(file) ;
	}
	return url ;
}
</script>
<script type="text/javascript">
$(document).ready(function(){
  $("option[value=<?php echo $row['type1']; ?>]").attr("selected",true);
});
</script>
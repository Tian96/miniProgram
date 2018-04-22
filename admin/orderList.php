<?php
	include 'header.php';
	require_once('page.class.php'); //分页类
	$showrow = 5; //一页显示的行数
	$curpage = empty($_GET['page']) ? 1 : $_GET['page']; //当前的页,还应该处理非数字的情况
	$url = "?page={page}"; //分页地址，如果有检索条件 ="?page={page}&q=".$_GET['q']
	//省略了链接mysql的代码，测试时自行添加
	$sql ="SELECT * FROM `cart` left join `commodity` on `cart`.`commodityid` = `commodity`.`id` left join `user` on `cart`.`useropenid` = `user`.`useropenid` ORDER BY `cart`.`cartid` DESC";
	$total = mysqli_num_rows(mysqli_query($conn,$sql)); //记录总条数
	if (!empty($_GET['page']) && $total != 0 && $curpage > ceil($total / $showrow))
	    $curpage = ceil($total_rows / $showrow); //当前页数大于最后页数，取最后一页
	//获取数据
	$sql .= " LIMIT " . ($curpage - 1) * $showrow . ",$showrow;";
	$query = mysqli_query($conn,$sql);
	$k = 1;
?>
<section id="finance-content">
	<div class="finance-content clearfix">
		<?php
			include 'nav.php';
		?>
		<div class="finance-content-middle">
			<div class="finance-content-middle-title">
				<h4>订单管理</h4>
			</div>
			<div class="finance-content-middle-form">
				<!-- <div class="finance-banner-add clearfix">
					<a href="addGoodsView.php">+ 添加商品</a>
				</div> -->
				<div class="finance-add-agent finance-add-agent-color finance-add-agent-clear-a find">
					<table>
						<tbody>
							<tr>
								<th>序号</th>
								<th>商品名</th>
								<th>图片</th>
								<th>价格</th>
								<th>购买人</th>
								<th>购买时间</th>
								<th>送货地址</th>
								<th>状态</th>
								<th>操作</th>
							</tr>
							<?php while ($row = mysqli_fetch_array($query)) { ?>
								<tr>
									<td><?php echo $k; ?></td>
									<td><?php echo $row['commodityname']; ?></td>
									<td><img src="../images/<?php echo $row['img']; ?>" alt="" class="list-img"></td>
									<td><?php echo $row['price']; ?></td>
									<td><?php echo $row['username']; ?></td>
									<td><?php echo $row['time']; ?></td>
									<td><?php echo $row['address']; ?></td>
									<td>
										<?php 
											if($row['delivery']=='0'){
						                    	$delivery_text = '未发货';	
						                    }elseif ($row['delivery']=='1') {
						                    	$delivery_text = '已发货';
						                    } 
						                    echo $delivery_text;
					                    ?>
					                </td>
									<td>
										<?php 
											if($row['delivery']=='0'){
						                    	echo "<a href=\"changeOrder.php?id=".$row['cartid']."\">发货</a>";
						                    }
					                    ?>
									</td>
								</tr>
							<?php 
								$k++;
							} 
							?>
						</tbody>
					</table>
				</div>
				<div class="finance-page clearfix" style="float: left;">
					<?php
			            if ($total > $showrow) {//总记录数大于每页显示数，显示分页
			                $page = new page($total, $showrow, $curpage, $url, 2);
			                echo $page->myde_write();
			            }
		            ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
	include 'footer.php';
?>
<?php  
		$sql_category = mysqli_query($conn, "SELECT * FROM tbl_category ORDER BY category_id DESC");
	?>
	<div>
		<ul id="main-menu">
			<li class="border-right">
				<a href="" class="main-menu-a"><span><i class="fa-solid fa-bars"></i></span> DANH MỤC</a>
					<ul class="sub-menu">
						<li>
						<?php  
							$sql_category_danhmuc = mysqli_query($conn,'SELECT * FROM tbl_category ORDER BY category_id DESC');
							while ($row_category_danhmuc = mysqli_fetch_array($sql_category_danhmuc)) {
						?>
							<a href="product.php?category_id=<?php echo $row_category_danhmuc['category_id'] ?> ">
								<?php echo $row_category_danhmuc['category_name']  ?> <span><i class="fa-solid fa-chevron-right"></i></span>
							</a>	
						<?php } ?>							
						</li>

					</ul>
			</li>
			<li class="border-right"><a href="myorder.php" class="main-menu-a">XEM ĐƠN HÀNG</a></li>
			<li class="border-right"><a href="gioithieu.php" class="main-menu-a">GIỚI THIỆU</a></li>
			<li class="border-right"><a href="chinhsach.php" class="main-menu-a">CHÍNH SÁCH</a></li>
			<li class="border-right"><a href="hotro.php" class="main-menu-a">HỖ TRỢ</a></li>
			
		</ul>
	</div>
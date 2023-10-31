<?php  
	include_once('db/connect.php');
	if(isset($_GET['category_id'])){
		$id = $_GET['category_id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>3TL</title>
	<link rel = "stylesheet" href="css/style.css"/>
	<link rel = "stylesheet" href="css/reset.css"/>
	<link rel = "stylesheet" href="css/header.css"/>
	<link rel = "stylesheet" href="css/menu.css"/>
	<link rel = "stylesheet" href="css/slide.css"/>
	<link rel = "stylesheet" href="css/footer.css"/>
	<link rel = "stylesheet" href="css/product-page.css"/>
	<link rel="stylesheet" href="font/fontawesome-free-6.2.0/css/all.css">
</head>
<body>
	<!-- ------------------------------------ Header--------------------------------------- -->
	<?php
		include('include/topbar.php');
	?>
	<!-- ------------------------------------ Header--------------------------------------- -->
	
	<!-- ------------------------------------ Menu --------------------------------------- -->
	<?php
		include('include/menu.php');
	?>
	<!-- ------------------------------------ Menu --------------------------------------- -->

	<!-- ------------------------------------ San Pham ----------------------------------- -->
	<div class="product-container">
	<!-- ------------------------------------ Slidebar --------------------------------------- -->
	<div class="product-container-page2">
		<div class="slide-bar-container">
			<div class="filter-brand-container">
				<span class="filter-brand-title">Tìm theo hãng</span>
				<ul class="filter-brand-list">
					<li><a href="">iPhone</a></li>
					<li><a href="">Samsung</a></li>
					<li><a href="">Oppo</a></li>
					<li><a href="">Xiaomi</a></li>
					<li><a href="">Vivo</a></li>
					<li><a href="">Realme</a></li>
					<li><a href="">Nokia</a></li>
					<li><a href="">Mobell</a></li>
					<li><a href="">itel</a></li>
					<li><a href="">Masstel</a></li>
				</ul>
			</div>
			<div class="filter-star_rating-container">
				<span class="filter-brand-title">Tìm theo đánh giá</span>
				<div class="star five-star">
					<span>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
					</span>
				</div>
				<div class="star four-star">
					<span>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star none-color"></i>
					</span>
				</div>
				<div class="star three-star">
					<span>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star none-color"></i>
						<i class="fa-solid fa-star none-color"></i>
					</span>
				</div>
				<div class="star two-star">
					<span>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star none-color"></i>
						<i class="fa-solid fa-star none-color"></i>
						<i class="fa-solid fa-star none-color"></i>
					</span>
				</div>
				<div class="star one-star">
					<span>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star none-color"></i>
						<i class="fa-solid fa-star none-color"></i>
						<i class="fa-solid fa-star none-color"></i>
						<i class="fa-solid fa-star none-color"></i>
					</span>
				</div>
			</div>
		</div>
	<!-- ------------------------------------ Slidebar --------------------------------------- -->
		<div id="product-list-page2">
			<ul class="product">
				<?php  
					$sql_category_sanpham = mysqli_query($conn,"SELECT * FROM tbl_sanpham WHERE category_id = '$id' ORDER BY sanpham_id DESC");
					while ($row_sanpham = mysqli_fetch_array($sql_category_sanpham)) {
				?>
				<li>					
					<div class="product-item">

						<div class="product-top">
							<a href="single.php?id=<?php echo $row_sanpham['sanpham_id'] ?>" class="product-img">
								<img src="uploads/<?php echo $row_sanpham['sanpham_img'] ?>">
							</a>
						</div>
						<div class="product-info">
							<a href="single.php?id=<?php echo $row_sanpham['sanpham_id'] ?>" class="product-name"><?php echo $row_sanpham['sanpham_name'] ?></a>
							<div class="product-price"><?php echo number_format($row_sanpham['sanpham_gia']).'đ' ?></div>
						</div>
					</div>					
				</li>
				<?php } ?>										
			</ul>
		</div>	
	</div>
	</div>
	<!-- ------------------------------------ San pham ------------------------------------ -->

	<!-- ------------------------------------ Footer ------------------------------------ -->
	<footer>
		<ul class="infomation">
			<li>
			<div id="info1" class="info">			
				<a href="index.html" id="logo-footer">
					<img src="img/logo-footer.png">
				</a>
			</div>
			</li>

			<li>
			<div id="info2" class="info">
				<h3>MAIN MENU</h3>
				<ul class="footer-menu">
					<li><a href="index.html">DANH MỤC</a></li>
					<li><a href="">ƯU ĐÃI</a></li>
					<li><a href="">GIỚI THIỆU</a></li>
					<li><a href="">CHÍNH SÁCH</a></li>
					<li><a href="">TIN TỨC</a></li>
				</ul>
			</div>
			</li>

			<li>
			<div id="info3" class="info">
				<h3>LIÊN HỆ</h3>
				<div id="footer-info">
					<ul class="ul-footer-info">
						<li>
							<span> Tên công ty: Thoai - Luan - Trung</span>
						</li>
						<li>
							<span>Hotline: 071xxxxxxx</span>
						</li>
						<li>
							<span>Địa chỉ cửa hàng: Mỹ An A, Mỹ Thạnh An, TP.Bến Tre</span>
						</li>
						<li>
							<span>Mail: luan020101017@tgu.edu.vn</span>
						</li>
					</ul>			
				</div>
			</div>
			</li>

			<li>
				<div id="info4" class="info">
					<h3>KẾT NỐI VỚI CHÚNG TÔI</h3>
				</div>
				<div class="info-bottom">
					<a href="https://www.facebook.com/luantruong020302"><span><i class="fa-brands fa-facebook"></i></span></a>	
					<a href=""><span><i class="fa-brands fa-instagram"></i></span></a>				
					<a href=""><span><i class="fa-brands fa-youtube"></i></span></a>
				</div>
			</li>
		</ul>
		<div class="hr-info-bottom">
			<hr>
		</div>
		<div id="copyright"> 
	    	<p>Copyright © 2022 TLT. Powered by Le Vinh Thoai - Truong Hoang Luan - Nguyen Quang Trung</p>
	    </div>
	</footer>
</body>
</html>
<?php } ?>
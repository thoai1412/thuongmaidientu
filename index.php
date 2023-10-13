<?php  
	include_once('db/connect.php');
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thoại - Luân -  Trung </title>
	<link rel = "stylesheet" href="css/style.css"/>
	<link rel = "stylesheet" href="css/reset.css"/>
	<link rel = "stylesheet" href="css/header.css"/>
	<link rel = "stylesheet" href="css/menu.css"/>
	<link rel = "stylesheet" href="css/slide.css"/>
	<link rel = "stylesheet" href="css/footer.css"/>
	<link rel="stylesheet" href="font/fontawesome-free-6.2.0/css/all.css">
</head>

<body>
	<!-- ------------------------------------ Header--------------------------------------- -->
	<?php
	if (isset($_SESSION['id_user'])) {
		include('include/topbar2.php');		
	} else
		include('include/topbar.php');
	?>
	<!-- ------------------------------------ Header--------------------------------------- -->
	
	<!-- ------------------------------------ Menu --------------------------------------- -->
	<?php
		include('include/menu.php');
	?>
	<!-- ------------------------------------ Menu --------------------------------------- -->

	<!-- ------------------------------------ Slide--------------------------------------- -->
	<?php
		include('include/slider.php');
	?>
	<!-- ------------------------------------ Slide--------------------------------------- -->

	<!-- ------------------------------------ Brand --------------------------------------- -->
	<div id="title-center"><h3>THƯƠNG HIỆU NỔI BẬT</h3></div>
	<div id="brand-container">
		<ul class="brand-list">
			<li>
				<a href="">
					<img src="img/brand-img/iphone.png" class="brand-img">
				</a>
			</li>
			<li>
				<a href="">
					<img src="img/brand-img/samsung.png" class="brand-img">
				</a>
			</li>
			<li>
				<a href="">
					<img src="img/brand-img/oppo.png" class="brand-img">
				</a>
			</li>
			<li>
				<a href="">
					<img src="img/brand-img/xiaomi.png" class="brand-img">
				</a>
			</li>
			<li>
				<a href="">
					<img src="img/brand-img/vivo.png" class="brand-img">
				</a>
			</li>
			<li>
				<a href="">
					<img src="img/brand-img/realmi.png" class="brand-img">
				</a>
			</li>
			<li>
				<a href="">
					<img src="img/brand-img/nokia.png" class="brand-img">
				</a>
			</li>
			<li>
				<a href="">
					<img src="img/brand-img/mobell.png" class="brand-img">
				</a>
			</li>
			<li>
				<a href="">
					<img src="img/brand-img/itel.png" class="brand-img">
				</a>
			</li>
			<li>
				<a href="">
					<img src="img/brand-img/masstel.png" class="brand-img">
				</a>
			</li>
		</ul>
	</div>
	<!-- ------------------------------------ Brand --------------------------------------- -->

	<!-- ------------------------------------ San Pham ----------------------------------- -->
	<div class="product-container">
		<div id="title-center"><h3>SẢN PHẨM HOT</h3></div>
		<div id="product-list">
			<ul class="product">
				<?php  
										
							$sql_category_sanpham = mysqli_query($conn,'SELECT * FROM tbl_sanpham ORDER BY sanpham_id ASC');
							while ($row_sanpham = mysqli_fetch_array($sql_category_sanpham)) {
								if (isset($_SESSION['id_user'])) {	
							
					?>
				<li>					
					<div class="product-item">

						<div class="product-top">
							<a href="single.php?id_user=<?php echo $id_user ?>&id=<?php echo $row_sanpham['sanpham_id'] ?>" class="product-img">
								<img src="uploads/<?php echo $row_sanpham['sanpham_img'] ?>">
							</a>
						</div>
						<div class="product-info">
							<a href="single.php?id_user=<?php echo $id_user ?>&id=<?php echo $row_sanpham['sanpham_id'] ?>" class="product-name"><?php echo $row_sanpham['sanpham_name'] ?></a>
							<div class="product-price"><?php echo number_format($row_sanpham['sanpham_gia']).'đ' ?></div>
						</div>
					</div>					
				</li>
				<?php } else { ?>	
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
				<?php } } ?>								
			</ul>
		</div>
		<div class="seeall-container">
			<a href="product.php?category_id=1" id="seeall">Xem tất cả sản phẩm <i class="fa-solid fa-arrow-right"></i></a>
		</div>		
	</div>
	<!-- ------------------------------------ San pham ------------------------------------ -->

	<!-- ------------------------------------ Email ------------------------------------ -->
	<div id="title-center"><h3>ĐĂNG KÝ ĐỂ NHẬN TIN ƯU ĐÃI</h3></div>
	<div id="email-box">
		<label>
			<input type="text" placeholder="Hãy nhập Email của bạn">
			<button>ĐĂNG KÝ</button>
		</label>
	</div>
	<!-- ------------------------------------ Email ------------------------------------ -->

	<!-- ------------------------------------ Footer ------------------------------------ -->
	<?php
		include('include/footer.php');
	?>
	<!-- ------------------------------------ Footer ------------------------------------ -->	
</body>
</html>
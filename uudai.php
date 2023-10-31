<?php  
	include_once('db/connect.php');
	session_start();
?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ưu đãi</title>
	<link rel = "stylesheet" href="css/style.css"/>
	<link rel = "stylesheet" href="css/reset.css"/>
	<link rel = "stylesheet" href="css/header.css"/>
	<link rel = "stylesheet" href="css/menu.css"/>
	<link rel = "stylesheet" href="css/slide.css"/>
	<link rel = "stylesheet" href="css/footer.css"/>
	<link rel = "stylesheet" href="css/uudai.css"/>
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

	<div class="tong-uudai">
		<div class="info-tong">
			<h2>Một tháng mới lại bắt đầu, mọi thứ mới lại đến. Chỉ có khuyến mãi ở <a href="uudai.html">3TL</a> vẫn nhiều và khủng như mọi khi với loạt điện thoại ưu đãi siêu khủng, bạn làm sao có thể ngăn mình không xuống tiền để sắm cho mình một vài em smartphone mới. Tham khảo ngay!
			</h2>
			<p class="info-uudai">
				<strong>Thời gian ưu đãi: </strong>Từ ngày 10/10/2022 đến 10/1/2023
			</p>
			<p class="info-uudai">
				<strong>Lưu ý: </strong>
			</p>
			<ul class="luuy">
				<li>Khuyến mãi có thể kết thúc sớm nếu hết số lượng sản phẩm hoặc thông tin khuyến mãi có thay đổi.</li>
				<li>Một số khuyến mãi chỉ áp dụng khi đặt mua online.</li>
				<li>Một số ô sản phẩm không hiện giá giảm, để được giảm giá, khách hàng cần chọn ưu đãi Giảm giá.</li>
			</ul>
		</div>
	</div>
	<!-- ------------------------------------ Footer ------------------------------------ -->
	<?php
		include('include/footer.php');
	?>
	<!-- ------------------------------------ Footer ------------------------------------ -->	
</div>
</body>
</html>
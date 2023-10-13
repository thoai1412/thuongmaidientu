<?php  
	include_once('db/connect.php');
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đặt hàng thành công</title>
	<link rel = "stylesheet" href="css/style.css"/>
	<link rel = "stylesheet" href="css/reset.css"/>
	<link rel = "stylesheet" href="css/header.css"/>
	<link rel = "stylesheet" href="css/menu.css"/>
	<link rel = "stylesheet" href="css/slide.css"/>
	<link rel = "stylesheet" href="css/footer.css"/>
	<link rel = "stylesheet" href="css/dathangthanhcong.css"/>
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
	<div class="box-container">
		<img src="img/checked.png" width="200px">
		<h1>Đặt hàng thành công</h1>
		<div class="box-button-container">
			
			<?php
			if (isset($_SESSION['id_user'])) {
			?>
				<button><a href="index.php">Trang chủ</a></button>
				<button><a href="myorder.php">Xem đơn hàng</a></button>
			<?php	
			} 
			?>
			
		</div>
	</div>

	<!-- ------------------------------------ Footer ------------------------------------ -->
	<?php
		include('include/footer.php');
	?>
	<!-- ------------------------------------ Footer ------------------------------------ -->	
</body>
</html>
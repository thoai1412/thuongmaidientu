<?php  
	include_once('db/connect.php');
	session_start();
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đơn hàng</title>
	<link rel = "stylesheet" href="css/style.css"/>
	<link rel = "stylesheet" href="css/reset.css"/>
	<link rel = "stylesheet" href="css/header.css"/>
	<link rel = "stylesheet" href="css/menu.css"/>
	<link rel = "stylesheet" href="css/slide.css"/>
	<link rel = "stylesheet" href="css/footer.css"/>
	<link rel = "stylesheet" href="css/myorder.css"/>
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
	<form method="POST" class="formtimdonhang">

	<div><input type="text" placeholder="Số điện thoại đặt hàng của quý khách" name="sdtdathang" <?php if(isset( $_SESSION['sdt']))
	{
	?> value="<?php echo $_SESSION['sdt']?>"
	<?php
	}
	?> >
	</div>
	<div class="btsdt">
	<button class="timdonhang" name="timdonhang">Tìm</button>
	</div>
	</form>
	 <?php 
       if (isset($_POST['timdonhang']))
       {
         	$sdt=$_POST['sdtdathang'];
            $sql ="SELECT * FROM tbl_donhang WHERE khachhang_phone LIKE '$sdt'";
			$result = mysqli_query($conn,$sql);
			while ($row = mysqli_fetch_array($result)){
         ?>
	<div class="myorder-container">
		<ul>
			<li>
				<div>
					<h3>Mã đơn hàng:</h3>
					<span><?php echo $row['donhang_id']?></span>
				</div>
				<div>
					<h3>Sản phẩm:</h3>
					<span><?php echo $row['sanpham_name']?></span>
				</div>
				<div>
					<h3>Tổng tiền thanh toán:</h3>
					<span><?php echo number_format($row['donhang_gia']).'đ'?></span>
				</div>
				<div>
					<h3>Thời gian đặt hàng:</h3>
					<span><?php echo $row['ngaydat']?></span>
				</div>
				<div>
					<h3>Tình trạng đơn hàng:</h3>
					<?php if($row['donhang_tinhtrang']==0 ){?>
					<span style="color:red">Chưa xử lý</span> 
					<?php } if($row['donhang_tinhtrang']==1 ){?>
					<span style="color:green">Đã xử lý</span>
					<?php
					}
				?> 
					
				</div>
						
			</li>
		</ul>
	</div>
	<?php
	}
	?>
	<?php
 	}
	?>
	<!-- ------------------------------------ Footer ------------------------------------ -->
	<?php
		include('include/footer.php');
	?>
	<!-- ------------------------------------ Footer ------------------------------------ -->	
</body>
</html>

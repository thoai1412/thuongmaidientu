<?php  
	include_once('db/connect.php');
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hỗ trợ</title>
	<link rel = "stylesheet" href="css/style.css"/>
	<link rel = "stylesheet" href="css/reset.css"/>
	<link rel = "stylesheet" href="css/header.css"/>
	<link rel = "stylesheet" href="css/menu.css"/>
	<link rel = "stylesheet" href="css/slide.css"/>
	<link rel = "stylesheet" href="css/footer.css"/>
	<link rel = "stylesheet" href="css/support.css"/>
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
	<?php 
		if (isset($_POST['hotro'])) {
			$chude = $_POST['chude'];
			$tieude = $_POST['tieude'];
			$noidung = $_POST['noidung'];
			$hoten = $_POST['hoten'];
			$email = $_POST['email'];
			$sdt = $_POST['phone'];
			$sql_hotro = mysqli_query($conn,"INSERT INTO tbl_hotro(hotro_hoten, hotro_email, hotro_sdt, hotro_tieude, hotro_noidung, hotro_chude) VALUES ('$hoten','$email','$sdt','$tieude','$noidung','$chude')");
			?>
			<script type="text/javascript">
				alert('Gửi hỗ trợ thành công!');
			</script>
			<?php
		}
	?>
	<div class="hotro-tong">
		<div class="hotro1">
			<form method="POST">
				<h1 class="hotro1-1">3TL XIN HÂN HẠNH HỖ TRỢ QUÝ KHÁCH</h1>
				<div class="hotro1-2">
					<div class="hotro1-2-1">
						<label>Quý khách đang quan tâm về <strong>*</strong></label>						
						<select name="chude">
							<option value disabled selected>Chọn chủ đề</option>
							<option value="Tư vấn">Tư vấn</option>
							<option value="Khiếu nại">Khiếu nại</option>
							<option value="Hợp tác với 3TL">Hợp tác với 3TL</option>
							<option value="Góp ý">Góp ý</option>
						</select>
					</div>
					<div class="hotro-tieude">
						<div class="hotro-tieude-1">
							<label>Tiêu đề <strong>*</strong></label>
							
						</div>
						<div class="hotro-tieude-2">
							<input class="hotro-tieude-2-1" type="text" name="tieude">
						</div>
					</div>
					<div class="hotro-noidung">
						<div class="hotro-noidung-1">
							<label>Nội dung <strong>*</strong></label>
							
						</div>
						<div class="hotro-noidung-2">
							<textarea cols="50" rows="10" name="noidung"></textarea>
						</div>
					</div>
					<div class="hotro-hoten">
						<div class="hotro-hoten-1">
							<label>Họ và tên <strong>*</strong></label>							
						</div>
						<div class="hotro-hoten-2">
							<input class="hotro-hoten-2-1" type="text" name="hoten">
						</div>
					</div>
					<div class="hotro-email">
						<div class="hotro-email-1">
							<label>Email <strong>*</strong></label>							
						</div>
						<div class="hotro-email-2">
							<input class="hotro-email-2-1" type="text" name="email">
						</div>
					</div>
					<div class="hotro-dt">
						<div class="hotro-dt-1">
							<label>SĐT <strong>*</strong></label>							
						</div>
						<div class="hotro-dt-2">
							<input class="hotro-dt-2-1" type="text" name="phone">
						</div>
					</div>
				</div>
				<div>
					<button class="button" name="hotro" type="submit">Gửi Liên Hệ</button>
				</div>
			</form>
		</div>
		<div class="hotro2">
			<h3>THÔNG TIN LIÊN HỆ KHÁC</h3>
			<hr width="500" align="left">
			<div class="content">
				<p>Báo chí, hợp tác: liên hệ <a href="">luan020101017@tgu.edu.vn</a></p>
				<p>Tổng đài tư vấn, hỗ trợ khách hàng (7h30 đến 22h):<span class="tel">071xxxxxxx</span></p>
				<p>Tổng đài khiếu nại:<span class="tel">071xxxxxxx</span></p>
				<p>Email: <a href="">luan020101017@tgu.edu.vn</a></p>
			</div>
		</div>
	</div>
<!-- ------------------------------------ Footer ------------------------------------ -->
	<?php
		include('include/footer.php');
	?>
	<!-- ------------------------------------ Footer ------------------------------------ -->
</body>
</html>
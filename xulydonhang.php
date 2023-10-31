<?php  
	include_once('db/connect.php');
	session_start();
	if(isset($_SESSION['id_admin'])){
		$id = $_SESSION['id_admin'];
		$sql_select_id_admin = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE admin_id='$id'"); 	
?>
<?php 
	$sql_select_donhang = mysqli_query($conn, "SELECT * FROM tbl_donhang ORDER BY tbl_donhang.donhang_id DESC");
?>

<!-- ---------------------------- Update tinh trang don hang ----------------------------- -->
<?php  
	if (isset($_POST['capnhatdonhang'])) {
		$xuly = $_POST['xu_ly_tinh_trang'];
		$mahang_xuly = $_POST['mahang_xuly'];
		$sql_update_donhang = mysqli_query($conn,"UPDATE tbl_donhang SET donhang_tinhtrang = '$xuly' WHERE donhang_id = '$mahang_xuly'");
?>
	<script type="text/javascript">
		alert("Đã cập nhật tình trạng đơn hàng. Vui lòng tải lại trang!");
		window.location.href = 'xulydonhang.php';
	</script>  
<?php } ?>
<!-- ---------------------------- Update tinh trang don hang ----------------------------- -->

<!-- ---------------------------- xoa don hang ----------------------------- -->
<?php  
	if(isset($_GET['xoadonhang'])){
		$id=$_GET['xoadonhang'];
		$sql_donhang = mysqli_query($conn,"DELETE FROM tbl_donhang WHERE donhang_id='$id'"); 
		?>
		<script type="text/javascript">
			alert("Đã xoá đơn hàng. Vui lòng tải lại trang!");
			window.location.href = 'xulydonhang.php';
		</script>  
<?php
	}
?>
<!-- ---------------------------- xoa don hang ----------------------------- -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link rel = "stylesheet" href="css/style.css"/>
	<link rel = "stylesheet" href="css/reset.css"/>
	<link rel = "stylesheet" href="css/admin.css"/>
	<link rel="stylesheet" href="font/fontawesome-free-6.2.0/css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>	
</head>
<body>
<!-- ------------------------------------ Slidebar --------------------------------------- -->
	<nav class="slidebar">
		<div class="slidebar-text">
			<a href="index.php" id="logo-footer">
				<img src="img/logo-footer.png">
			</a>
		</div>
		<button><a href="xulydanhmuc.php?id_admin=<?php echo $id?>">Danh mục <span class="fas fa-caret-down second"></span></a></button>
		<button><a href="xulysanpham.php?id_admin=<?php echo $id?>">Sản phẩm <span class="fas fa-caret-down second"></span></a></button>
		<button class="btn-target"><a href="xulydonhang.php?id_admin=<?php echo $id?>">Đơn hàng <span class="fas fa-caret-down second"></span></a></button>
		<button><a href="xulythongke.php?id_admin=<?php echo $id?>">Thống kê<span class="fas fa-caret-down second"></span></a></button>
		<button><a href="xulyhotro.php?id_admin=<?php echo $id?>">Hỗ trợ <span class="fas fa-caret-down second"></span></a></button>
	</nav>
<!-- ------------------------------------ Slidebar --------------------------------------- -->
<!-- ------------------------------------ Header --------------------------------------- -->
	<?php
		include('include/admin-header.php');
	?>
<!-- ------------------------------------ Header --------------------------------------- -->
	<div >
		<?php 
			if(isset($_GET['quanlydonhang']) == 'xemdonhang'){
				$mahang = $_GET['mahang'];
				$sql_chi_tiet_don = mysqli_query($conn, "SELECT * FROM tbl_donhang WHERE tbl_donhang.donhang_id = '$mahang'");
		?>
		</script>
		<div class="category-container" id="chi_tiet_don_hang">
			<h2>Chi tiết đơn hàng</h2>
			<form action="" method="POST">
				<table cellspacing="1">
					<tr class="border">
						<td>Mã hàng</td>
						<td>Tên sản phẩm</td>
						<td>Số điện thoại</td>
						<td>Tổng tiền</td>
						<td><span>Địa chỉ</span></td>
						<td>Ghi chú</td>
					</tr>			
					<?php 
						$i=0;
						while($row_donhang = mysqli_fetch_array($sql_chi_tiet_don)){ 
							$i++;
					?>
					<tr class="border">
						<td><?php echo $row_donhang['donhang_id'] ?></td>
						
						<input type="hidden" name="mahang_xuly" value="<?php echo $row_donhang['donhang_id'] ?>">
						<td><span><?php echo $row_donhang['sanpham_name'] ?></span></td>				
						<td><span><?php echo $row_donhang['khachhang_phone'] ?></span></td>	
						<td><span><?php echo number_format($row_donhang['donhang_gia']).'đ' ?></span></td>
						<td><span><?php echo $row_donhang['donhang_diachi'] ?></span></td>
						<td><span><?php echo $row_donhang['yeucau'] ?></span></td>
					</tr>
					<?php } ?>
				</table>
				<select class="combobox" name="xu_ly_tinh_trang">
					<option value="1">Đã xử lý</option>
					<option value="0">Chưa xử lý</option>
				</select>
				<button type="submit" class="category-button" id="button_capnhat_donhang" name="capnhatdonhang">Cập nhật tình trạng</button>
			</form>
		</div>
<?php } ?>
		<div class="category-container" id="list-donhang">
			<h2>Danh Sách Đơn Hàng</h2>
			<table cellspacing="1">
				<tr class="border">
					<td>Thứ tự</td>
					<td>Mã hàng</td>
					<td>Tên sản phẩm</td>
					<td><span>Tên KH</span></td>
					<td><span>Ngày đặt</span></td>
					<td><span>Tình trạng</span></td>
					<td>Xem<br>đơn<br>hàng</td>
					<td>Xoá</td>
				</tr>			
				<?php 
					$i=0;
					while($row_donhang = mysqli_fetch_array($sql_select_donhang)){ 
						$i++;
				?>
				<tr class="border">
					<td><?php echo $i; ?></td>
					<td><?php echo $row_donhang['donhang_id'] ?></td>
					<td><span><?php echo $row_donhang['sanpham_name'] ?></span></td>
					<!-- <td><span><?php echo $row_donhang['donhang_mahang'] ?></span></td> -->
					<td><span><?php echo $row_donhang['khachhang_name'] ?></span></td>
					<td><span><?php echo $row_donhang['ngaydat'] ?></span></td>
					<td><span><?php if($row_donhang['donhang_tinhtrang'] == 0) echo 'Chưa xử lý'; else if($row_donhang['donhang_tinhtrang'] == 1) echo 'Đã xử lý'; else echo "Đã giao hàng" ?></span></td>
					<td><a href="?quanlydonhang=xemdonhang&mahang=<?php echo $row_donhang['donhang_id'] ?>"><span><i class="fa-solid fa-eye" style="color: black;"></i></i></span></a></td>
					<td><a href="?xoadonhang=<?php echo $row_donhang['donhang_id'] ?>"><span><i class="fa-regular fa-trash-can" style="color: black;"></i></span></a></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>	
</body>
</html>
<?php
}
else {
	echo"bạn không có quyền vào trang này";
	header("Location:login.php");
} 
?>


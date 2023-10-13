<?php  
	include_once('db/connect.php');
	session_start();
	if(isset($_SESSION['id_admin'])){
		$id = $_SESSION['id_admin'];
		$sql_select_id_admin = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE admin_id='$id'"); 	
?>
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
		<button ><a href="xulydonhang.php?id_admin=<?php echo $id?>">Đơn hàng <span class="fas fa-caret-down second"></span></a></button>
		<button><a href="xulythongke.php?id_admin=<?php echo $id?>">Thống kê<span class="fas fa-caret-down second"></span></a></button>
		<button class="btn-target"><a href="xulyhotro.php?id_admin=<?php echo $id?>">Hỗ trợ <span class="fas fa-caret-down second"></span></a></button>
	</nav>

<?php 
	$sql_select_hotro = mysqli_query($conn, "SELECT * FROM tbl_hotro ORDER BY tbl_hotro.hotro_id DESC");
	if(isset($_GET['quanlyhotro']) == 'xemhotro'){
		$hotro_id = $_GET['id'];
		$sql_chi_tiet_ho_tro = mysqli_query($conn, "SELECT * FROM tbl_hotro WHERE tbl_hotro.hotro_id = '$hotro_id'");
?>
	<?php $row_hotro2 = mysqli_fetch_array($sql_chi_tiet_ho_tro) ?>
	<div class="category-container" id="chi_tiet_ho_tro">
		<h2>Nội dung chi tiết</h2>
		<fieldset>
				<legend>Nội dung</legend>
				<p><?php echo $row_hotro2['hotro_noidung'] ?></p>
			</fieldset>		
		<form action="" method="POST">			
			<input type="hidden" name="email" value="<?php echo $row_hotro2['hotro_email'] ?>">
			<input type="hidden" name="tieude" value="<?php echo $row_hotro2['hotro_tieude'] ?>">
			<h2>Viết câu trả lời</h3>
			<textarea cols="100" rows="10" name="noidung"></textarea>
			<button type="submit" name="reply">Gửi</button>
		</form>
	</div>
<?php } ?> 
<!-- ---------------------------- Xem chi tiet don hang ----------------------------- -->
	<div class="category-container" id="list_ho_tro" >
		<h2>Danh sách hỗ trợ</h2>
		<table cellspacing="1">
			<tr class="border">
				<td>ID</td>
				<td>Chủ đề</td>
				<td>Tiêu đề</td>
				<td><span>Họ tên</span></td>
				<td><span>Email</span></td>
				<td>Xem<br>nội<br>dung</td>
				<td>Xoá</td>
			</tr>			
			<?php 
				$i=0;
				while($row_hotro = mysqli_fetch_array($sql_select_hotro)){ 
					$i++;
			?>
			<tr class="border">
				<td><?php echo $row_hotro['hotro_id'] ?></td>
				<td><span><?php echo $row_hotro['hotro_chude'] ?></span></td>
				<td><span><?php echo $row_hotro['hotro_tieude'] ?></span></td>
				<td><span><?php echo $row_hotro['hotro_hoten'] ?></span></td>
				<td><span><?php echo $row_hotro['hotro_email'] ?></span></td>
				<td><a href="?quanlyhotro=xemhotro&id=<?php echo $row_hotro['hotro_id'] ?>"><span><i class="fa-solid fa-eye" style="color: black;"></i></i></span></a></td>
				<td><a href="?xoahotro=<?php echo $row_hotro['hotro_id'] ?>"><span><i class="fa-regular fa-trash-can" style="color: black;"></i></span></a></td>
			</tr>
			<?php } ?>
		</table>
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
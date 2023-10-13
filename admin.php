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
		<button><a href="xulydonhang.php?id_admin=<?php echo $id?>">Đơn hàng <span class="fas fa-caret-down second"></span></a></button>
		<button><a href="xulythongke.php?id_admin=<?php echo $id?>">Thống kê<span class="fas fa-caret-down second"></span></a></button>
		<button><a href="xulyhotro.php?id_admin=<?php echo $id?>">Hỗ trợ <span class="fas fa-caret-down second"></span></a></button>
	</nav>
<!-- ------------------------------------ Slidebar --------------------------------------- -->
<!-- ------------------------------------ Header --------------------------------------- -->
	<?php
		include('include/admin-header.php');
	?>
<!-- ------------------------------------ Header --------------------------------------- -->
</body>
</html>
<?php
}
else {
	echo"bạn không có quyền vào trang này";
	header("Location:login.php");
} 
?>
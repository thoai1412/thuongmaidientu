<?php  
	include_once('db/connect.php');
	session_start();
	if(isset($_SESSION['id_admin'])){
		$id = $_SESSION['id_admin'];
		$sql_select_id_admin = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE admin_id='$id'"); 	
?>
<?php 
// ------------------Thêm Danh Mục-----------------
	if(isset($_POST['themdanhmuc'])){
		$tendanhmuc = $_POST['danhmuc'];
		if($tendanhmuc != '')
			$sql_insert = mysqli_query($conn,"INSERT INTO tbl_category(category_name) VALUES ('$tendanhmuc')");
	}
// ------------------Update Danh Mục-----------------
	if(isset($_POST['capnhatdanhmuc'])) {
		$id_post = $_POST['iddanhmuc'];
		$tendanhmuc = $_POST['tdanhmuc'];
		$sql_update = mysqli_query($conn,"UPDATE tbl_category SET category_name='$tendanhmuc' WHERE category_id='$id_post'");
		header("Location:admin.php");
	}
// ------------------Xoá Danh Mục-----------------
	if(isset($_GET['xoa'])){
		$id= $_GET['xoa'];
		$sql_xoa = mysqli_query($conn,"DELETE FROM tbl_category WHERE category_id='$id'");
	}
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
		<button class="btn-target"><a href="xulydanhmuc.php?id_admin=<?php echo $id?>">Danh mục <span class="fas fa-caret-down second"></span></a></button>
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

<!-- ------------------------------------ Danh Muc --------------------------------------- -->
	<div class="category-flex" id="category">
		<div class="category-wrap">
<!-- ---------------------------- Add ---------------------------------- -->
			<div class="category-container">
				<h2>Thêm Danh Mục</h2>
				<form action="" method="POST">
					<input type="text" name="danhmuc" placeholder="Nhập tên danh mục" required>
					<button type="submit" class="category-button" name="themdanhmuc">Thêm</button>
				</form>
			</div>
<!-- ---------------------------- Add ---------------------------------- -->
<!-- ---------------------------- Update ---------------------------------- -->
			<div class="category-container">
				<?php  
					if(isset($_GET['quanly']) == 'capnhat'){
						$id_capnhat = $_GET['idDM'];
						$sql_capnhat = mysqli_query($conn,"SELECT * FROM tbl_category WHERE category_id='$id_capnhat'");
						$row_capnhat = mysqli_fetch_array($sql_capnhat);
					}
				?>
				<h2>Cập nhật danh Mục</h2>
				<form action="" method="POST">					
					<?php 
						if(isset($_GET['quanly']) == 'capnhat'){
					?>
						<input type="text" name="tdanhmuc" value="<?php echo $row_capnhat['category_name'] ?>" required>
					<?php } ?>				
					<input type="hidden" name="iddanhmuc" value="<?php echo $row_capnhat['category_id']?>">
					<button type="submit" class="category-button" name="capnhatdanhmuc">Update</button>
				</form>
			</div>
		</div>
<!-- ---------------------------- List Danh Mục ---------------------------------- -->
		<?php
			$sql_select = mysqli_query($conn,"SELECT * FROM tbl_category ORDER BY category_id ASC");
		?>
		<div class="category-container">
			<h2>Danh Sách Danh Mục</h2>
			<table>
				<tr class="border">
					<td class="first-td">Thứ tự</td>
					<td>Tên danh mục</td>
					<td>Sửa</td>
					<td>Xoá</td>
				</tr>
				<?php  
					while($row_category = mysqli_fetch_array($sql_select)){
				?>
				<tr class="border">
					<td class="first-td"><?php echo $row_category['category_id']?></td>
					<td><?php echo $row_category['category_name']?></td>
					<td><a href="?quanly=capnhatDM&idDM=<?php echo $row_category['category_id'] ?>"><span><i class="fa-sharp fa-solid fa-pencil" style="color: black;"></i></span></a></td>
					<td><a href="?xoa=<?php echo $row_category['category_id'] ?>"><span><i class="fa-regular fa-trash-can" style="color: black;"></i></span></a></td>
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



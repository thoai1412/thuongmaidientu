<?php  
	include_once('db/connect.php');
	session_start();
	if(isset($_SESSION['id_admin'])){
		$id = $_SESSION['id_admin'];
		$sql_select_id_admin = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE admin_id='$id'"); 		
?>
<?php 
// ------------------Thêm Sản Phẩm-----------------
	if(isset($_POST['themsanpham'])){
		$tensanpham = $_POST['ten_san_pham'];
		$gia = $_POST['gia_san_pham'];
		$hang = $_POST['hang_san_pham'];
		$soluong = $_POST['so_luong'];
		$chitiet = $_POST['chi_tiet_san_pham'];
		$danhmuc = $_POST['danh_muc'];

		$hinhanh = basename($_FILES['img_san_pham']['name']);
		$hinhanh1 = basename($_FILES['imgmini1']['name']);
		$hinhanh2 = basename($_FILES['imgmini2']['name']);
		$hinhanh3 = basename($_FILES['imgmini3']['name']);
		$hinhanh4 = basename($_FILES['imgmini4']['name']);	

		$target_dir = 'uploads/';
		$target_file = $target_dir . $hinhanh;
		$target_file1 = $target_dir . $hinhanh1;
		$target_file2 = $target_dir . $hinhanh2;
		$target_file3 = $target_dir . $hinhanh3;
		$target_file4 = $target_dir . $hinhanh4;
		$sql_insert_product = mysqli_query($conn,"INSERT INTO tbl_sanpham(sanpham_name, sanpham_mota, sanpham_gia, sanpham_soluong, sanpham_img, sanpham_brand, 	category_id, sanpham_img_mini1, sanpham_img_mini2,sanpham_img_mini3,sanpham_img_mini4) VALUES ('$tensanpham', '$chitiet', '$gia', '$soluong', '$hinhanh', '$hang', '$danhmuc', '$hinhanh1', '$hinhanh2', '$hinhanh3', '$hinhanh4')");
		move_uploaded_file($_FILES['img_san_pham']['tmp_name'],$target_file);
		move_uploaded_file($_FILES['imgmini1']['tmp_name'],$target_file1);
		move_uploaded_file($_FILES['imgmini2']['tmp_name'],$target_file2);
		move_uploaded_file($_FILES['imgmini3']['tmp_name'],$target_file3);
		move_uploaded_file($_FILES['imgmini4']['tmp_name'],$target_file4);
	}
// ------------------Xoá Sản Phẩm-----------------
	if(isset($_GET['xoa_sp'])){
		$id=$_GET['xoa_sp'];
		$sql_xoa_sp = mysqli_query($conn,"DELETE FROM tbl_sanpham WHERE sanpham_id='$id'");
	}
// ------------------Update Sản Phẩm-----------------
	if(isset($_POST['capnhatsanpham'])){
		$id_update = $_POST['update_id'];		
		$tensanpham = $_POST['ten_san_pham'];
		$gia = $_POST['gia_san_pham'];
		$hang = $_POST['hang_san_pham'];
		$soluong = $_POST['so_luong'];
		$chitiet = $_POST['chi_tiet_san_pham'];
		$danhmuc = $_POST['danh_muc'];

		$hinhanh = basename($_FILES['img_san_pham']['name']);	
		$target_dir = 'uploads/';
		$target_file = $target_dir . $hinhanh;
		if($hinhanh == ''){
			$sql_update_img = "UPDATE tbl_sanpham SET sanpham_name ='$tensanpham', sanpham_mota='$chitiet', sanpham_gia='$gia', sanpham_soluong='$soluong', sanpham_brand='$hang', category_id='$danhmuc' WHERE sanpham_id='$id_update'";
		}else{
			move_uploaded_file($_FILES['img_san_pham']['tmp_name'],$target_file);
			$sql_update_img = "UPDATE tbl_sanpham SET sanpham_name ='$tensanpham', sanpham_mota='$chitiet', sanpham_gia='$gia', sanpham_soluong='$soluong', sanpham_brand='$hang', category_id='$danhmuc', sanpham_img='$hinhanh' WHERE sanpham_id='$id_update'";
		}
		mysqli_query($conn,$sql_update_img);
?> 
		<meta http-equiv = "refresh" content = "0; url = admin.php" />
<?php
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
		<button><a href="xulydanhmuc.php?id_admin=<?php echo $id?>">Danh mục <span class="fas fa-caret-down second"></span></a></button>
		<button class="btn-target"><a href="xulysanpham.php?id_admin=<?php echo $id?>">Sản phẩm <span class="fas fa-caret-down second"></span></a></button>
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
	<div class="category-flex" id="product">
		<div class="category-container-flex">
			<div class="category-container">
			<h2>Thêm Sản Phẩm</h2>
			<form action="" method="POST" enctype="multipart/form-data">
				<label>
					<span>Tên sản phẩm</span>
					<input type="text" name="ten_san_pham" placeholder="Nhập tên sản phẩm" class="form-product-input" required>
				</label>
				<label>
					<span>Hình ảnh</span>
					<input type="file" id="img" name="img_san_pham" required>
					<span>Hình ảnh phụ</span>
					<input type="file" name="imgmini1" required>
					<input type="file" name="imgmini2" required>
					<input type="file" name="imgmini3" required>
					<input type="file" name="imgmini4" required>
				</label>
				<label>
					<span>Giá</span>
					<input type="text" name="gia_san_pham" placeholder="Giá sản phẩm" class="form-product-input" required>
				</label>
				<label>
					<span>Hảng</span>					
					<?php 
						$sql_brand = mysqli_query($conn,'SELECT * FROM tbl_brand ORDER BY brand_id DESC');
					?>
					<select required name="hang_san_pham">
						<option selected> --- Chọn thương hiệu ---</option>
						<?php 
							while ($row_brand = mysqli_fetch_array($sql_brand)) {
						?>
						<option value="<?php echo $row_brand['brand_name'] ?>"><?php echo $row_brand['brand_name'] ?></option>
						<?php } ?>
					</select>
				</label>
				<label>
					<span>Số lượng</span>
					<input type="text" name="so_luong" placeholder="Số lượng sản phẩm" class="form-product-input" required>
				</label>
				<label>
					<span>Chi tiết</span>
					<textarea rows="4" cols="50" placeholder="Chi tiết" name="chi_tiet_san_pham" required></textarea>
				</label>
				<label>
					<?php 
						$sql_danhmuc = mysqli_query($conn,'SELECT * FROM tbl_category ORDER BY category_id DESC');
					?>
					<span>Danh mục</span>
					<select name="danh_muc" required>
						<option selected> --- Chọn danh mục ---</option>
						<?php 
							while ($row_danhmuc = mysqli_fetch_array($sql_danhmuc)) {
						?>
						<option value="<?php echo $row_danhmuc['category_id'] ?>"><?php echo $row_danhmuc['category_name'] ?></option>
						<?php } ?>	
					</select>
				</label>
				<button type="submit" class="category-button" name="themsanpham">Thêm sản phẩm</button>
			</form>
		</div>
<!-- ------------------------------------ Update San Pham --------------------------------------- -->
		<div class="category-container">
			<h2>Cập nhật Sản Phẩm</h2>
			<?php  
				if(isset($_GET['quanly2']) == 'update'){
					$id_capnhat_sp = $_GET['update_id'];
					$sql_capnhat_sp = mysqli_query($conn,"SELECT * FROM tbl_sanpham WHERE sanpham_id='$id_capnhat_sp'");
					$row_capnhat_sp = mysqli_fetch_array($sql_capnhat_sp);
					$id_category_1 = $row_capnhat_sp['category_id'];
			?>
			<script type="text/javascript">
				window.onload = function(){
		    		var button = document.getElementById('btn-product');
		        	button.click();
				};
			</script>
			
			<form action="" method="POST" enctype="multipart/form-data">
				<label>
					<span>Tên sản phẩm</span>
					<input type="text" name="ten_san_pham" placeholder="Nhập tên sản phẩm" class="form-product-input" value="<?php echo $row_capnhat_sp['sanpham_name'] ?>"><br>
					<input type="hidden" name="update_id"  value="<?php echo $row_capnhat_sp['sanpham_id'] ?>">
				</label>
				<label>
					<span>Hình ảnh</span>
					<input type="file" id="img" name="img_san_pham">
					<img src="uploads/<?php echo $row_capnhat_sp['sanpham_img'] ?>" width="50px"><br>
				</label>
				<label>
					<span>Giá</span>
					<input type="text" name="gia_san_pham" placeholder="Giá sản phẩm" class="form-product-input" value="<?php echo $row_capnhat_sp['sanpham_gia'] ?>">
				</label>
				<label>
					<span>Hảng</span>
					<?php 
						$sql_brand = mysqli_query($conn,'SELECT * FROM tbl_brand ORDER BY brand_id DESC');
					?>
					<select required name="hang_san_pham">
						<option selected> <?php echo $row_capnhat_sp['sanpham_brand'] ?></option>
						<?php 
							while ($row_brand = mysqli_fetch_array($sql_brand)) {
						?>
						<option value="<?php echo $row_brand['brand_name'] ?>"><?php echo $row_brand['brand_name'] ?></option>
						<?php } ?>
					</select>
				</label>
				<label>
					<span>Số lượng</span>
					<input type="text" name="so_luong" placeholder="Số lượng sản phẩm" class="form-product-input" value="<?php echo $row_capnhat_sp['sanpham_soluong'] ?>"> 
				</label>
				<label>
					<span>Chi tiết</span>
					<textarea rows="4" cols="50" placeholder="Chi tiết" name="chi_tiet_san_pham" ><?php echo $row_capnhat_sp['sanpham_mota'] ?></textarea>
				</label>
				<label>
					<?php 
						$sql_danhmuc = mysqli_query($conn,'SELECT * FROM tbl_category ORDER BY category_id DESC');
					?>
					<span>Danh mục</span>
					<select name="danh_muc">
						<option selected> --- Chọn danh mục ---</option>
						<?php 
							while ($row_danhmuc = mysqli_fetch_array($sql_danhmuc)) {
								if ($id_category_1 == $row_danhmuc['category_id']) {
						?>
						<option selected value="<?php echo $row_danhmuc['category_id'] ?>"><?php echo $row_danhmuc['category_name'] ?></option>
						<?php 
								} else { ?>
						<option value="<?php echo $row_danhmuc['category_id'] ?>"><?php echo $row_danhmuc['category_name'] ?></option>
						<?php }}	?>	
					</select>
				</label>
				<button type="submit" class="category-button" name="capnhatsanpham">Update</button>
			</form>
		<?php } ?>
		</div>
	</div>
	</div>	
<!-- ------------------------------------ List San Pham --------------------------------------- -->		
		<?php $sql_select_sp = mysqli_query($conn, "SELECT * FROM tbl_sanpham ORDER BY sanpham_id DESC") ?>
		<div class="category-container" id="list-product">	
			<h2>Danh Sách Sản phẩm</h2>
			<table cellspacing="1">
				<tr class="border">
					<td>ID</td>
					<td>Ảnh</td>
					<td><span>Tên Sản phẩm</span></td>
					<td><span>Số<br>lượng</span></td>
					<td><span>Hảng</span></td>
					<td><span>Giá</span></td>
					<td>Sửa</td>
					<td>Xoá</td>
				</tr>
				<?php 
					while($row_sp = mysqli_fetch_array($sql_select_sp)){
				?>
				<tr class="border">
					<td><?php echo $row_sp['sanpham_id']?></td>
					<td><img src="uploads/<?php echo $row_sp['sanpham_img']?>"></td>
					<td><span><?php echo $row_sp['sanpham_name']?></span></td>
					<td><span><?php if($row_sp['sanpham_soluong'] > $row_sp['sanpham_daban']) echo "Còn hàng"; else echo "Hết hàng"?></span></td>
					<td><span><?php echo $row_sp['sanpham_brand']?></span></td>
					<td><span><?php echo number_format($row_sp['sanpham_gia']).'đ'?></span></td>
					<td><a href="?quanly2=update&update_id=<?php echo $row_sp['sanpham_id'] ?>"><span><i class="fa-sharp fa-solid fa-pencil" style="color: black;"></i></span></a></td>
					<td><a href="?xoa_sp=<?php echo $row_sp['sanpham_id'] ?>"><span><i class="fa-regular fa-trash-can" style="color: black;"></i></span></a></td>
				</tr>
				<?php } ?>
			</table>
		</div>
		<!-- ------------------------------------ List San Pham --------------------------------------- -->	


</body>
</html>
<?php
}
else {
	echo"bạn không có quyền vào trang này";
	header("Location:login.php");
} 
?>
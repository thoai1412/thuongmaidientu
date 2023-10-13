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
		<button class="btn-target"><a href="xulythongke.php?id_admin=<?php echo $id?>">Thống kê<span class="fas fa-caret-down second"></span></a></button>
		<button><a href="xulyhotro.php?id_admin=<?php echo $id?>">Hỗ trợ <span class="fas fa-caret-down second"></span></a></button>
	</nav>
<!-- ------------------------------------ List San Pham --------------------------------------- -->		
		<?php $sql_select_sp = mysqli_query($conn, "SELECT * FROM tbl_sanpham ORDER BY sanpham_id DESC") ?>
		<div class="category-container" id="list-thongke">	
			<h2>Thống kê</h2>
			<form method="POST">
			<div style="display: flex;">
				<select class="combobox" name="brand" style="margin-bottom: 50px;">
					<option selected>--- Thống kê theo ---</option>	
					<option value="all">Tất cả</option>	
					<option value="brand_sort">Hãng sãn xuất</option>	
					<option value="date">Ngày</option>							
				</select>
				<button type="submit" name="thongketheohang" style="width:100px; height: 40px; margin-left: 50px;">Tìm</button>
			</div>
			</form>
			<?php  
				if(isset($_POST['thongketheohang'])) {
					$chose = $_POST['brand'];
					if ($chose == 'brand_sort'){
					$sql_select_brand = mysqli_query($conn, "SELECT * FROM tbl_brand ORDER BY brand_name ASC");
					while($row_brand = mysqli_fetch_array($sql_select_brand)){
						$brand = $row_brand['brand_name'];
						$sql_select_brand_sp = mysqli_query($conn, "SELECT * FROM tbl_sanpham WHERE sanpham_brand like '$brand'");
						?> 
						<h3 style="font-size: 40px; margin-top: 20px;"><?php echo $row_brand['brand_name'] ?></h3>
						<table cellspacing="1">
						<tr class="border">
							<td>ID</td>
							<td>Ảnh</td>
							<td><span>Tên Sản phẩm</span></td>
							<td><span>Đã<br>bán</span></td>
							<td><span>Tổng tiền</span></td>

						</tr>
						<?php 
							while($row_sp =  mysqli_fetch_array($sql_select_brand_sp)){
						?>
						<tr class="border">
							<td><?php echo $row_sp['sanpham_id']?></td>
							<td><img src="uploads/<?php echo $row_sp['sanpham_img']?>"></td>
							<td><span><?php echo $row_sp['sanpham_name']?></span></td>
							<td><span><?php echo $row_sp['sanpham_daban']?></span></td>
							<td><span><?php echo number_format($row_sp['sanpham_gia']*$row_sp['sanpham_daban']).'đ'?></span></td>							
						</tr>
						<?php 
							}							
						?>
					</table>
						<?php	
						} 
					} else if ($chose == 'date'){
						
						$sql_select_date = mysqli_query($conn, "SELECT * FROM tbl_donhang WHERE donhang_tinhtrang = '1' ORDER BY ngaydat ASC");
						while($row_date = mysqli_fetch_array($sql_select_date)){
							$ngaydat = $row_date['ngaydat'];
							?> 
							<hr style="margin: 10px 0px;">
							<table cellspacing="1">
							<tr class="border">
								<td><span>Ngày</span></td>
								<td style="width:300px"><span>Tổng tiền</span></td>
							</tr>
							<?php 
								$sum = 0;
								$sql_select_date_money = mysqli_query($conn, "SELECT * FROM tbl_donhang WHERE donhang_tinhtrang = '1' AND ngaydat like '$ngaydat' ");
								while($row_date_money =  mysqli_fetch_array($sql_select_date_money)){
								 	$sum += $row_date_money['donhang_gia'];
								}
							?>
							<tr class="border">
								<td><span><?php echo date("d-m-Y", strtotime($row_date['ngaydat']));?></span></td>
								<td><span><?php echo number_format($sum).'đ'?></span></td>							
							</tr>
						</table>
					<?php	
						} 
					} else {
							?> 
							<table cellspacing="1">
						<tr class="border">
							<td>ID</td>
							<td>Ảnh</td>
							<td><span>Tên Sản phẩm</span></td>
							<td><span>Đã<br>bán</span></td>
							<td><span>Tổng tiền</span></td>

						</tr>
						<?php 
							while($row_sp = mysqli_fetch_array($sql_select_sp)){
						?>
						<tr class="border">
							<td><?php echo $row_sp['sanpham_id']?></td>
							<td><img src="uploads/<?php echo $row_sp['sanpham_img']?>"></td>
							<td><span><?php echo $row_sp['sanpham_name']?></span></td>
							<td><span><?php echo $row_sp['sanpham_daban']?></span></td>
							<td><span><?php echo number_format($row_sp['sanpham_gia']*$row_sp['sanpham_daban']).'đ'?></span></td>							
						</tr>
						<?php 
							}
						?>
					</table>	
							<?php
						}
				} else { ?>
					<table cellspacing="1">
						<tr class="border">
							<td>ID</td>
							<td>Ảnh</td>
							<td><span>Tên Sản phẩm</span></td>
							<td><span>Đã<br>bán</span></td>
							<td><span>Tổng tiền</span></td>

						</tr>
						<?php 
							while($row_sp = mysqli_fetch_array($sql_select_sp)){
						?>
						<tr class="border">
							<td><?php echo $row_sp['sanpham_id']?></td>
							<td><img src="uploads/<?php echo $row_sp['sanpham_img']?>"></td>
							<td><span><?php echo $row_sp['sanpham_name']?></span></td>
							<td><span><?php echo $row_sp['sanpham_daban']?></span></td>
							<td><span><?php echo number_format($row_sp['sanpham_gia']*$row_sp['sanpham_daban']).'đ'?></span></td>							
						</tr>
						<?php 
							}
						?>
					</table>										
			<?php
				}
			?>
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

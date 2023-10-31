<?php  
	include_once('db/connect.php');
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tìm kiếm </title>
	<link rel = "stylesheet" href="css/style.css"/>
	<link rel = "stylesheet" href="css/reset.css"/>
	<link rel = "stylesheet" href="css/header.css"/>
	<link rel = "stylesheet" href="css/menu.css"/>
	<link rel = "stylesheet" href="css/slide.css"/>
	<link rel = "stylesheet" href="css/footer.css"/>
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
	if (isset ($_POST [ 'btn_search'])) 
	{
	$ten = $_POST['ten'];
	?>
	<h2 class="find-title">Kết quả tìm kiếm: <?php echo"$ten"; ?></h2>
	<div class="product-container-page2">
		<div id="product-list-page2" class="find-container">
			<ul class="product">
	<?php 
	if($ten==""){
		echo"Không tìm thấy kết quả tìm kiếm";
	}
	else{
	$sql ="SELECT * FROM tbl_sanpham WHERE sanpham_name LIKE '%$ten%'";
	$result = mysqli_query($conn,$sql);
	while ($row = mysqli_fetch_array($result)) {?>
				<li>
					<div class="product-item">
						<div class="product-top">
							<a href="single.php?id=<?php echo $row['sanpham_id']?>" class="product-img">
								<img src="uploads/<?php echo $row['sanpham_img']?>">
							</a>
						</div>

						<div class="product-info">
							<a href="single.php?id=<?php echo $row['sanpham_id']?>" class="product-name"><?php echo $row['sanpham_name']?></a>
							<div class="product-price"><?php echo $row['sanpham_gia'] ?></div>
						</div>

					</div>
				</li>
			<?php }
		}
}
?>
			</ul>
		</div>
	</div>		

	<!-- ------------------------------------ Email ------------------------------------ -->
	<!-- ------------------------------------ Email ------------------------------------ -->

	<!-- ------------------------------------ Footer ------------------------------------ -->
	<?php
		include('include/footer.php');
	?>
	<!-- ------------------------------------ Footer ------------------------------------ -->	
</body>
</html>
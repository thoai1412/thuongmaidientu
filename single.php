<?php
	include "db/connect.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	} else {
		$id = '';
	}
	$sql_chitiet = mysqli_query($conn,"SELECT * FROM tbl_sanpham WHERE sanpham_id='$id'");
?>
<?php 
	session_start(); 
	if (isset($_SESSION['id_user'])) {
	$id_user = 	$_SESSION['id_user'];}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="fontawesome-free-6.2.0/css/all.min.css"/>
	<title>3TL</title>
	<link rel = "stylesheet" href="css/style.css"/>
	<link rel = "stylesheet" href="css/reset.css"/>
	<link rel = "stylesheet" href="css/header.css"/>
	<link rel = "stylesheet" href="css/menu.css"/>
	<link rel = "stylesheet" href="css/slide.css"/>
	<link rel = "stylesheet" href="css/footer.css"/>
	<link rel = "stylesheet" href="css/single-product.css"/>
	<script src="js/main.js" language=JavaScript></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
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

	<!-- ------------------------------------ Product - infomation ----------------------- -->
	<?php 
		while($row_chitiet = mysqli_fetch_array($sql_chitiet)){
	?>
	<div class="product-infomation-container">
		<div class="tong1">
			<div class="tong2">	
				<div class="tong-image">
					<div class="mini-image">
						<img src="uploads/<?php echo $row_chitiet['sanpham_img'] ?>">
						<img src="uploads/<?php echo $row_chitiet['sanpham_img_mini1'] ?>">
						<img src="uploads/<?php echo $row_chitiet['sanpham_img_mini2'] ?>">
						<img src="uploads/<?php echo $row_chitiet['sanpham_img_mini3'] ?>">
						<img src="uploads/<?php echo $row_chitiet['sanpham_img_mini4'] ?>">
					</div>					
					<img src="uploads/<?php echo $row_chitiet['sanpham_img'] ?>" class="main-img" name="imgchange">					
				</div>

				<div class="tong-namesanpham">
					<h2 class="name"><?php echo $row_chitiet['sanpham_name'] ?></h2>
					<style type="text/css">
						input[disabled]{
						  background-color: #cccccc;
						  color: white;
						}
						.thongbaohethang input{
							font-size: 25px;
							height: 30px;
							border: none;
						}
						.thongbaohethang input:focus{
							outline: none;
						}
					</style>
					<div class="thongbaohethang">
						<input type="text" name=""id="thongbaohethang" readonly="False">
					</div>
					<div class="voucher0">
						<img class="voucher" src="img/voucher.jpg">
						<span>Đăng nhập hoặc đăng ký để mua hàng và nhận thêm nhiều ưu đãi hấp dẫn dành riêng cho thành viên TLT</span>
					</div>
					<div class="giamgiatong">
						<div class="giamgia">
							<span class="giamgia-1">Giảm 50% gói Bảo hành Mở rộng 12 tháng <a class="giamgia-2" href="">Xem chi tiết</a></span>
							
						</div>
						<div class="giamgia">
							<p class="giamgia-1">Giảm 20% giá gói BH Rơi vỡ 6 tháng <a class="giamgia-2" href="">Xem chi tiết</a></p>
						</div>
					</div>

					<div class="giatien">
						<?php echo number_format($row_chitiet['sanpham_gia']).'đ' ?>
					</div>
					<div class="thongbao">
						<?php  
						if (isset($_POST['themgiohang'])) {
							if (isset($_SESSION['name']) && $_SESSION['name']){
							$ten = $_SESSION['name'];
							// echo $ten;
							$sp_ten = $_POST['ten_san_pham'];
							$sp_id = $_POST['sanpham_id'];
							$sp_gia = $_POST['san_pham_gia'];
							$_SESSION['tongtien']=$sp_gia;
							$sp_sl = $_POST['san_pham_so_luong'];
							$sp_img = $_POST['san_pham_img'];
							
							$result=mysqli_query($conn,"SELECT * from tbl_giohang where khachhang_email='$ten' and sanpham_id='$sp_id'");
            				$row=mysqli_fetch_assoc($result);
							if($row)
							{
								//echo"aaa";
								$a=$row['giohang_soluong']+1;
								if($a<6)
								{
								$sql="UPDATE tbl_giohang SET giohang_soluong='$a' WHERE khachhang_email='$ten' and sanpham_id='$sp_id'";
								if ($conn->query($sql) === TRUE) {echo '<p style="color:green">Đã cập nhật số lượng sản phẩm!';} 
								else {echo "Error: " . $sql . "<br>" . $conn->error;}
								}
								else{
									echo '<p style="color:red">Quý khách chỉ có thể đặt tối đa 5 sản phẩm!';
								}
							}
							else{
							$sql_themgiohang = mysqli_query($conn,"INSERT INTO tbl_giohang(khachhang_email, sanpham_id, sanpham_name,giohang_soluong, sanpham_gia, sanpham_img) VALUES ('$ten','$sp_id','$sp_ten','$sp_sl','$sp_gia','$sp_img ')");
								if ($sql_themgiohang === TRUE){ echo '<p style="color:green"> Đã thêm sản phẩm vào giỏ hàng!';} 
								else {echo "Error: " . $sql . "<br>" . $conn->error;}
							}
						}
						else echo '<p style="color:red"> Bạn phải đăng nhập để có thể thêm vào giỏ hàng!';
					}
					?>
					</div>
					
					<div class="tongmuangay">
						<form action="form.php">
						<button >							
							<input id="muangay" type="submit" name="muangay" value="MUA NGAY">
						</button>
						</form>
					<?php $_SESSION['tongtien']=$row_chitiet['sanpham_gia']?>	
					<?php
					$_SESSION['tensp']=$row_chitiet['sanpham_name']."(SL:1)";
					$_SESSION['idsp']="/".$row_chitiet['sanpham_id'];
					?>
						
						<form action="" method="POST">
							<input type="hidden" name="sanpham_id" value="<?php echo $row_chitiet['sanpham_id'] ?>">
							<input type="hidden" name="ten_san_pham" value="<?php echo $row_chitiet['sanpham_name'] ?>">
							<input type="hidden" name="san_pham_so_luong" value="1">
							<input type="hidden" name="san_pham_gia" value="<?php echo $row_chitiet['sanpham_gia']?>">
							<input type="hidden" name="san_pham_img" value="<?php echo $row_chitiet['sanpham_img'] ?>">

							<button><input id="giohang" type="submit" name="themgiohang" value="GIỎ HÀNG"></button>
						</form>
						<?php 
						 $spsl=$row_chitiet['sanpham_soluong'];
						 $spdb=$row_chitiet['sanpham_daban'];

						 if((int)$spsl==(int)$spdb){
						 	?>
						 	<script type="text/javascript">
						 		var mua = document.getElementById("muangay");
						 		var giohang = document.getElementById("giohang");
						 		muangay.disabled=true
						 		giohang.disabled=true
						 		document.getElementById("thongbaohethang").value="Hết Hàng"
						 	</script>
						<?php 
						}
						 else{
						 		?>
						 	<script type="text/javascript">
						 		document.getElementById("thongbaohethang").value="Còn Hàng"
						 	</script>
						<?php 
						 }
						 ?>
					</div>

				</div>
			</div>
			<div class="tong3">
				<div id="quyenloitong">
					<ul>
						<li class="quyenloi2-1">Giá bạn thấy bằng giá bạn trả
							<ul class="quyenloi1">
								<li>
									Cam kết giá bán niêm yết chính xác trên webside 
								</li>
							</ul>
						</li>
						<li class="quyenloi2-1">Yên tâm mua sắm giải tỏa tủi ro
							<ul class="quyenloi1">
								<li>
									Bảo vệ quyền lợi khách hàng, hỗ trợ đổi trả nhanh chóng
								</li>
							</ul>
						</li>
						<li class="quyenloi2-1">Hàng chất lượng rõ, nguồn góc
							<ul class="quyenloi1">
								<li>
									Chất lượng đảm bảo, nguồn góc rõ ràng, có đánh giá từ người mua và thẩm định độ uy tính người bán
								</li>
							</ul>
						</li>
						<li class="quyenloi2-1">Sản phẩm nhập khẩu chính ngạch
							<ul class="quyenloi1">
								<li>
									An toàn, minh bạch, hợp pháp, không sợ rủi ro
								</li>
							</ul>
						</li>
						<li class="quyenloi2-1">Liên tục cập nhật hành trình
							<ul class="quyenloi1">
								<li>
									Theo dõi và cập nhật quá trình vận đơn thường xuyên
								</li>
							</ul>
						</li>
						<li class="quyenloi2-1 quyenloi2-1-1">Miễn phí giao hàng trong nước
							<ul class="quyenloi1">
								<li>
									Miễn phí giao hàng trong nước, áp dụng cho đơn hàng từ 1,5 triệu
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="tong4">
			<div class="infosanpham">
				<p class="thongtin0">Thông tin sản phẩm</p>
				<div class="thongtin3">
				<span class="thongtin1"><?php echo $row_chitiet['sanpham_name'] ?></span>
				<span class="thongtin2"><?php echo $row_chitiet['sanpham_mota'] ?></span></div>
			</div>
			<div class="cauhinhsanpham">
				<p class="cauhinh0">Cấu hình điện thoại <?php echo $row_chitiet['sanpham_name'] ?></p>
				<ul class="cauhinhtong">
					<li class="cauhinh1">
						<div class="cauhinh2">Màn hình:</div><div class="cauhinh3">OLED,6.7",Super Retina XDR</div>
					</li>
					<li class="cauhinh4">
						<div class="cauhinh2">Hệ điều hành:</div><div class="cauhinh3">IOS 15</div>
					</li>
					<li class="cauhinh1">
						<div class="cauhinh2">Camera sau:</div><div class="cauhinh3">3 camera 12MP</div>
					</li>
					<li class="cauhinh4">
						<div class="cauhinh2">Camera trước:</div><div class="cauhinh3">12MP</div>
					</li>
					<li class="cauhinh1">
						<div class="cauhinh2">Chip</div><div class="cauhinh3">Apple A15 Bionic</div>
					</li>
					<li class="cauhinh4">
						<div class="cauhinh2">RAM:</div><div class="cauhinh3">6 GB</div>
					</li>
					<li class="cauhinh1">
						<div class="cauhinh2">Dương lượng lưu trữ:</div><div class="cauhinh3">128 GB</div>
					</li>
					<li class="cauhinh4">
						<div class="cauhinh2">Sim:</div><div class="cauhinh3">1 Nano SIM & 1 eSim, hỗ trợ 5G</div>
					</li>
					<li class="cauhinh1">
						<div class="cauhinh2">Pin,Sạc:</div><div class="cauhinh3">4352 mAh, 20 W</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php } ?>
	<!-- ------------------------------------ Product - infomation ----------------------- -->

	<!-- ------------------------------------ Footer ------------------------------------ -->
	<?php
		include('include/footer.php');
	?>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$('.mini-image > img').click(function(){
			var $smallImages = $(this).attr('src');
			$('.main-img').attr('src',$smallImages);
		});
	});
</script>
</html>
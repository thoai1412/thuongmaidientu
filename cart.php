<?php 
	ob_start(); 
	session_start(); 
	$id_user = $_SESSION['id_user'];
?>
<?php
	include "db/connect.php";
?>
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
	<link rel = "stylesheet" href="css/cart.css"/>
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

	<!-- ------------------------------------ Cart--------------------------------------- -->

	 <?php 
       if (isset($_SESSION['name']) && $_SESSION['name']){
            $ten = $_SESSION['name'];
            $sql ="SELECT * FROM tbl_giohang WHERE khachhang_email LIKE '$ten'";
			$result = mysqli_query($conn,$sql);
			$dem=-1;
			while ($row = mysqli_fetch_array($result)){
				$dem ++;
				$tinh=$row['sanpham_gia']*$row['giohang_soluong'];
				$masp=$row['sanpham_id'];
				$sql2="SELECT * FROM tbl_sanpham WHERE sanpham_id= '$masp'";
				$result2 = mysqli_query($conn,$sql2);
				while ($row2 = mysqli_fetch_array($result2)){
				$spcon=(int)$row2['sanpham_soluong']-(int)$row2['sanpham_daban'];
				//if($spcon==0)
				
				//else
				//echo $spcon;
		}	
         ?>
     <form method="POST">
        	<div id="cart-container">
			<div id="cart-product">
			<?php 
				if($spcon==0||$spcon<$row['giohang_soluong'])
				{?>
				<div class="cart-product-checkbox">
				<input type="checkbox" name="checkbox"id="<?php echo$dem?>"  disabled >
				</div>
			<?php	}
			else{
			?>
			<div class="cart-product-checkbox">
				<input type="checkbox" name="checkbox"id="<?php echo$dem?>" >
			</div>
			<?php
		}?>
			<div class="cart-product-img">
				<img src="uploads/<?php echo $row['sanpham_img']?>">
			</div>
			<div class="cart-product-name">
				<span><?php echo $row['sanpham_name']?></span>
				<input type="hidden" id="<?php echo "name".$dem?>"value="<?php echo $row['sanpham_name']?>">
				<div class="tbslsp">
				<div class="tbhethang">
				<?php 
				if($spcon==0)
				{
					echo '<p style="color:red"> Sản phẩm hết hàng';
				}
				else
				{
					echo "Sản phẩm còn trong kho hàng:".$spcon;	
				}
			
				?>
				</div>
				<div class="tbkodusp">
					<?php
						if($spcon<$row['giohang_soluong'] &&$spcon>0)
						{
							echo '<p style="color:red"> Không đủ sản phẩm trong kho hàng';
						}
					?>
				</div>
				</div>
			<style type="text/css">
				.tbslsp{
					display: flex;
					width: 200%;
				}
				.tbkodusp{
					margin-left: 25%;
				}
			</style>

			</div>
		
		
			
			<div class="cart-product-numberic">
				<input name="<?php echo$dem?>" type="text" id="<?php echo "sl".$dem?>" value="<?php echo $row['giohang_soluong']?>">
				<input name="<?php echo"h".$dem?>"id="<?php echo"h".$dem?>" type="hidden" value="<?php echo$row['sanpham_id'] ?>">

			</div>

			<div class="cart-product-price">
				<span><?php echo number_format($tinh).'đ' ?></span>
				<input id="<?php echo"tinh".$dem?>" type="hidden" value="<?php echo$tinh?>">
			</div>
			</form>	
			<form method="POST">	
			<input name="<?php echo"h".$dem?>" type="hidden" value="<?php echo$row['sanpham_id'] ?>">
			<div class="cart-product-delete">
				<input type="submit" name="<?php echo"sm".$dem?>" value="Xóa">
				<span><i class="fa-regular fa-trash-can" ></i></span>
			</div>
			</form>

		</div>
	</div>
	
	<?php } } ?>

		<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		
		for($i=0;$i<=$dem;$i++)
		{  
			if(isset($_POST["$i"]))
			{
				$bien=$_POST["$i"];
				$bien1=$_POST["h".$i];
				$result1=mysqli_query($conn,"SELECT * FROM tbl_giohang WHERE sanpham_id='$bien1'and	giohang_soluong='$bien' and khachhang_email='$ten'");
				$row=mysqli_fetch_assoc($result1);
				if($row){}
				else
					{	
						if($bien>0)
						{
						if((int)$bien<=5)
						{
						$sql="UPDATE tbl_giohang SET giohang_soluong = '$bien' WHERE khachhang_email = '$ten' and sanpham_id='$bien1'";
						header("Location:cart.php");
						if ($conn->query($sql) === TRUE) {} 
							else {echo "Error: " . $sql . "<br>" . $conn->error;}
						}
						else{
							?>
							<script type="text/javascript">alert('Quý khách chỉ có thể đặt tối đa 5 sản phẩm')</script>
						<?php
					}	
					}
					else{

					}
					}				
			}
			else{}
			
		}

		for($i=0;$i<=$dem;$i++)
		{  
		if(isset($_POST['sm'.$i]))
			{				
				$bien1=$_POST["h".$i];
				$sql="DELETE FROM tbl_giohang  WHERE khachhang_email = '$ten' and sanpham_id='$bien1'";
				header("Location:cart.php");
				echo $sql;
				if ($conn->query($sql) === TRUE) {} 
							else {echo "Error: " . $sql . "<br>" . $conn->error;}
			}
			else{
			}
		}
	
	}
	//$conn->close();	
	?>
	
	<form method="POST"  >
	<div class="cart-price-container">
		<div class="cart-price-button">
			<button id="dathang" name="dathang" value="ĐẶT HÀNG">ĐẶT HÀNG</button>
		</div>
		<div class="cart-price-price">
			<input type="text" id="tongtien"  readonly="False">
			<input type="hidden" id="tongtien1" name="tongtien" readonly="False">
			<input type="hidden" id="tensp" name="tensp">
			<input type="hidden" id="idsp" name="idsp">

		</div>
		<style type="text/css">
			.cart-price-price input:focus{
			outline: none;
						
			}
		</style>
		<div class="cart-price-text">
			<input type="hidden" id="solanlap" value="<?php echo$dem?>">
			<span>Tổng tiền sản phẩm:</span>
		</div>
		<style type="text/css">
			.thongbao{
				margin-top: 45px;
				margin-right: 400px;
			}
		</style>
		<div class="thongbao">
			<?php 
			if (isset($_POST["dathang"]))
			{
				if($_POST['tongtien']==0){
					 echo '<p style="color:red"> Quý khách vui lòng chọn sản phẩm';
				}
				else{
					
				$tongtien=$_POST['tongtien'];
				$tensp=$_POST['tensp'];
				$_SESSION['idsp']=$_POST['idsp'];
				$_SESSION['tongtien'] = $tongtien;
				$_SESSION['tensp']=$tensp;
			
				header("Location:form.php?ph=gh");

				}
			}
			?>

		</div>	
	</div>
	</form>
	
	<!-- ------------------------------------ Cart--------------------------------------- -->

	<!-- ------------------------------------ Footer ------------------------------------ -->
	<footer>
		<ul class="infomation">
			<li>
			<div id="info1" class="info">			
				<a href="index.html" id="logo-footer">
					<img src="img/logo-footer.png">
				</a>
			</div>
			</li>
			<li>
			<div id="info2" class="info">
				<h3>MAIN MENU</h3>
				<ul class="footer-menu">
					<li><a href="index.html">DANH MỤC</a></li>
					<li><a href="">ƯU ĐÃI</a></li>
					<li><a href="">GIỚI THIỆU</a></li>
					<li><a href="">CHÍNH SÁCH</a></li>
					<li><a href="">TIN TỨC</a></li>
				</ul>
			</div>
			</li>

			<li>
			<div id="info3" class="info">
				<h3>LIÊN HỆ</h3>
				<div id="footer-info">
					<ul class="ul-footer-info">
						<li>
							<span> Tên công ty: Thoai - Luan - Trung</span>
						</li>
						<li>
							<span>Hotline: 071xxxxxxx</span>
						</li>
						<li>
							<span>Địa chỉ cửa hàng: Mỹ An A, Mỹ Thạnh An, TP.Bến Tre</span>
						</li>
						<li>
							<span>Mail: luan020101017@tgu.edu.vn</span>
						</li>
					</ul>			
				</div>
			</div>
			</li>

			<li>
				<div id="info4" class="info">
					<h3>KẾT NỐI VỚI CHÚNG TÔI</h3>
				</div>
				<div class="info-bottom">
					<a href="https://www.facebook.com/luantruong020302"><span><i class="fa-brands fa-facebook"></i></span></a>	
					<a href=""><span><i class="fa-brands fa-instagram"></i></span></a>				
					<a href=""><span><i class="fa-brands fa-youtube"></i></span></a>
				</div>
			</li>
		</ul>
		<div class="hr-info-bottom">
			<hr>
		</div>
		<div id="copyright"> 
	    	<p>Copyright © 2022 TLT. Powered by Le Vinh Thoai - Truong Hoang Luan - Nguyen Quang Trung</p>
	    </div>
	</footer>
</body>
<script >
	let str="";
	var bien=Number('0');
	var bien1="";
	document.getElementById('tongtien').value=0;
	var checkboxes = document.getElementsByName('checkbox');
	var n=document.getElementById('solanlap').value;
	for(let i=0;i<=n;i++){
		document.getElementById(i).onclick = function(e)
		{
          if (this.checked)
          {
         		var x="tinh"+i;
         		var y="name"+i;
         		var z="sl"+i;
         		var k="h"+i;
         		bien += Number(document.getElementById(x).value);
         		str+="/"+ document.getElementById(k).value;
         		bien1+="  "+document.getElementById(y).value+"(sl:"+document.getElementById(z).value+");";
          }
          else
          {
         		var x="tinh"+i;
         		var y="name"+i;
         		var z="sl"+i;
         		var k="h"+i
         		bien -= Number(document.getElementById(x).value);
         		
         		bien1="";
               for (var j=0; j <= n; j++){
                    if(checkboxes[j].checked == true)
                    {
                    	bien1+="  "+document.getElementById("name"+j).value+"(sl:"+document.getElementById("sl"+j).value+");";	
                    }
               }
               str="";
               for (var l=0; l <= n; l++){
                    if(checkboxes[l].checked == true)
                    {
                    	str+="/"+ document.getElementById("h"+l).value;	
                    }
               }
          }

          //document.getElementById('tongtien1').value=bien;
   		//const VND = new Intl.NumberFormat('vi-VN', {style: 'currency', currency: 'VND',});
   		//bien= VND.format(bien);
          document.getElementById('tongtien1').value=bien;
          document.getElementById('tensp').value=bien1; 
          document.getElementById('idsp').value=str;
          var tinhtien=document.getElementById('tongtien1').value;
	     const VND = new Intl.NumberFormat('vi-VN', {style: 'currency', currency: 'VND',});
	   	tinhtien= VND.format(tinhtien);
	     document.getElementById('tongtien').value=tinhtien;
          }  
     }

     
	</script>
</html>
<?php
ob_end_flush();
?>
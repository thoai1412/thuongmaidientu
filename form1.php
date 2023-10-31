<?php session_start(); ?>
<?php
	include "db/connect.php";
	//echo $_SESSION['idsp'];
	//echo($_SESSION['idsp']);

?>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href="css/style.css"/>
	<link rel = "stylesheet" href="css/reset.css"/>
	<link rel = "stylesheet" href="css/header.css"/>
	<link rel = "stylesheet" href="css/menu.css"/>
	<link rel = "stylesheet" href="css/slide.css"/>
	<link rel = "stylesheet" href="css/footer.css"/>
	<link rel = "stylesheet" href="css/form.css"/>
	<link rel="stylesheet" href="fontawesome-free-6.2.0/css/all.min.css"/>
	<title>3TL</title>
	<script src="js/main.js" language=JavaScript></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script type= "text/javascript">
		var country_arr = new Array("Hồ Chí Minh", "Bến Tre","Tiền Giang","An Giang","Bà Rịa - Vũng Tàu","Bạc Liêu","Tây Ninh","Vĩnh Long","Trà Vinh","Bình Dương","Hậu Giang","Cà Mau","Cần Thơ","Đà Nẵng","Kiên Giang","Hậu Giang","Sóc Trăng","Đồng Tháp");
		var s_a = new Array();
			s_a[0]="";
			s_a[1]="Quận 1|Quận 2|Quận 3|Quận 4|Quận 5|Quận 6|Quận 7|Quận 8|Quận 9|Quận 10|Quận 11|Quận 12|Quận 13|Quận Bình Tân|Quận Bình Thạnh|Quận Gò Vấp|Quận Phú Nhuận|Quận Tân Bình|Quận Tân Phú|Quận Thủ Đức";
			s_a[2]="Tp Bến Tre|Huyện Ba Tri|Huyện Bình Đại|Huyện Châu Thành|Huyện Chợ Lách|Huyện Giồng Trôm|Huyện Mỏ Cày Bắc|Huyện Mỏ Cày Nam|Huyện Thanh Phú";
			s_a[3]="Tp Mỹ Tho|Thị xã Gò Công|Thị xã Cay Lậy|Huyện Cái Bè|Huyện Châu |Huyện Chợ Gạo|Huyện Gò Công Đông|Huyện Gò Công Tây|Huyện Tân Phú Đông|Huyện Tân Phước";
			s_a[4]="Tp Long Xuyên|Tp Châu Đốc|Thị xã Tân Châu|Huyện An Phú |Huyện Châu Phú|Huyện Châu Thành |Huyện Phú Tân|Huyện Chợ Mới|Huyện Thoại Sơn|Huyện Tịnh Biên| Huyện Tri Tôn";
			s_a[5]="Thành phố Vũng Tàu|Thành phố Bà Rịa|Huyện Châu Đức|Huyện Xuyên Mộc|Huyện Long Điền|Huyện Đất Đỏ|Huyện Tân Thành";
			s_a[6]="Thành phố Bạc Liêu|Huyện Hồng Dân|Huyện Phước Long|Huyện Vĩnh Lợi|Thị xã Giá Rai|Huyện Đông Hải|Huyện Hoà Bình";
			s_a[7]="Thành phố Tây Ninh|Huyện Tân Biên|Huyện Tân Châu|Huyện Dương Minh Châu|Huyện Châu Thành|Huyện Hòa Thành|Huyện Gò Dầu|Huyện Bến Cầu|Huyện Trảng Bàng";
			s_a[8]="Thành phố Vĩnh Long|Huyện Long Hồ|Huyện Mang Thít|Huyện Vũng Liêm|Huyện Tam Bình|Thị xã Bình Minh|Huyện Trà Ôn|Huyện Bình Tân";
			s_a[9]="Thành phố Trà Vinh|Huyện Càng Long|Huyện Cầu Kè|Huyện Tiểu Cần|Huyện Châu Thành|Huyện Cầu Ngang|Huyện Trà Cú|Huyện Duyên Hải|Thị xã Duyên Hải";
			s_a[10]="Thành phố Thủ Dầu Một|Huyện Bàu Bàng|Huyện Dầu Tiếng|Thị xã Bến Cát|Huyện Phú Giáo|Thị xã Tân Uyên|Thị xã Dĩ An|Thị xã Thuận An|Huyện Bắc Tân Uyên";
			s_a[11]="Thành phố Vị Thanh|Thị xã Ngã Bảy|Huyện Châu Thành A|Huyện Châu Thành|Huyện Phụng Hiệp|Huyện Vị Thuỷ|Huyện Long Mỹ|Thị xã Long Mỹ";
			s_a[12]="Thành phố Cà Mau|Huyện U Minh|Huyện Thới Bình|Huyện Trần Văn Thời|Huyện Cái Nước|Huyện Đầm Dơi|Huyện Năm Căn|Huyện Phú Tân|Huyện Ngọc Hiển";
			s_a[13]="Quận Ninh Kiều|Quận Ô Môn|Quận Bình Thuỷ|Quận Cái Răng|Quận Thốt Nốt|Huyện Vĩnh Thạnh|Huyện Cờ Đỏ|Huyện Phong Điền|Huyện Thới Lai";
			s_a[14]="Quận Liên Chiểu|Quận Thanh Khê|Quận Hải Châu|Quận Sơn Trà|Quận Ngũ Hành Sơn|Quận Cẩm Lệ|Huyện Hòa Vang|Huyện Hoàng Sa";
			s_a[15]="Thành phố Rạch Giá|Thị xã Hà Tiên|Huyện Kiên Lương|Huyện Hòn Đất|Huyện Tân Hiệp|Huyện Châu Thành|Huyện Giồng Riềng|Huyện Gò Quao|Huyện An Biên|Huyện An Minh|Huyện Vĩnh Thuận|Huyện Phú Quốc|Huyện Kiên Hải|Huyện U Minh Thượng|Huyện Giang Thành";
			s_a[16]="Thành phố Vị Thanh|Thị xã Ngã Bảy|Huyện Châu Thành A|Huyện Châu Thành|Huyện Phụng Hiệp|Huyện Vị Thuỷ|Huyện Long Mỹ|Thị xã Long Mỹ";
			s_a[17]="Thành phố Sóc Trăng|Huyện Châu Thành|Huyện Kế Sách|Huyện Mỹ Tú|Huyện Cù Lao Dung|Huyện Long Phú|Huyện Mỹ Xuyên|Thị xã Ngã Năm|Huyện Thạnh Trị|Thị xã Vĩnh Châu|Huyện Trần Đề";
			s_a[18]="Thành phố Cao Lãnh|Thành phố Sa Đéc|Thị xã Hồng Ngự|Huyện Tân Hồng|Huyện Hồng Ngự|Huyện Tam Nông|Huyện Tháp Mười|Huyện Cao Lãnh|Huyện Thanh Bình|Huyện Lấp Vò|Huyện Lai Vung|Huyện Châu Thành";
		function print_country(country_id)
		{
			var option_str = document.getElementById(country_id);

			    option_str.length=0;
			    option_str.options[0] = new Option('Tỉnh/Thành Phố','');
			    option_str.selectedIndex = 0;
			    for (var i=0; i<country_arr.length; i++)
			    {
			        option_str.options[option_str.length] = new Option(country_arr[i],country_arr[i]);
			    }
			}
		
		function print_state(state_id, state_index){
			var option_str = document.getElementById(state_id);
			    option_str.length=0;
			    option_str.options[0] = new Option('Quận/Huyện','2');
			    option_str.selectedIndex = 0;
			    var state_arr = s_a[state_index].split("|");
			    for (var i=0; i<state_arr.length; i++) {
			        option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
			        if(state_arr[i]=="")
			        {
			        	var dathang=document.getElementById("dathang");
			        	dathang.disabled=true;
			        }
			    }

			}
</script>
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

	<!-- ------------------------------------ Form --------------------------------------- -->
	<?php if(isset($_SESSION['tensp'])&&isset($_SESSION['tongtien']))
	{
		$tensp=$_SESSION['tensp'];
		 	?>
	<table class="table1"border=0>
		<td class="td2">
		<div class="container">	
			<form class="form-info" method="POST">
				<div class="form-text-tong">	
					<h3 class="formname">Thông tin khách hàng</h3>
					<div class="width-input">
						<?php if (isset($_SESSION['name']) && $_SESSION['name'])
						{
						
	 					$idsp=$_SESSION['idsp'];
			 	  		$email = $_SESSION['name'];
			         	$result=mysqli_query($conn,"SELECT khachhang_name,khachhang_phone from tbl_khachhang where khachhang_email='$email' ");
			          	$row=mysqli_fetch_assoc($result);?>
			        	
					<input class="form-tesxt1" type="text" name="ten" value=" <?php echo$row['khachhang_name']; ?> " placeholder=" Họ và tên (bắt buộc)" required>
					</div>
					<div class="width-input">			
	              		<input  class="form-tesxt1" name="sdt" type="text" value=" <?php  echo$row['khachhang_phone']; ?> "  placeholder=" Số điện thoại (bắt buộc)" required pattern="(\+84|0)\d{9,10}">
					</div>
					<div class="width-input">
						<input  class="form-tesxt1" type="text" value="<?php echo $email ?>" name="email" placeholder=" Email (Vui lòng điền email để nhận hóa đơn VAT)"required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
					</div>					 
       				<?php }
       				else{?>
       				<input class="form-tesxt1" type="text" name="ten" placeholder=" Họ và tên (bắt buộc)" required>
					</div>
					<div class="width-input">			
	              		<input  class="form-tesxt1" name="sdt" type="text"  placeholder=" Số điện thoại (bắt buộc)" required>
					</div>
					<div class="width-input">
						<input  class="form-tesxt1" type="text"  name="email" placeholder=" Email (Vui lòng điền email để nhận hóa đơn VAT)"required>
					</div>					
       				<?php
       			}
       				?>
						<h3 class="formname1">Chọn cách thức giao hàng</h3>
					<div class="form-tesxt2">
						<input class="radio1" id="cl1" type="radio"name="radio-choose1" checked> Nhận tại cửa hàng						
						<input class="radio2" id="cl2"type="radio" name="radio-choose2"> Giao hàng tận nơi					
					</div>
					
					<div class="form-text-tong1">
						<div class="form-text-tong1-1">
							<select onchange="print_state('state',this.selectedIndex);" id="country" name ="country" class="form-tesxt4">
								<option value disabled selected>Tỉnh/Thành phố</option>	
							</select>
						</div>
						<div>
							<select name ="state" id ="state" class="form-tesxt1-1">
								<option value disabled selected >Quận/Huyện</option>
							</select>

						</div>
						<div>
							<input id="dc2" class="form-tesxt0" type="text" name="dc2" placeholder="Nhập địa chỉ giao hàng" required>
						</div>
					</div>

					<div>
						<select name ="district" id ="district" class="form-tesxt1-11">
							<option value="145 Nguyễn Thị Minh Khai, Phường Phạm Ngũ Lão, Quận 1, Hồ Chí Minh" selected>145 Nguyễn Thị Minh Khai, Phường Phạm Ngũ Lão, Quận 1, Hồ Chí Minh</option>
							<option value="22/31A Đ. Số 8, Hiệp Bình Phước, Thủ Đức, Thành phố Hồ Chí Minh">22/31A Đ. Số 8, Hiệp Bình Phước, Thủ Đức, Thành phố Hồ Chí Minh</option>
						</select>
						
					</div>
					<div class="form-tesxt2">
						<input type="checkbox" name=" checkbox1"> Yêu cầu xuất hóa đơn công ty (Vui lòng điền email để nhận hóa đơn VAT)
					</div>
				</div>
				<div class="form-text-tong2">	
					<div class="tongtien">
						<div class="tongtien1"><h3>	Tổng tiền tạm tính:</h3></div>
						<div class="tongtien2"><h3><?php echo number_format($_SESSION['tongtien']).'đ';$tien=$_SESSION['tongtien'];?></h3>
							<input type="hidden" name="tensp" value="<?php echo $tensp ?>">
						</div>
					</div>
					<button class="button" id="dathang"> ĐẶT HÀNG</button>
					<style type="text/css">
						button[disabled]{
						  border: 1px solid #999999;
						  background-color: #cccccc;
						  color: #666666;
						}
					</style>
				</div>
			</form>		
			 <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="xulythanhtoanqr.php">
            <div style="margin-top: 1em;">
               <button type="submit" class="btn btn-primary btn-block">Thanh toán QR code</button>
             </div>
       </form>	
         <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="xulythanhtoanatm.php">
             <div style="margin-top: 1em;">
                 <button type="submit" class="btn btn-primary btn-block">Thanh toán qua thể ATM</button>
             </div>
                      
        </form>
		</div>
		</td>
	</table>
	<script type="text/javascript">
	var dc1 = document.getElementById("district");
	var country = document.getElementById("country");
	var state= document.getElementById("state");
	var dc2 = document.getElementById("dc2");
	var cl1 = document.getElementById("cl1");
	var cl2 = document.getElementById("cl2");
	var dathang=document.getElementById("dathang");
		cl2.checked = false
     	country.disabled=true
     	state.disabled=true
    	dc1.disabled=false
    	dc2.disabled=true
	cl1.onclick = function ()
    {  
     	cl2.checked = false
     	country.disabled=true
     	state.disabled=true
    	dc1.disabled=false
    	dc2.disabled=true
    	dathang.disabled=false
    }
   cl2.onclick=function()
    {
    	cl1.checked = false
    	country.disabled=false
     	state.disabled=false
    	dc1.disabled=true
    	dc2.disabled=false
    	dathang.disabled=true	
    }
  // country.onchange = function(){
    ///	alert(country.value);
    //	if(country.value!=1)
    //	{
    //		dathang.disabled= false;
    //	}
    //	else
    	//{
    //		dathang.disabled=true;
    //	}
   // }
    state.onchange=function(){
    if(state.value!=2)
    	{
    		dathang.disabled= false;
    	}
    	else
    	{
    		dathang.disabled=true;
    	}
    }
	</script>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		if(isset($_POST['radio-choose1']))
		{
			$dc1=$_POST['district'];
	       	$bien="(Nhận tại cửa hàng)".$dc1;
	       
	       //echo $bien;
	   	}
	    if(isset($_POST['radio-choose2']))
	    {
	    	$tinh=$_POST['country'];
			$huyen=$_POST['state'];
			$dc2=$_POST['dc2'];
	     	$bien=$dc2.",".$huyen.",".$tinh;
	  	}
	  	if(isset($_POST['checkbox1']))  	
	  		$yeucau="Xuat hoa don";  	
	  	else
	  		$yeucau="Không Xuat hoa don";
	  	
		//$bien=$dc.",".$huyen.",".$tinh;
		//echo $bien;
	    if(isset($_POST["ten"])) { $ten = trim($_POST['ten']); }
	    if(isset($_POST["sdt"])) { $sdt = trim($_POST['sdt']); }
	    if(isset($_POST["email"])) { $email = $_POST['email']; }
	    $sql = "INSERT INTO tbl_donhang( sanpham_name, khachhang_name, khachhang_phone, donhang_gia, donhang_diachi, yeucau, donhang_tinhtrang) VALUES ('$tensp','$ten','$sdt','$tien','$bien','$yeucau', 0)";
	    if ($conn->query($sql) === TRUE) {
	    	$idsp= explode("/",$_SESSION['idsp']);
		    $ssssss=count($idsp);
		    //echo$ssssss;
		    $str=$_SESSION['tensp'];
			$str1=explode(':',$str);
	    	for($i=1;$i<$ssssss;$i++)
			{ 
		    	$result2=mysqli_query($conn,"SELECT * FROM tbl_sanpham WHERE sanpham_id='$idsp[$i]'");
				$row2=mysqli_fetch_array($result2);
				$str2=substr($str1[$i],0,1);
				//echo $str2;
				//echo $row2['sanpham_daban'];
				$slsp=(int)$row2['sanpham_daban']+(int)$str2;
				$sql2="UPDATE tbl_sanpham SET sanpham_daban='$slsp' WHERE sanpham_id ='$idsp[$i]'";
				//echo $sql2;
				if($conn->query($sql2)==TRUE ){}
			    if (isset($_SESSION['name']) && $_SESSION['name'] && isset($_GET['ph'])){
							//echo $idsp[1]
					 	$sql1="DELETE FROM tbl_giohang WHERE sanpham_id='$idsp[$i]' and khachhang_email='$email'";
					 	echo $sql1;
					 	if ($conn->query($sql1) === TRUE) {
					 		//echo"ok";
					 	}
					 	else 
					 	{
				       		echo "Error: " . $sql . "<br>" . $conn->error;
			    		}
					}
			 	
			}
	    } 
	    else 
	    {
	        echo "Error: " . $sql . "<br>" . $conn->error;
	    }
	   	unset($_SESSION['tensp']);	
	 	unset($_SESSION['tongtien']);
	    ?>
	    <script type="text/javascript"> 
	    	document.location = "dathangthanhcong.php";
		</script>
	    <?php    
	}
	$conn->close();


	}
	else{
		   ?>
	    <script type="text/javascript"> 
	    	document.location = "index.php";
		</script>
	    <?php   
	}
	
	?>


	<!-- ------------------------------------ Form --------------------------------------- -->

	<!-- ------------------------------------ Footer ------------------------------------ -->
	<?php
		include('include/footer.php');
	?>
		<!-- ------------------------------------ Footer ------------------------------------ -->
	<script language="javascript">print_country("country");</script>
</body>
</html>

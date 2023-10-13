<?php  
	include_once('db/connect.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chính sách</title>
	<link rel = "stylesheet" href="css/style.css"/>
	<link rel = "stylesheet" href="css/reset.css"/>
	<link rel = "stylesheet" href="css/header.css"/>
	<link rel = "stylesheet" href="css/menu.css"/>
	<link rel = "stylesheet" href="css/slide.css"/>
	<link rel = "stylesheet" href="css/footer.css"/>
	<link rel = "stylesheet" href="css/chinhsach.css"/>
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


	<div class="tong-chinhsach">

		<div class="chinhsach-1">
			<span>TRẢ GÓP QUA CÔNG TY TÀI CHÍNH</span>
			<p class="chinhsach-1-1"><i>Áp dụng từ 10/10/2022.</i></p>
			<div class="chinhsach-1-2">
				<p class="chinhsach-1-2-1">
					1. Điều kiện và giấy tờ gốc cần có
				</p>
				<ul class="chinhsach-1-2-1-2">
					<li class="chinhsach-1-2-2">
						- Tuổi từ 18 – 65 (tính theo ngày tháng năm sinh trên chứng minh nhân dân/ Căn cước công dân)
					</li>
					<li class="chinhsach-1-2-2">
						- Chứng từ đơn giản chỉ cần có chứng minh nhân dân (15 năm tính từ ngày cấp)/ căn cước công dân còn thời hạn sử dụng.
					</li>
					<li class="chinhsach-1-2-2">
						- Công ty tài chính chỉ kiểm tra xong và gửi lại không giữ bất cứ giấy tờ gì của khách hàng.
					</li>
				</ul>
			</div>
			<div class="chinhsach-1-2">
				<p class="chinhsach-1-2-1">
					2. “Bí kíp” để duyệt trả góp tới 90%
				</p>
				<ul class="chinhsach-1-2-1-2">
					<li class="chinhsach-1-2-2">
						- Nếu bạn đang còn góp một hợp đồng trước đó với công ty tài chính thì nên góp hết hoặc thanh lý xong mới làm hồ sơ góp mới.
					</li>
					<li class="chinhsach-1-2-2">
						- Số tiền góp mỗi tháng nên bằng một nửa số tiền bạn còn dư sau khi chi tiêu. <br>VD: Thu nhập của bạn là 8tr, bạn chi tiêu bình quân 5tr còn dư 3tr thì tốt nhất bạn nên góp 1.5tr/tháng.
					</li>
					<li class="chinhsach-1-2-2">
						- Số điện thoại người tham chiếu nên là người thân của mình như vợ/chồng, anh/chị/em trong gia đình, bạn thân và phải biết việc mình chuẩn bị mua trả góp.
					</li>
					<li class="chinhsach-1-2-2">
						- Thông tin bạn cung cấp cho nhân viên tài chính càng chi tiết và chính xác thì hồ sơ của bạn có tỷ lệ duyệt càng cao
					</li>
					<li class="chinhsach-1-2-2">
						- Lịch sử vay tiền mặt hoặc trả góp tốt (trả hết, không đóng tiền quá trễ mỗi tháng) cũng là điều kiện để bạn được duyệt cho những lần kế tiếp.
					</li>
				</ul>
			</div>
			<div class="chinhsach-1-2">
				<p class="chinhsach-1-2-1">
					3. Lợi ích khi mua trả góp tại 3TL
				</p>
				<ul class="chinhsach-1-2-1-2">
					<li class="chinhsach-1-2-2">
						- Thủ tục đăng ký và duyệt hồ sơ nhanh chóng qua điện thoại. (Với hình thức này khách hàng không cần phải ra siêu thị để chờ đợi mà có thể lên hồ sơ trước, nếu hồ sơ hợp lệ thì mới mang đủ giấy tờ ra 3TL để nhận máy.)
					</li>
					<li class="chinhsach-1-2-2">
						- Bán theo giá niêm yết tại website và nhận đủ các khuyến mãi (Tuỳ sản phẩm sẽ không áp dụng đồng thời chương trình trả góp lãi suất 0%).
					</li>
				</ul>
			</div>
			<div class="chinhsach-1-2">
				<p class="chinhsach-1-2-1">
					4. Quy định về trả góp hàng hóa
				</p>
				<div class="chinhsach-1-2-1-2 bottom">
					<p class="chinhsach-1-2-3">
						1. Tuyên bố
					</p>
					<p class="chinhsach-1-2-4"><strong>a.</strong> Quý Khách Hàng có nhu cầu mua hàng trả góp, trả chậm có thể tự do lựa chọn và sử dụng dịch vụ của bất kỳ bên cung cấp dịch vụ, sản phẩm (“Đối Tác”) trả góp, trả chậm hoặc các dịch vụ, sản phẩm tài chính tương tự (“Dịch Vụ”).
					</p>
					<p class="chinhsach-1-2-4"><strong>b.</strong> 3TL được ủy quyền cung cấp hóa đơn và chi tiết sản phẩm bán của khách hàng cho đối tác trả góp.
					</p>
				</div>
				<div class="chinhsach-1-2-1-2 bottom">
					<p class="chinhsach-1-2-3">
						2. Bảo mật thông tin cá nhân
					</p>
					<p class="chinhsach-1-2-4"><strong>a.</strong> Khách Hàng đồng ý để cung cấp thông tin cá nhân cho 3TL để sử dụng Dịch Vụ bằng việc xác nhận mã OTP như sau: sau khi hợp đồng đã ký giữa Khách Hàng và Công ty Tài Chính thanh lý
					</p>

					<p class="chinhsach-1-2-4 bottom"><strong>b.</strong> 3TL thu thập Thông Tin Cá Nhân của Khách Hàng để sử dụng và chuyển giao cho Đối Tác. Trong khả năng của mình, 3TL chủ động thực hiện các biện pháp hợp lý để bảo vệ Thông Tin Cá Nhân tránh khỏi việc bị lạm dụng, mất mát, thay đổi, tiết lộ, mua lại hoặc truy cập trái phép. Tuy nhiên, 3TL không thể đưa ra một cam kết chắc chắn rằng Thông Tin Cá Nhân được đảm bảo an toàn một cách tuyệt đối và không đảm bảo việc sử dụng thông tin của Đối Tác. 3TL không chịu trách nhiệm trong trường hợp có sự truy cập trái phép Thông Tin Cá Nhân, đặc biệt là sau khi thông tin cá nhân đã được chuyển giao cho Đối Tác. Trong phạm vi pháp luật cho phép, thông tin cá nhân mà Khách Hàng cung cấp có thể được tiết lộ cho các mục đích đã nêu trong chính sách này đối với những đối tượng sau:
							<ul>
								<li class="chinhsach-1-2-5">
									Các công ty liên kết của 3TL hoặc các chi nhánh và nhân viên để cung cấp nội dung, thông tin hoặc phản hồi cho Khách Hàng hoặc cho 3TL;
								</li>
								<li class="chinhsach-1-2-5">
									Các chuyên gia tư vấn chuyên nghiệp của 3TL như kiểm toán viên, cố vấn tài chính và luật sư;
								</li>
								<li class="chinhsach-1-2-5">
									Các cơ quan quản lý nhà nước có liên quan và các cơ quan có thẩm quyền khác để đảm bảo việc tuân thủ pháp luật;
								</li>
								<li class="chinhsach-1-2-5">
									Bất kỳ bên nào khác mà Khách Hàng cho phép chúng tôi tiết lộ Thông tin cá nhân của mình.
								</li>
							</ul>
					</p>
					<p class="chinhsach-1-2-4"><strong>c.</strong> 3TL được miễn trừ và Khách Hàng phải tự chịu trách nhiệm trong trường hợp Đối Tác tiết lộ Thông Tin Cá Nhân cho bên thứ ba khác trái mục đích mong muốn của Khách Hàng.
					</p><br>
					<p class="chinhsach-1-2-4"><strong>d.</strong> Khách Hàng vui lòng liên hệ với 3TL trong trường hợp: 
						<br>(i) Khách Hàng thay đổi thông tin cá nhân đã cung cấp cho 3TL 
						<br>(ii) Khách Hàng muốn hủy thông tin cá nhân đã cung cấp sau khi hợp đồng đã ký giữa Khách Hàng và Đối Tác đã thanh lý.
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- ------------------------------------ Footer ------------------------------------ -->
	<?php
		include('include/footer.php');
	?>
	<!-- ------------------------------------ Footer ------------------------------------ -->	
</body>
</html>>
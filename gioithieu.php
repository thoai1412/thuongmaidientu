<?php  
	include_once('db/connect.php');
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>3TL</title>
	<link rel = "stylesheet" href="css/style.css"/>
	<link rel = "stylesheet" href="css/reset.css"/>
	<link rel = "stylesheet" href="css/header.css"/>
	<link rel = "stylesheet" href="css/menu.css"/>
	<link rel = "stylesheet" href="css/slide.css"/>
	<link rel = "stylesheet" href="css/footer.css"/>
	<link rel = "stylesheet" href="css/gioithieu.css"/>
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

	<div class="tong-gioithieu">		
		<div class="gioithieu-name">
			<span>GIỚI THIỆU CÁC HÃNG ĐIỆN THOẠI NỔI TIẾNG</span>
		</div>
		<div class="gioithieu-thongtin">
			<h3>
				<p class="namesanpham">1. APPLE</p>
			</h3>
				<p class="namesanpham-1">
					Nhắc đến các hãng điện thoại nổi tiếng không thể nào thiếu được cái tên Apple. Thương hiệu nằm ở một tầm cao mới vượt mặt tất cả các hãng điện thoại trên thế giới về công nghệ, hệ điều hành và chất lượng sử dụng.
				</p>
				<p class="namesanpham-1">
					Logo các hãng điện thoại, mẫu mã của Apple đều mang biểu tượng là quả táo khuyết. Apple luôn tạo ra những sản phẩm bất ngờ và đi trước thời đại.
				</p>
				<p class="namesanpham-1">
				Phải kể đến sản phẩm được ra mắt đầu tiên và ấn tượng nhất là iPhone 2G với màn hình có thể thu phóng đầu tiên trên thị trường điện thoại.
				</p>
			<img src="img/gioithieu_img/apple.png">
				<p class="name-mini">
					<i class="name-mini1">Apple luôn đứng đầu các hãng điện thoại nổi tiếng vì công nghệ tiên tiến của mình</i>
				</p>
				<p class="namesanpham-1">
					Apple dường như đứng đầu trong các hãng điện thoại nổi tiếng của Mỹ khi chiếm thị phần của người dân trên thế giới là 16% với 56,4 triệu chiếc đã được xuất xưởng và có mức tăng trưởng theo năm là 46,5%.
				</p>
				<p class="namesanpham-1">
					Điện thoại iPhone tạo nên tiếng vang thành công cho Apple có thể kể đến như iPhone 12, iPhone 11 Pro Max, iPhone XS và mới nhất là iPhone 13, iPhone 13 Pro Max.
				</p>
				<p class="namesanpham-1">
					Apple luôn biết cách làm cho người tiêu dùng đứng ngồi không yên trước những công nghệ, tính năng vượt trội của các sản phẩm của mình cùng với những chiến lược Marketing mà ai nấy đều phải thán phục.
				</p>
			<img src="img/gioithieu_img/apple2.png">
				<p class="name-mini">
					<i class="name-mini1">Các hãng điện thoại mới ra của Apple khiến người dân “đứng ngồi không yên” – Bảng xếp hạng: điện thoại đắt nhất thế giới</i>
				</p>
		</div>
		<div class="gioithieu-thongtin">
			<h3>
				<p class="namesanpham">2. SAMSUNG</p>
			</h3>
				<p class="namesanpham-1">
					Thương hiệu điện thoại Samsung được xem là “gã khổng lồ” của các hãng điện thoại Hàn Quốc và luôn duy trì ở vị trí thương hiệu hàng đầu Châu Á tính từ năm 2012.
				</p>
				<p class="namesanpham-1">
					Các hãng điện thoại Samsung luôn mang lại những tính năng vượt trội và các công nghệ đi trước thời đại cuốn hút người tiêu dùng.
				</p>
				<p class="namesanpham-1">
					Không chỉ tại khu vực Châu Á, sức nóng của “gã khổng lồ” này còn lan rộng khắp địa cầu khi chiếm hơn 20% thị phần người tiêu dùng
				</p>
			<img src="img/gioithieu_img/samsung.png">
				<p class="name-mini">
					<i class="name-mini1">Các hãng điện thoại Samsung được đông đảo người dân trên toàn cầu tin dùng</i>
				</p>
				<p class="namesanpham-1">
					Tính đến thời điểm hiện tại, Samsung đã sản xuất được hơn 75 triệu chiếc điện thoại với nhiều mẫu mã khác nhau và có được mức tăng trưởng hằng năm là hơn 30%.
				</p>
				<p class="namesanpham-1">
					Các dòng điện thoại như Note hoặc S sẽ hướng đến phân khúc cao cấp còn dòng A hoặc M thì sẽ nằm ở phân khúc phổ thông và bình dân với một mức giá hợp lý.
				</p>
				<p class="namesanpham-1">
					Lần đầu tiên trên thị trường xuất hiện một chiếc điện thoại thông minh mà có thể gập lại hoặc duỗi ra một cách linh hoạt. Mẫu điện thoại này đã phá vỡ mọi kỷ lục cũ của Samsung.
				</p>
				<p class="namesanpham-1">
					Sản phẩm nổi bật của thương hiệu này trong thời gian gần đây là Samsung Galaxy Z Fold 3 và Z Flip 3.
				</p>
			<img src="img/gioithieu_img/samsung2.png">
				<p class="name-mini">
					<i class="name-mini1">Samsung luôn đứng nhất trong bảng xếp hạng các hãng điện thoại </i>
				</p>
		</div>
		<div class="gioithieu-thongtin">
			<h3>
				<p class="namesanpham">3. XIAOMI</p>
			</h3>
				<p class="namesanpham-1">
					Các hãng điện thoại nội địa Trung Quốc đều phải khiếp sợ, dè chừng và luôn lấy Xiaomi làm một cột mốc phải vượt qua.
				</p>
				<p class="namesanpham-1">
					Xiaomi được thành lập vào năm 2010 và hiện đang trong top các hãng điện thoại lớn nhất thế giới chỉ sau Samsung và Apple.
				</p>
				<p class="namesanpham-1">
					Chỉ trong đầu năm 2021, ta có thể thấy được sự tăng trưởng khủng khiếp của thương hiệu chiêm 78,3% thị phần điện thoại trong nước và 14% đối với toàn cầu.
				</p>
			<img src="img/gioithieu_img/xiaomi.png">
				<p class="name-mini">
					<i class="name-mini1">Các hãng điện thoại Xiaomi chiếm số đông thị phần người dân nội địa Trung Quốc</i>
				</p>
				<p class="namesanpham-1">
					Xiaomi cũng được xếp vào các hãng điện thoại pin khủng nhất thị trường với thời gian sử dụng liên tục các sản phẩm trung bình lên đến 8 giờ. Cộng thêm với công nghệ sạc nhanh vốn được tích hợp sẵn thì đây thực sự là một đối thủ đáng gờm của các ông lớn.
				</p>
				<p class="namesanpham-1">
					Các dòng điện thoại sử dụng hệ điều hành Android của Xiaomi phải kể đến như Mi11 Youth Edition, K40 Pro 5g, Poco X3 Pro,…
				</p>
				<p class="namesanpham-1">
					Các hãng điện thoại Xiaomi cũng có sự sắp xếp phân khúc người tiêu dùng cách hợp lý khi chia thành 2 thương hiệu đó là Xiaomi và Redmi.
				</p>
				<p class="namesanpham-1">
					Xiaomi thì tập trung những mẫu flagship cao cấp còn giá cRedmi sẽ hướng đến người tiêu dùng phổ thông nhiều hơn.
				</p>
			<img src="img/gioithieu_img/xiaomi2.png">
				<p class="name-mini">
					<i class="name-mini1">Các hãng điện thoại Trung Quốc luôn xem thương hiệu Xiaomi như một tượng đài</i>
				</p>
		</div>
		<div class="gioithieu-thongtin">
			<h3>
				<p class="namesanpham">4. VIVO</p>
			</h3>
				<p class="namesanpham-1">
					Bên cạnh là nhà sản xuất điện thoại thông minh, các hãng điện thoại Vivo còn chế tạo ra những phần mềm, dịch vụ trực tuyến lớn nhất có trụ sở tại Trung Quốc.
				</p>
				<p class="namesanpham-1">
					Được thành lập vào năm 2009, tuy có xuất phát điểm muộn hơn các ông lớn nhưng Vivo lại được đánh giá là công ty điện thoại thông minh phát triển nhanh nhất trên thế giới và có nhiều dấu ấn mạnh mẽ trên thị trường.
				</p>
			<img src="img/gioithieu_img/vivo.png">
				<p class="name-mini">
					<i class="name-mini1">Vivo thuộc các hãng điện thoại Trung Quốc đáng mua nhất trên thị trường</i>
				</p>
				<p class="namesanpham-1">
					Đặt biệt hơn, Vivo còn phát triển riêng cho mình những phần mềm độc quyền như Vivo App Store, iManager hoặc hệ điều hành Funtouch OS. Chính vì sự tối ưu hóa này mà người tiêu dùng luôn bình chọn Vivo trong các hãng điện thoại chơi game mượt nhất thị trường.
				</p>
				<p class="namesanpham-1">
					Các dòng điện thoại mới ra của Vivo có thể kể đến như: X1, Xplay, X5 Pro, V21… Vivo cũng rất hiểu ý khách hàng khi phân phối nhiều dòng sản phẩm để tiếp cận được nhiều người tiêu dùng.
				</p>
				<p class="namesanpham-1">
					Dòng V thuộc phân khúc cao cấp, dòng Y ở mức tầm trung còn dòng S thuộc các hãng điện thoại tốt giá rẻ.
				</p>
			<img src="img/gioithieu_img/vivo2.png">
				<p class="name-mini">
					<i class="name-mini1">Các hãng máy điện thoại Vivo có nhiều phân khúc cho người tiêu dùng lựa chọn</i>
				</p>
		</div>
		<div class="gioithieu-thongtin">
			<h3>
				<p class="namesanpham">5. OPPO</p>
			</h3>
				<p class="namesanpham-1">
					Vào cuối năm 2021 và 2022 ta có thể thấy được sự bùng nổ của các hãng điện thoại Oppo khi vượt mặt được ông lớn Apple và có được cho mình vị trí đứng thứ 2 toàn cầu với thị phần hơn 16%.
				</p>
				<p class="namesanpham-1">
					Oppo chính thức gia nhập các thương hiệu điện thoại nổi tiếng vào năm 2008.
				</p>
				<p class="namesanpham-1">
					Tuy sinh sau đẻ muộn nhưng rất biết cách nghiên cứu và học hỏi những công nghệ tiên tiến mới như giao diện Color OS hay sạc siêu nhanh Super VOOC Charge đã khiến cho Oppo vượt mặt những ông lớn.
				</p>
				<p class="namesanpham-1">
					Tính vào thời kỳ hoàng kim, Oppo đã xuất xưởng 37,8 triệu chiếc điện thoại và đạt mức tăng trưởng lên đến 85,3% mỗi năm. Chỉ xếp sau ông lớn Vivo nhưng Oppo vẫn dễ dàng thuộc trong top 5 bảng xếp hạng các hãng điện thoại Trung Quốc
				</p>
			<img src="img/gioithieu_img/oppo.png">
				<p class="name-mini">
					<i class="name-mini1">Người tiêu dùng Việt luôn săn đón các hãng điện thoại của Oppo </i>
				</p>
		</div>
		<div class="gioithieu-thongtin">
			<h3>
				<p class="namesanpham">6. HUAWEI</p>
			</h3>
				<p class="namesanpham-1">
					Huawei là một trong những các hãng điện thoại Android dành được nhiều sự chú ý trong những năm trở lại đây.
				</p>
				<p class="namesanpham-1">
					Thương hiệu từng được đánh giá ngang hàng với các nhà sản xuất của Mỹ như iPhone hoặc Samsung nhưng Huawei đang dần có dấu hiệu sa sút và tụt dốc không phanh.
				</p>
				<p class="namesanpham-1">
					Huawei từng khiến thị trường phải bất ngờ khi lọt vào trong top các hãng sản xuất chip điện thoại tốt nhất thế giới. Dòng chip có tên là Kirin, đây cũng là chipset đầu tiên trên thế giới có tích hợp công nghệ AI và nhúng modem 5G.
				</p>
				<p class="namesanpham-1">
					Huawei cũng từng là đối tác của các thương hiệu điện thoại thông minh nổi tiếng khác. Thị phần điện thoại của Huawei dần đi xuống do lệnh cấm vận từ Chính phủ Mỹ khiến cho nguồn linh kiện của thương hiệu thiếu hụt trầm trọng.
				</p>
			<img src="img/gioithieu_img/huawei.png">
				<p class="name-mini">
					<i class="name-mini1">Các chuyên gia đánh giá các hãng điện thoại của Huawei sẽ dần bị “tuyệt chủng”</i>
				</p>
		</div>
		<div class="gioithieu-thongtin">
			<h3>
				<p class="namesanpham">7. REALME</p>
			</h3>
				<p class="namesanpham-1">
					Tiếp tục đến với thương hiệu Trung Quốc, Realme luôn được đề cử vào danh sách các hãng điện thoại nên mua vì sự đa dụng.
				</p>
				<p class="namesanpham-1">
					Realme từng là thương hiệu còn của Oppo. Nhưng vì mục đích muốn xây dựng thương hiệu riêng và phát triển hơn nên Realme đã tách ra vào ngày 6 tháng 5 năm 2018.
				</p>
				<p class="namesanpham-1">
					Realme tối ưu hóa sản phẩm của mình cực kỳ tốt khi đã phát triển thành công giao diện riêng mang tên Realme UI, đây là sự kết hợp những gì tốt nhất của Android 10 và ColorOS 7.
				</p>
				<p class="namesanpham-1">
					Realme còn được xem là một trong các hãng điện thoại chụp hình đẹp nhất khi hầu hết các sản phẩm của thương hiệu đều được trang bị nhiều cụm camera lên đến 50MP giúp hình ảnh chân thật hơn bao giờ hết.
				</p>
				<p class="namesanpham-1">
					Nếu đặt lên bàn cân so sánh các hãng điện thoại hiện nay với Realme thì chắc chắn thương hiệu đến từ Trung Quốc này sẽ giành chiến thắng tuyệt đối.
				</p>
			<img src="img/gioithieu_img/realme.png">
				<p class="name-mini">
					<i class="name-mini1">Các hãng điện thoại thông minh của Realme không làm người dùng thất vọng</i>
				</p>
		</div>
		<div class="gioithieu-thongtin">
			<h3>
				<p class="namesanpham">LỜI KẾT</p>
			</h3>
				<p class="namesanpham-1">
					Bài viết trên đã cung cấp và gợi ý cho người tiêu dùng danh sách các hãng điện thoại tốt nhất trên thị trường, kèm theo đó là các thông tin về điện thoại nội địa Việt Nam và các hãng điện thoại đã bị khai tử.
				</p>
				<p class="namesanpham-1">
					Hy vọng bài viết này giúp ích các bạn và đừng quên để lại ý kiến của mình cho 3TL nhé!
				</p>
		</div>
	</div>
	<!-- ------------------------------------ Footer ------------------------------------ -->
	<?php
		include('include/footer.php');
	?>
	<!-- ------------------------------------ Footer ------------------------------------ -->	
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Đăng Ký</title>
  <link rel = "stylesheet" href="css/style.css"/>
  <link rel = "stylesheet" href="css/reset.css"/>
  <link rel="stylesheet" href="font/fontawesome-free-6.2.0/css/all.css">
</head>
<body >
<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Welcome</div>
      <div class="eula">Website thương mai điện tử TLT - Thoai Luan Trung</div>
    </div>
    <div class="right">
      <div class="login-logo"><img src="img/logo.png"></div>
      <div class="dndk">
        <div class="dn"><a href="login.php">ĐĂNG NHẬP</a></div>
        <div class="dk"><a href="dangki.php">ĐĂNG KÝ</a></div>
      </div>
      <div class="form">
        <form action="dangki.php" name="dangkii" method="post"  >
          <label for="Hovaten" class="text-label">Họ và tên</label>
          <input type="Text" name="name" placeholder="Vui lòng nhập Họ và tên chính xác" id="Hovaten" required >
          <label for="email" class="text-label">Địa chỉ email</label>
          <input type="email"name="username"   placeholder="Địa chỉ email của quý khách"  id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required></input>
          <label for="sdt" class="text-label">Số điện thoại</label>
          <input name="sdt" type="Text" placeholder="Vui lòng nhập số điện thoại chính xác"  id="sdt"  pattern="(\+84|0)\d{9,10}" required>
          <div class="mk">
            <div class="nmk"> 
              <label for="password" class="text-label">Mật khẩu</label>
              <input  name="password" type="password" placeholder="Mật khẩu của quý khách"   id="password1" pattern="(?=.*[a-z]).{6}" title="Phải có ít nhất 6 ký tự và tối thiểu 1 chữ thường" required>
            </div>
            <div class="xnmk">
              <label for="password" class="text-label">Xác nhận mật khẩu</label>
              <input name="xnpassword" type="password" placeholder="Xác nhận mật khẩu"  id="password2"required>
            </div>
          </div>
          <div class="maxn" >
            <div class="input-area"> 
              <label class="text-label">Mã xác nhận</label>
              <input name="maxacnhan"type="text" placeholder="Enter captcha" maxlength="6"  required>
              <input type="hidden" name="bienphp" id="bienphp">
            </div>
            <div class="capcha" >
                <div class="captcha-area">
                    <span class="captcha"></span>
                    <button class="reload-btn"><i class="fa-solid fa-rotate-right"></i></button>
                </div>
            </div>
          </div>
          <button class="check-btn" type="submit" id="submit" value="Submit" name="dangky"> Đăng kí</button>  
          <div class="status-text"></div>
        </form>       
      </div>
    </div>
  </div>
</div>
  <script src="js/crip1.js"></script>
  <?php require 'xulydangki.php'?>
</body>
</body>
</html>
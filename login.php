<?php  
  include_once('db/connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Đăng nhập</title>
  <link rel = "stylesheet" href="css/style.css"/>
  <link rel = "stylesheet" href="css/reset.css"/>
  <link rel = "stylesheet" href="css/login.css"/>
  <link rel="stylesheet" href="font/fontawesome-free-6.2.0/css/all.css">
</head>
<body>
<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Welcome</div>
      <div class="eula">Website thương mai điện tử TLT - Thoai Luan Trung</div>
    </div>
    <div class="right">
      <div class="login-logo"><img src="img/logo.png"></div>
      <div class="dndk">
        <div class="dn"><a href="#">ĐĂNG NHẬP</a></div>
        <div class="dk"><a href="dangki.php">ĐĂNG KÝ </a></div>
      </div>

      <div class="form">
                   <?php
        session_start();
        if (isset($_POST["submit"])){
        
          if ((empty($_POST['user_name']))||(empty($_POST['user_pass'])))
          { 
            echo '<p style="color:red"> Bạn chưa nhập tên đăng nhập hoặc mật khẩu!';
          }
          else{
            $user_name=$_POST['user_name'];
            $user_pass=$_POST['user_pass'];
            $user_name = strip_tags($user_name);
            $user_name = addslashes($user_name);
            $user_pass = strip_tags($user_pass);
            $user_pass = addslashes($user_pass);
            $result=mysqli_query($conn,"SELECT * from tbl_admin where admin_email='$user_name' and admin_pass='$user_pass'");
            $row=mysqli_fetch_assoc($result);
            $result1=mysqli_query($conn,"SELECT * from tbl_khachhang where khachhang_email='$user_name' and khachhang_pass='$user_pass'");                  
            $row1=mysqli_fetch_assoc($result1);
            if($row){
              $_SESSION['id_admin'] = $row['admin_id'];
              $id_admin = $_SESSION['id_admin'] ;
               
              header("Location:admin.php?id_admin=$id_admin"); 
            }
            else if($row1)
            {
              $_SESSION['id_user'] = $row1['khachhang_id'];
              $id_user = $_SESSION['id_user'] ;
               $_SESSION['name'] = $user_name;
              header("Location:index.php?id_user=$id_user");
            }
            else{echo '<p style="color:red"> Tên đăng nhập hoặc mật khẩu không đúng!';}
          }   
        
        }
        ?>
        <form  name="dangky" method="post">
          <label for="email" class="text-label">Email</label>
          <input type="email" placeholder="Địa chỉ email của quý khách" id="email" name="user_name">
          <label for="password" class="text-label">Password</label>
          <input type="password" placeholder="Mật khẩu của quý khách"  id="password" name="user_pass">
          <div class="forgot-password"><a href="#">Quên mật khẩu ?</a></div>
          <input type="submit" name="submit" id="button" value="Đăng nhập"></input>
        </form>

        <div class="login-with"><h4>Hoặc đăng nhập qua</h4></div>
        <div class="dn-gg-fb">
          <div class="fb">
            <button type="text" id="submit1" value="Submit" name="123">
              <span><i class="fa-brands fa-facebook"></i></span> Facebook
            </button>
          </div>
          <div class="gg">
            <button type="text" id="submit2" value="Submit" name="1234">
              <span><i class="fa-brands fa-google"></i></span> Google
          </button>
          </div>
          </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
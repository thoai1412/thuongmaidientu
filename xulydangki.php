<?php
    include_once('db/connect.php');

    if(isset($_POST['bienphp'])){
        $x=trim($_POST['bienphp']);
        var_dump($x);
        if($x==1){    
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            $name = trim($_POST['name']);
            $phone = trim($_POST['sdt']);

            $sql = "SELECT * FROM tbl_khachhang WHERE khachhang_email = '$username'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0)
            {
                echo '<script language="javascript">alert("Tài khoản đã tồn tại quý khách vui lòng đăng ký lại");</script>';
            }
            else {
                $sql = "INSERT INTO tbl_khachhang(khachhang_pass, khachhang_name,khachhang_phone, khachhang_email) VALUES ('$password','$name','$phone','$username')";
                echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="login.php";</script>';

                if (mysqli_query($conn, $sql)){
                    echo "Tên đăng nhập: ".$_POST['username']."<br/>";
                    echo "Mật khẩu: " .$_POST['password']."<br/>";
                    echo "Email đăng nhập: ".$_POST['email']."<br/>";
                    echo "Số điện thoại: ".$_POST['phone']."<br/>";
                }
                else {
                    echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
                }
            }
        }
    }
?>
<?php
    session_start();
    if(isset($_POST['btnLogin'])){
        $email = $_POST['email'];
        $pass  = $_POST['matkhau'];
        //Ở đây còn phải kiểm tra người dùng đã nhập chưa

        // Bước 01: Kết nối Database Server
        require_once 'config/database.php';
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM khachhang WHERE email = '$email' AND matkhau='$pass'";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection

        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            // CẤP THẺ LÀM VIỆC
            $_SESSION['isLoginOK'] = $email;
            header("location:index.php?id=$email"); //Chuyển hướng về Trang quản trị
        }else{
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            header("location:login.php?error=$error"); 
        }
        mysqli_close($conn);
    }else{
        header("location:login.php");
    }
?>
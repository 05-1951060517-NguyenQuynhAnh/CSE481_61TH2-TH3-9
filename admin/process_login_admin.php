<?php
    session_start();
    if(isset($_POST['btnLogin'])){
        $user = $_POST['txtuser'];
        $pass  = $_POST['txtpass'];
        require_once '../config/database.php';
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM account WHERE email = '$user'AND password='$pass'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
          
            $_SESSION['isLoginOK'] = $email;
            header("location:index.php?id=$user"); //Chuyển hướng về Trang quản trị
        }else{
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            header("location:login.php?error=$error"); 
        }
        mysqli_close($conn);
    }else{
        //header("location:login.php");
    }
?>
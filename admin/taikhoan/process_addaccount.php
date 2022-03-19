<?php
    $id = $_POST['id']; 
    $hovaten = $_POST['hovaten'];
    $gioitinh = $_POST['gioitinh'];
    $ngaysinh = $_POST['ngaysinh'];
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    
    $conn = mysqli_connect('localhost','root','','cse481');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "INSERT INTO account (id,hoten,gioitinh,ngaysinh,email,password) VALUES('$id','$hovaten','$gioitinh','$ngaysinh','$email','$matkhau')";
    $number = mysqli_query($conn,$sql);
    if($number > 0){
     header("location: taikhoan.php"); //Chuyển hướng về Trang quản trị
    }else{
        header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }

    mysqli_close($conn);
?>


<?php
    $id = $_POST['id']; 
    $hovaten = $_POST['hovaten'];
    $gioitinh = $_POST['gioitinh'];
    $ngaysinh = $_POST['ngaysinh'];
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    
     
    require_once 'config/database.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    
    $sql = "INSERT INTO account (hovaten,chucvu,sodt_coquan,sodt_didong,email,ma_donvi) VALUES('$hoVaTen','$chucVu','$soMayBan','$soDiDong','$email','$maDonVi')";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
     header("location: admin.php"); //Chuyển hướng về Trang quản trị
    }else{
        header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }

    mysqli_close($conn);
?>


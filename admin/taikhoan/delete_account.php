<?php
    $id = $_GET['id'];
    $id1 = $_GET['id1'];
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','cse481');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "DELETE FROM account WHERE id = '$id1'";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: taikhoan.php?id=$id"); //Chuyển hướng về Trang quản trị
    }else{
        header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>
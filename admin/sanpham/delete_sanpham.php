<?php
    $MaSP = $_GET['id'];
    require_once '../../config/database.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "DELETE FROM sanpham WHERE MaSP = '$MaSP'";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: sanpham.php");
    }else{
        header("location: error.php"); 
    }
    mysqli_close($conn);
?>
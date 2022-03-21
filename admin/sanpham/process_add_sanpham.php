<?php
    $MaSP = $_POST['txtMaSP'];
    $TenSP = $_POST['txtTenSP'];
    $Giaban = $_POST['txtGiaban'];
    $Gianhap = $_POST['txtGianhap'];
    $Soluong = $_POST['txtSoluong'];
    $Trangthai= $_POST['txtTrangthai'];
    $Mota = $_POST['txtMota'];
    $file3 = $_POST['file3'];
    if (!$MaSP || !$TenSP || !$Giaban || !$Gianhap || !$Soluong || !$Trangthai || !$Mota || !$file3 )
    {
        $error = "Vui lòng nhập đầy đủ thông tin";
        header("location:add_sanpham.php?error=$error"); 
        exit;
    }
    require_once '../../config/database.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "INSERT INTO sanpham (MaSP,TenSP,Giaban,Gianhap,Soluong,Mota,Trangthai,img,MaLH) VALUES('$MaSP','$TenSP','$Giaban','$Gianhap','$Soluong','$Mota','$Trangthai','$file3','LH01')";
    $number = mysqli_query($conn,$sql);

    if($number > 0){
     header("location: sanpham.php"); 
    }else{
        header("location: error.php"); 
    }

    mysqli_close($conn);
?>
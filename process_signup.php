<?php
     
if($_SERVER['REQUEST_METHOD'] =="POST"){
    $gioitinh = $_POST['gender'];
    $hovaten = $_POST['hovaten'];
    $ngaysinh = $_POST['ngaysinh'];
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    
}
require_once 'config/database.php';
if(!$conn){
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
// Bước 02: Thực hiện truy vấn
$sql01 = "SELECT * FROM khachhang WHERE email = '$email'";

$result = mysqli_query($conn,$sql01);
if(mysqli_num_rows($result) > 0){
// CẤP THẺ LÀM VIỆC
$error = "Email is exsted";
header("location:index.php?error=$error"); //Chuyển hướng về Trang quản trị
}else{
$sql = "INSERT INTO khachhang(TenK,Gioitinh,Ngaysinh,email,matkhau) VALUES('$hovaten ', '$gioitinh', ' $ngaysinh','$email','$matkhau')";
$result = mysqli_query($conn,$sql);
if($result >0){
    // CẤP THẺ LÀM VIỆC.
    header("location:login.php"); 
}else{
    $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
    header("location:index.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
}
}

// Bước 03: Đóng kết nối
mysqli_close($conn);  
?>

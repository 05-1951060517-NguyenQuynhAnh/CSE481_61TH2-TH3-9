<?php
    $id= $_GET['id'];
    $passold = $_POST['txtpass'];
    $passnew = $_POST['txtpassnew'];
    
    require_once 'config/database.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql1 = "SELECT * FROM khachhang WHERE matkhau='$passold'";
    $result1 = mysqli_query($conn,$sql1);
        if(mysqli_num_rows($result1) > 0){   
            $sql = "UPDATE khachhang SET matkhau='$passnew' WHERE MaK='$id'";
            $result = mysqli_query($conn,$sql);
            if(!$result){
                echo "<script type='text/javascript'>alert('Nhập sai');</script>";
            }else{
                header("location: login.php?id=$id"); 
            }
        }else{
            $error = "Bạn nhập mật khẩu chưa chính xác";
            header("location:user.php?error=$error"); 
        }
    mysqli_close($conn);
?>
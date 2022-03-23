<?php 
session_start();
require_once '../config/database.php';
if(!$conn){
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
        $id = $_GET['id'];
        $sql = "SELECT * FROM account WHERE id ='$id'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if($row['chucvu'] =='admin'){             
                header("location:index.php?id=$id");
            }
            else{
                header("location:sanpham/sanpham.php?id=$id");
            }
        }else{
            
        }
        mysqli_close($conn);
?>


<?php
    // addEmployee.php TRUYỀN DỮ LIỆU SANG
    // process-add-Employee: NHẬN DỮ LIỆU TỪ admin.php gửi sang

        $sluong = $_POST['sluong'];
        $id =$_GET['id'];
        $id1 =$_GET['id1'];
        require_once '../config/database.php';
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "INSERT INTO giohang (MaSP,MaK,Soluong) VALUES('$id1','$id','$sluong')";
        $number = mysqli_query($conn,$sql);

        if($number > 0){
         header("location: ../detail.php?id=$id1&id1=$id"); //Chuyển hướng về Trang quản trị
        }else{
            header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
        }
    
        mysqli_close($conn);
?>

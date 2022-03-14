<?php
     

    $gioitinh = $_POST['gender'];
    $hovaten = $_POST['hovaten'];
    $ngaysinh = $_POST['ngaysinh'];
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    if (!$gioitinh || !$hovaten || !$ngaysinh || !$email || !$matkhau )
    {
        $error = "Vui lòng nhập đầy đủ thông tin";
        header("location:signup.php?error=$error"); 
        exit;
    }

    $partten = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
    if(!preg_match($partten ,$email, $matchs))
    $error = "Nhập sai định dạng email";
    header("location:signup.php?error=$error"); 
    exit;


    
    require_once 'config/database.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql01 = "SELECT * FROM khachhang WHERE email = '$email'";

    $result = mysqli_query($conn,$sql01);
    if(mysqli_num_rows($result) > 0){
    // CẤP THẺ LÀM VIỆC
    $error = "Tài khoản Email đã tồn tại";
    header("location:signup.php?error=$error"); //Chuyển hướng về Trang quản trị
    }else{
    $sql = "INSERT INTO khachhang(TenK, Gioitinh, Ngaysinh, email, matkhau) VALUES('$hovaten ', '$gioitinh', ' $ngaysinh','$email','$matkhau')";
    $result = mysqli_query($conn,$sql);
    if($result ==true){
        // CẤP THẺ LÀM VIỆC.
        header("location:login.php"); 
    }else{
        $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
        header("location:signup.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
    }
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);  
?>

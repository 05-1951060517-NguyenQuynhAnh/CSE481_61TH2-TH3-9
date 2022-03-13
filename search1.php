<?php include('config/database.php'); 
$id =$_GET['id'];
?>
<?php 
    $sql3 = "SELECT * FROM khachhang, sanpham where khachhang.MaK='$id' ";
    $result3 = mysqli_query($conn,$sql3);
    if(mysqli_num_rows($result3)>0){
        $row = mysqli_fetch_assoc($result3);
        }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="public/style1.css">
    <title>CSE481 - Tiệm thời trang</title>
    <link rel="shortcut icon" href="img/1.png">
</head>

<body>
    <div class="header">
        <div class="container-fluid" style="background:#e68e12;">
            <div class="container content">
                <div class="container">
                    <div class="row">
                        <div class="col py-3" style="font-size:13px;">
                            CSE481@GMAIL.COM | Hotline: 0837 473 645
                        </div>
                        <div class="col text-nowrap my-auto" style="font-size:13px;">
                            <p class="mb-0">
                                Tặng nay voucher trị giá 150.000VNĐ khi mua sản phẩm từ 1.000.000 VNĐ
                            </p>
                            <div class="text-center mx-auto">
                                Đơn hàng được FreeShip khi mua từ 500.000 VNĐ
                            </div>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <div class="">
                                <form action="search.php" method="post">
                                    <div class="pt-2 ms-5 d-flex">
                                        <input class="py-2 rounded-start" type="text"
                                            style="border:none;padding-left: 10px;font-size:12px;width:250px"
                                            name="namesearch" placeholder="The clothes you need...">
                                        <button type="submit" class="border-0 rounded-0 rounded-end bg-white"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
                                                <path
                                                    d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z" />
                                                <path
                                                    d="M13 6.5a6.471 6.471 0 0 1-1.258 3.844c.04.03.078.062.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1.007 1.007 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5ZM6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z" />
                                            </svg></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row px-5">
                <div class="col-md-3 ">
                    <img src="img/logo-hcn.png" alt="" class="mt-2 ms-2 img-fluid">
                </div>
                <div class="col-md ps-0 mt-4">
                    <div class="row">
                        <div class="col-md">
                            <ul class="nav justify-content-center">
                                <li class="nav-item fw-bold ">
                                    <a class="nav-link link-dark pe-1" style="font-size:15px" aria-current="page"
                                        href="#">TRANG CHỦ</a>
                                </li>
                                <li class="nav-item fw-bold">
                                    <a style="font-size:15px" class="pe-1 nav-link dropdown-toggle link-dark" href="#"
                                        id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        SẢN PHẨM
                                    </a>
                                    <ul
                                        class="dropdown-menu rounded-0 border-warning border-end-0 border-bottom-0 border-start-0 border-2">
                                        <li><a href="product/all1.php?id=<?php echo $row['MaK'];?> "class="dropdown-item" STYLE="font-size:13px" href="#">Shop All </a></li>
                                        <li><a href="product/top1.php?id=<?php echo $row['MaK'];?>"class="dropdown-item" STYLE="font-size:13px" href="#">TOP</a></li>
                                        <li><a href="product/bottom1.php?id=<?php echo $row['MaK'];?>"class="dropdown-item" STYLE="font-size:13px" href="#">BOTTOM</a></li>
                                        <li><a href="product/skirt1.php?id=<?php echo $row['MaK'];?>"class="dropdown-item" STYLE="font-size:13px" href="#">SKIRT</a></li>
                                        <li><a href="product/phukien1.php?id=<?php echo $row['MaK'];?>"class="dropdown-item" STYLE="font-size:13px" href="#">ACCESSORIES</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item fw-bold">
                                    <a class=" pe-1 nav-link link-dark" style="font-size:15px" href="#">HƯỚNG DẪN</a>
                                </li>
                                <li class="nav-item fw-bold">
                                    <a class="pe-1 nav-link link-dark" style="font-size:15px">BẢNG SIZE</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 mt-1 d-flex">
                            <a href="user.php?id=<?php echo $row['MaK'];?>" class="text-decoration-none link-dark">
                                <div class="d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                        class="bi bi-people me-2" viewBox="0 0 16 16">
                                        <path
                                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                                    </svg>
                                    <p class="pt-1" style="font-size:13px"><?php echo $row['TenK'];?>
                                    </p>
                                </div>
                            </a>
                            <a href="" class="text-decoration-none link-dark">
                                <div class="ms-3">
                                    <p class="pt-1 fw-bold link-primary" style="font-size:13px">Đăng xuất</p>
                                </div>
                            </a>
                            <a href="cart.php?id=<?php echo $row['MaK']?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="ms-3 link-dark bi bi-cart4" viewBox="0 0 16 16">
                                    <path
                                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-2" style="background:#f1f1f1">
            <div class="container">
                <p class="px-5 ms-2 py-2 text-muted" style="font-size:13px">Trang chủ / Sản phẩm</p>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="px-5 mt-5">
                <div class="row d-flex">
                    <div class="danhmuc col-md-2">
                        <div class="mt-5">
                            <h5 class="border-bottom fw-bold pt-2 ">
                                Bộ lọc sản phẩm</h5>
                            <ul class="text-nowrap list-unstyled">
                                <li><a class="text-decoration-none link-dark fw-bold fs-5" href="">Áo</a></li>
                                <li class="py-1"><a class="text-decoration-none link-dark" href="">Áo sơ mi</a></li>
                                <li class="py-1"><a class="text-decoration-none link-dark" href="">Áo thun</a></li>
                                <li class="py-1"><a class="text-decoration-none link-dark" href="">Áo croptop</a></li>
                                <li class="py-1"><a class="text-decoration-none link-dark" href="">Áo body</a></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="">
                            <ul class="text-nowrap list-unstyled">
                                <li><a class="text-decoration-none link-dark fw-bold fs-5" href="">Quần</a></li>
                                <li class="py-1"><a class="text-decoration-none link-dark" href="">Áo vải</a></li>
                                <li class="py-1"><a class="text-decoration-none link-dark" href="">Áo bò</a></li>
                                <li class="py-1"><a class="text-decoration-none link-dark" href="">Áo đùi</a></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="">
                            <ul class="text-nowrap list-unstyled">
                                <li><a class="text-decoration-none link-dark fw-bold fs-5" href="">Váy</a></li>
                                <li class="py-1"><a class="text-decoration-none link-dark" href="">Váy liền</a></li>
                                <li class="py-1"><a class="text-decoration-none link-dark" href="">Chân váy</a></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="">
                            <ul class="text-nowrap list-unstyled">
                                <li><a class="text-decoration-none link-dark fw-bold fs-5" href="">Phụ kiện</a></li>
                                <li class="py-1"><a class="text-decoration-none link-dark" href="">Nón</a></li>
                                <li class="py-1"><a class="text-decoration-none link-dark" href="">Giày</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="row col-md d-flex">
                        <h3 class="border-bottom fw-bold pt-5" style="color:#d61114;">
                            Sản phẩm phù hợp</h3>
                        <?php 
                            $search =$_POST['namesearch'];
                            $sql = "SELECT COUNT(TenSP) as search FROM sanpham WHERE TenSP like '%$search%'";
                        $result = mysqli_query($conn,$sql);

                        if(mysqli_num_rows($result)>0){
                            $row = mysqli_fetch_assoc($result);
                        }
                      
                        
                    ?>
                        <h6 class="pt-3 ms-3 mb-5" style="">
                            <?php
                           echo $row['search'];
                    ?> sản phẩm phù hợp với từ khóa '<?php echo $search?>'</h6>
                        <?php 
                            $sql1 = "SELECT *, sanpham.Giaban-(sanpham.Giaban*sanpham.Tylegiamgia) as Giagiam FROM khachhang,`sanpham` WHERE TenSP like '%$search%' and khachhang.MaK='$id'";
                            $res1 = mysqli_query($conn, $sql1);
                            $count1 = mysqli_num_rows($res1);
                            if($count1>0)
                            {
                                while($row=mysqli_fetch_assoc($res1))
                                {
                        ?>
                        <div class="card  mx-3 border-0" style="width: 19rem;">
                            <img src="img/dam1.webp" class="card-img-top" alt="...">
                            <div class="overlay d-flex">
                            <a href="detail.php?id=<?php echo $row['MaSP']?>&id1=<?php echo $row['MaK']?>">
                                    <div  class="detail rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            fill="currentColor" style="margin:18.5px" class="bi bi-card-heading"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                            <path
                                                d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <p class="card-text"><?php echo $row['TenSP']?>.</p>
                                <p class="d-inline fw-bold"><?php echo $row['Giagiam']?> VNĐ </p>
                            </div>
                        </div>
                        <?php
                                }
                            }
                            else{
                                ?>
                        <div class="text-center">
                            <img src="img/iconbuon.jpg" style="width:200px" alt="">
                        </div>

                        <div class="text-center">
                            <?php
                                echo "<h5>Có vẻ như sản phẩm '$search' hiện không có trong shop. Chúng tôi sẽ cố gắng cập nhật nhiều sản phẩm hơn.</h5>"; ?>
                        </div>
                        <?php
                            }
                ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
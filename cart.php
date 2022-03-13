<?php include('config/database.php'); 
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
    <link rel="stylesheet" href="css/style2.css">
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
                                <form action="" method="GET">
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
                                        <li><a class="dropdown-item" STYLE="font-size:13px" href="#">Shop All </a></li>
                                        <li><a class="dropdown-item" STYLE="font-size:13px" href="#">TOP</a></li>
                                        <li><a class="dropdown-item" STYLE="font-size:13px" href="#">BOTTOM</a></li>
                                        <li><a class="dropdown-item" STYLE="font-size:13px" href="#">ACCESSORIES</a>
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
                        <div class="col-md-3 mt-1 d-flex">
                            <a href="" class="text-decoration-none link-dark">
                                <div class="d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                        class="bi bi-people me-2" viewBox="0 0 16 16">
                                        <path
                                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                                    </svg>
                                    <p class="pt-1" style="font-size:13px">Đăng nhập</p>
                                </div>
                            </a>
                            <a href="" class="text-decoration-none link-dark">
                                <div class="ms-3">
                                    <p class="pt-1 fw-bold link-primary" style="font-size:13px">Đăng ký</p>
                                </div>
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
            <div class="px-5">

                <table class="table">
                    <thead>
                        <tr style="color:#888;">
                            <th class="col-md-4" scope="col">Tên sản phẩm</th>
                            <th scope="col">Phân loại hàng</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="">
                                <img class="d-inline" width="100px" src="img/ao1.webp" alt="">
                                <p class="d-inline ms-3">VÁy công sở</p>
                            </td>
                            <td class="pt-5">Size S</td>
                            <td class="pt-5">Size S</td>
                            <td class="pt-5"><input style="width : 50px" name="sluong" type="number" prdchill="5"
                                    value="1"></td>
                            <td class="pt-5 " style="color:red">345.000đ</td>
                            <td class="pt-5">Size S</td>

                        </tr>
                       


                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="px-5 ">

                <div class="row mt-5">
        
                    <div class="col-md-6">
                        
                    </div>
                    <div style="bottom:0px;box-shadow: 0 2px 4px 0 #0000001a, 0 8px 16px 0 #0000001a;"class="px-5 py-3 col-md-6">
                        <p class="fs-4 fw-bold">Tổng thanh toán (10 sản phẩm): </p>
                        <div class="d-flex">
                            
                            <p>Số lượng: </p>
                            
                            <p class="ms-2">4 </p>
                        </div>
                        <div class="d-flex">
                            
                            <p>Tổng tiền: </p>
                            
                            <p style="color:red" class="ms-2">64523VNĐ </p>
                        </div>
                        <a href=""><button style="font-size:14px;color:white;"
                                class="mt-3 fw-bold col-md-12 btn btn-lg btn-block bg-danger" name="">Đặt hàng</button></a>
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
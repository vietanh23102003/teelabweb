<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "Views/Templates/link.php";?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="main">
        <div style="width:100%; background-color: white; margin-top: 10px; " class="topbar">
            <div style="width:90%; padding-bottom: 10px; border-bottom: 1px solid #555454; margin-bottom: 50px;" class="container">
                <div   class="topleft">
                    <a href=""><i style="font-size: 40px; color:black;" class='bx bx-menu'></i></a>
                    <ul class="subnav">
                        <li><a href="index.php?task=pagehome">Tất cả sản phẩm</a></li>
                        <li><a href="index.php?task=pagedidas">Áo khoác</a></li>
                        <li><a href="index.php?task=pagepuma">Áo thun</a></li>
                        <li><a href="index.php?task=pagevans">Áo babyTee</a></li>
                        <li><a href="index.php?task=pagebalance">Áo croptop</a></li>
                        <li><a href="index.php?task=pagebalenciaga">Áo gió</a></li>
                        <li><a href="index.php?task=pageconverse">Quần</a></li>
                        <li><a href="">Mũ</a></li>
                    </ul>
                </div>
                <div style="margin-left: 39%;" class="topmid">
                    <a href="index.php?task=pagehome"><img src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/logo.png?1706351227994" alt=""></a>
                </div>
                <div style="margin-right: 80px;"  class="topright">
                    <form class="form-inline my-2 my-lg-0" method="POST">
                    <input style="min-width: 250px;" class="form-control mr-sm-0" type="search" name="text_search" placeholder="Tìm kiếm sản phẩm" aria-label="Search">
                    <button style="top:51% !important; padding-left: 15px;" class="btn btn-outline-light menu my-2 my-sm-0" type="submit" name="search"><i class="fas fa-search"></i> </button>
                    </form>
                    <a href=""><span style=" width: 32px;
                        height: 28px;
                        padding-left: 13px;
                        padding-top: 8px;
                        color: red;" >
                        <a style="right: 7%; width: min-content; color: red; border: 1px solid black; background-color: white;" href="index.php?task=cart" class="btn btn-outline-light menu">
                        <i class="fas fa-shopping-cart"></i>
                        <label class="label-cart">
                            <?php
                                echo count($_SESSION['cart']);
                            ?>
                        </label>
                    </a>
                        </span></a>
                    <a href="index.php?task=pagelogin"><span style="padding-top: 8px;  width: 32px;
                        height: 28px; 
                        color: red;
                        " >
                        <?php if (isset($_SESSION['username'])){
                            if ($_SESSION['level'] ==2){ ?>
                            <a style="width: min-content; color: red; border: 1px solid black; background-color: white; left: -53%;" href="index.php?task=pageuser" class="btn btn-outline-light menu"><?php echo $_SESSION['username']?></a>
                            <a style="width: min-content; color: red; border: 1px solid black; background-color: white; left: 94%;" href="index.php?task=logout" class="btn btn-outline-light menu">Đăng xuất</a>
                    <?php }elseif ($_SESSION['level']==1){ ?>
                            <a style="right: -172%;width: min-content; color: red; border: 1px solid black;background-color: white;"  href="" class="btn btn-outline-light menu"><?php echo $_SESSION['username']?></a>
                            <a style="width: min-content; color: red; border: 1px solid black; background-color: white; left: 94%;" href="index.php?task=logout" class="btn btn-outline-light menu">Đăng xuất</a>
                    <?php }?>
                    <?php }else{ ?>
                    <a style="width: min-content; color: red; border: 1px solid black; background-color: white; left: 94%;" href="index.php?task=pagelogin" class="btn btn-outline-light menu">
                        <i class="fas fa-user"></i>Tài khoản
                    </a>
                    <?php } ?>
                        </span></a>
                </div>
            </div>
        </div>
        <div style="width:40%; margin: auto;" class="mid">
            <h1 style="text-align: center;">LOGIN</h1>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control"  aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" >
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" >
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                
                <p style="text-align: center;">Nếu bạn chưa có tài khoản thì đăng ký <a style="color: red;" href="./index.php?task=pageregister">tại đây</a>!</p>
                <button  name="login" type="submit" class="btn btn-primary">Đăng nhập</button>
                 </form>
        </div>
        <div style="margin-top: 50px; background-color:white; color:black;  width:100%; " class="footer">
            <div class="container" style="margin:auto;width:90%; border-top: 1px solid #555454; padding-top: 10px;">
                <div class="row">
                    <div class="cot mot">
                        <div class="logo"><a href="">
                            <img width="135" height="21"  src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/logo.png?1706351227994" alt="" data-was-processed="true">
                        </a></div>
                        <div style="font-size: 9px; line-height: 1.5;">
                            <b style="font-size: 14px;">HKD Vũ Thị Quỳnh Anh</b>
                            <br>
                            Giấy chứng nhận đăng ký HKD số 17A80041952 do Phòng Tài chính - Kế hoạch, Uỷ ban nhân dân thành phố Thái Nguyên cấp ngày 30/5/2019
                            <br>
                            Địa chỉ: Số 235, Đường Quang Trung, Tổ 7, Phường Tân Thịnh, Thành phố Thái Nguyên, Tỉnh Thái Nguyên, Việt Nam
                            <br>
                            Email: teelabvn@gmail.com
                            <br>
                            Điện thoại: 0865539083
                        </div>
                        <a href="">
                            <img src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/logo_bct.png?1706838357820" style="max-width:175px;margin-top:20px" alt="">
                        </a>
                    </div>
                    <div class="cot hai">
                        <h4>ĐĂNG KÝ</h4>
                        <form action="">
                            <input type="email" class="form-control" value="" placeholder="Nhập địa chỉ email" name="EMAIL" id="mail" style="padding-left: 15px; padding-top: 4px;">
                            <button style="padding: 1px 13px;right: 1%;height: 33px;">
                                <i class='bx bxs-paper-plane'></i>
                            </button>
                        </form>
                        <p>Theo dõi Teelab từ các nền tảng khác nhau nhé</p>
                        <a href="" class="social">
                            <img src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/facebook.svg?1706838357820" alt="facebook">
                        </a>
                        <a href="" class="social">
                            <img src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/instagram.svg?1706838357820" alt="instagram">
                        </a>
                        <a href="" class="social">
                            <img src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/tiktok.svg?1706838357820" alt="tiktok">
                        </a>
                        <a href="" class="social">
                            <img src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/shopeeico.png?1706838357820" alt="shopee" width="40">
                        </a>
                        <a href="" class="social">
                            <img src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/lazadaico.png?1706838357820" alt="lazada" width="40">
                        </a>
                    </div>
                    <div style="width: 25%; " class="cot ba">
                        <h4>ABOUT US</h4>
                        <ul style="padding: 0;">
                            <li><a href="">
                                Trang chủ
                            </a></li>
                            <li><a href="">
                                Tất cả sản phẩm
                            </a></li>
                            <li><a href="">
                                Bảng Size
                            </a></li>
                            <li><a href="">
                                Kiểm tra đơn hàng
                            </a></li>
                            <li><a href="">
                                Hệ Thống Cửa Hàng
                            </a></li>
                        </ul>
                    </div>
                    <div class="cot bon">
                        <h4>CHÍNH SÁCH</h4>
                        <ul style="padding: 0;">
                            <li><a  href="">
                                Chính sách mua hàng
                            </a></li>
                            <li><a href="">
                                Chính sách bảo mật
                            </a></li>
                            <li><a href="">
                                Phương thức thanh toán
                            </a></li>
                            <li><a href="">
                                Chính sách giao nhận, vận chuyển, kiểm hàng
                            </a></li>
                            <li><a href="">
                                Chính sách đổi trả
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<style>
    a {
        text-decoration: none;
        
    }
    .subnav {
        position: absolute;
        display: none;
        line-height: 1.6;
        background-color: white;
        padding: 10px;
        box-shadow: 0 0 10px rgba(0, 0 , 0, 0.3);
    }
    .topleft:hover .subnav{
        display: block;
    }
    .subnav li a{
        text-align: left;
        color: black;
        padding:  20px 20px 30px 0px;
    }
    
    .subnav li:hover {
        color: black;
        background-color: #ccc;
    }
    .subnav li{
        display: inline-block;
    }
    .topleft a i:hover{
        background-color: #ccc;
    }
    .mid form button:hover {
        color: black;
        background-color: white !important;
        border: 1px solid black !important;
    }
    .mid form input{
        border: 1px solid;
    }
    .mid form label{
        font-weight: bold;
    }
    .topright button.btn:hover{
        background-color: white;
        border: 1px solid black;
        color: black;
    }
    .mid form button{
        position: unset;
        margin-top: 10px !important;
         background-color: black; border: 1px solid; margin-left:43%;

    }
  
</style>
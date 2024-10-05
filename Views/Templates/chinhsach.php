<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "Views/Templates/link.php";?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link type="text/css" rel="stylesheet" href="./Css/index.css">
</head>
<body>
    <div>
        <div class="topbar">
            <div class="container">
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
                            <a style="width: min-content; color: red; border: 1px solid black; background-color: white; right: -43%;" href="index.php?task=pageuser" class="btn btn-outline-light menu"><?php echo $_SESSION['username']?></a>
                            <a style="width: min-content; color: red; border: 1px solid black; background-color: white; left: 94%;" href="index.php?task=logout" class="btn btn-outline-light menu">Đăng xuất</a>
                    <?php }elseif ($_SESSION['level']==1){ ?>
                            <a style="right: -40%;width: min-content; color: red; border: 1px solid black;background-color: white;"  href="" class="btn btn-outline-light menu"><?php echo $_SESSION['username']?></a>
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
        <div class="header">
            <ul class="header-top">
                <li><a href="index.php?task=pagehome">TRANG CHỦ</a></li>
                <li><a href="index.php?task=chinhsach">CHÍNH SÁCH ĐỔI TRẢ</a></li>
                <li><a href=""><img src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/logo.png?1706351227994" alt=""></a></li>
                <li><a href="index.php?task=size">BẢNG SIZE</a></li>
                <li><a href="">HỆ THỐNG CỬA HÀNG</a></li>
            </ul>
            <ul class="header-bot">
                <a href="index.php?task=pagemenshoes">Tất cả sản phẩm</a>
                <a href="index.php?task=pageadidas">Áo Thun</a>
                <a href="index.php?task=pagebalenciaga">Baby Tee</a>
                <a href="index.php?task=pagepuma">Áo Gió</a>
                <a href="index.php?task=pageconverse">Áo Croptop</a>
                <a href="index.php?task=pagebalance">Áo khoác</a>
                <a href="">Hoodie</a>
                <a href="index.php?task=pagevans">Quần</a>
                <a href="">Quần nữ</a>
                <a href="">Phụ kiện</a>
            </ul>
        </div>
       
        
        <div class="chinhsach">
            <h1 style="margin-top: 50px;">CHÍNH SÁCH ĐỔI TRẢ</h1>
            <h2>1. CHÍNH SÁCH ĐỔI SẢN PHẨM</h2>
            <h3>a. Đổi size</h3>
            <p>– Áp dụng 01 lần đổi /1 đơn hàng với các đơn hàng mua online và các đơn hàng mua tại cửa hàng.</P>
            <p>– Sản phẩm đổi trong thời gian 3 ngày kể từ ngày mua hàng trên hoá đơn (đối với khách mua hàng trực tiếp tại cửa hàng), 3 ngày kể từ ngày nhận hàng (Đối với khách mua online)</p>
            <p>– Sản phẩm còn mới nguyên tem, tags và mang theo hoá đơn mua hàng, sản phẩm chưa giặt và không dơ bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi mua hàng.</p>
            <p>– Không áp dụng đối với các sản phẩm là phụ kiện</p>
            <h3>b. Đổi sản phẩm lỗi</h3>
            <p>Điều kiện áp dụng</P>
            <p>– Sản phẩm lỗi kỹ thuật: Sản phẩm rách, bung keo, …</p>
            <p>Trường hợp không được giải quyết</p>
            <p>– Sản phầm đã qua sử dụng</p>
            <p>Đối với sản phẩm lỗi kỹ thuật cần phản hồi đến TEELAB trong vòng 3 ngày, kể từ ngày mua hàng trên hoá đơn đối với khách mua trực tiếp tại cửa hàng, 3 ngày kể từ ngày nhận hàng đối với khách mua online. </p>
            <h2>2. PHƯƠNG THỨC ĐỔI SẢN PHẨM</h2>
            <p>– Hàng mua trực tiếp tại cửa hàng: Đổi trả trực tiếp tại cửa hàng mua hàng</P>
            <p>– Hàng mua online (thông qua webiste, Shopee, Lazada): liên hệ fanpage Teelab để được hướng dẫn đổi trả</p>
            <h2>3. CHI PHÍ ĐỔI HÀNG</h2>
            <p>– Miễn phí đổi hàng cho khách mua ở TEELAB trong trường hợp bị lỗi từ nhà sản xuất, giao nhầm hàng, bị hư hỏng trong quá trình vận chuyển hàng.</P>
            <p>– Trong trường hợp không vừa size hay khách hàng không ưng sản phẩm không muốn nhận hàng phiền khách hàng trả ship hoàn đơn hàng về</p>
            <h2>TEELAB</h2>
            <h2 style="margin-bottom: 50px;">Experiment on Your Style</h2>
        </div>      


       
        <div style="height: max-content;" class="footer">
            <div class="container">
                <div class="row">
                    <div class="cot mot">
                        <div class="logo"><a href="">
                            <img width="135" height="21"  src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/logo_footer.png?1706838357820" data-src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/logo_footer.png?1706838357820" alt="" data-was-processed="true">
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
                    <div style="width: 33%;" class="cot hai">
                        <h4>ĐĂNG KÝ</h4>
                        <form action="">
                            <input type="email" class="form-control" value="" placeholder="Nhập địa chỉ email" name="EMAIL" id="mail" style="padding-left: 15px; padding-top: 4px;">
                            <button style="right: 0.5%; bottom: 2%; top: 3%;">
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
                    <div style="width: 22%;" class="cot ba">
                        <h4>ABOUT US</h4>
                        <ul>
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
                        <ul>
                            <li><a href="">
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
<style type="text/css">
    .topright button.btn:hover{
        background-color: white;
        border: 1px solid black;
        color: black;
    }
    .middle .text{
        background-color: red !important;
    }
    .chinhsach {
        width: 70%;
        margin: auto;
    }
    h2, h3, p{
        font-size: 14px;
    }
    h3{
        font-weight: bold;
    }
    h2{
        font-weight: bolder;
    }
</style>
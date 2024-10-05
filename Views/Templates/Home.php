<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "Views/Templates/link.php";?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEELAB</title>
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
        <div class="slide-show">
            <a href="">
                <div class="list-images">
                    <img src="./image/images/slider_1.webp" alt="">
                    <img src="./image/images/slider_2.webp" alt="">
                    <img src="./image/images/slider_3.webp" alt="">
                    <img src="./image/images/slider_4.webp" alt="">
                    <img src="./image/images/slider_5.webp" alt="">
                </div>
            </a>
            <div class="btns">
                <div class="btn-left btn">
                    <span class="material-symbols-outlined">
                        arrow_back_ios
                        </span>
                </div>
                <div class="btn-right btn">
                    <span class="material-symbols-outlined">
                        arrow_forward_ios
                        </span>
                </div>
            </div>
            <div class="index-images">
                <div class="index-item index-item-0 active"></div>
                <div class="index-item index-item-1"></div>
                <div class="index-item index-item-2"></div>
                <div class="index-item index-item-3"></div>
                <div class="index-item index-item-4"></div>
            </div>
        </div>
        <div class="section">
            <div class="title">Enjoy Your Youth!</div>
            <div class="content">
                Không chỉ là thời trang, TEELAB còn là “phòng thí nghiệm” của tuổi trẻ - nơi nghiên cứu và cho ra đời nguồn năng lượng mang tên “Youth”. Chúng mình luôn muốn tạo nên những trải nghiệm vui vẻ, năng động và trẻ trung.
            </div>
        </div>
        <script src="./js/index.js"></script>
        <div class="bg-light">
    <div class="container">
        <h4 class="rounded" style="border-bottom: 3px solid black;">
            <div class="mt-2 p-1 bg-main rounded" style=" color: black !important; background-color: white; font-size:30px; border: 1px solid black !important;">Danh mục sản phẩm</div>
        </h4>
        <div class="row mx-auto">
            <?php
            while ($row = mysqli_fetch_assoc($result)){ ?>
                <div class="product">
                    <div class="product-details">
                        <div class="image-shoe">
                            <img class="image" src="<?php echo $row['image'];?>" alt="">
                            <div class="middle">
                                <a style="color: #E8E8E8;" class="text" href="index.php?task=detail&id=<?php echo $row['id_product']; ?>">Xem</a>
                            </div>
                        </div>
                        <div class="info-shoe">
                            <a class="p-name-product" href="index.php?task=detail&id=<?php echo $row['id_product']; ?>"><?php echo $row['name_product']?></a>
                            <p class="p-price-product"><?php echo number_format($row['price'],0,'.','.')?> đồng</p>
                        </div>
                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>
</div>
        <div class="container-feedback">
            <div class="h2">Find out TEELAB more</div>
            <div class="content">
                <ul>
                    <li><a href="">
                        <img src="https://bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_1.jpg?1706838357820" alt="">
                    </a></li>
                    <li><a href="">
                        <img src="https://bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_2.jpg?1706838357820" alt="">
                    </a></li>
                    <li><a href="">
                        <img src="https://bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_5.jpg?1706838357820" alt="">
                    </a></li>
                    <li><a href="">
                        <img src="https://bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_6.jpg?1706838357820" alt="">
                    </a></li>
                    <li><a href="">
                        <img src="https://bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_3.jpg?1706838357820" alt="">
                    </a></li>
                    <li><a href="">
                        <img src="https://bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_4.jpg?1706838357820" alt="">
                    </a></li>
                    <li><a href="">
                        <img src="https://bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_7.jpg?1706838357820" alt="">
                    </a></li>
                    <li><a href="">
                        <img src="https://bizweb.dktcdn.net/100/415/697/themes/902041/assets/feedback_8.jpg?1706838357820" alt="">
                    </a></li>
                </ul>
            </div>
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
</style>
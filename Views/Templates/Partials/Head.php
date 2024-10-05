<!DOCTYPE html>
<html lang="en">
<head>
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
                        <li><a href="index.php?task=pagemenshoes">Tất cả sản phẩm</a></li>
                        <li><a href="index.php?task=pageadidas">Áo thun</a></li>
                        <li><a href="index.php?task=pagepuma">Áo gió</a></li>
                        <li><a href="index.php?task=pagevans">Quần</a></li>
                        <li><a href="index.php?task=pagebalance">Áo khoác</a></li>
                        <li><a href="index.php?task=pagebalenciaga">Áo babyTee</a></li>
                        <li><a href="index.php?task=pageconverse">Áo croptop</a></li>
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
    .topright button.btn:hover{
        background-color: white;
        border: 1px solid black;
        color: black;
    }
    
    
</style>
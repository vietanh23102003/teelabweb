<!DOCTYPE html>
<html lang="en">
<?php include_once "Views/Templates/link.php";?>
<head>
    <?php include_once "Views/Templates/Partials/Head.php";?>
</head>
<body>
<div class="bg-light">
    <div style="width: 100%; " class="container">
        <div style="width: 80%;margin:auto;" class="row">
            <div class="col-8 bg-white mt-3 mb-3 ml-5 rounded">
                <form style="margin:auto;" method="POST" action="">
                    <div><p class="p-login">Tạo Tài Khoản</p></div>
                    <div class="form-group">
                        <label for="">Tên Người Dùng</label>
                        <input class="form-control" type="text" name="name" placeholder="Tên người dùng">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="">Số Điện Thoại</label>
                        <input class="form-control" type="number" name="phone" placeholder="Số điện thoại">
                    </div>
                    <div class="form-group">
                        <label for="">Địa Chỉ</label>
                        <input class="form-control" type="text" name="address" placeholder="Địa chỉ">
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input class="form-control" type="password" name="password" placeholder="Mật khẩu">
                    </div>
                    <div class="form-group">
                        <label for="">Nhập Lại Mật khẩu</label>
                        <input class="form-control" type="password" name="repassword" placeholder="Nhập lại mật khẩu">
                    </div>
                    <div><input style="top:106%;" type="submit" class="btn btn-primary" name="register" value="Đăng Ký"></div>
                    <p>Nếu bạn đã có tài khoản đăng nhập  <a class="a-blue" href="index.php?task=pagelogin">tại đây</a> !</p>
                </form>
            </div>
        </div>
    </div>
</div>
<footer>
    <?php include_once "Views/Templates/Partials/Footer.php";?>
</footer>
</body>
</html>
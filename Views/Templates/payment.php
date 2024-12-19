<!DOCTYPE html>
<html lang="en">

<?php include_once "Views/Templates/link.php";?>
<head>
    <?php include_once "Views/Templates/Partials/Head.php";?>
</head>
<body>
<div class="bg-light mb-5">
    <div class="container" style="height: 100%; min-height: 400px;">
        <h4 class="rounded" style="border-bottom: solid 3px #F18620; color: #E8E8E8;">
            <div class="mt-2 p-1 bg-main rounded" style="width: 170px;">THANH TOÁN</div>
        </h4>
        <form method="POST">
            <table>
                <tr class="form-group">
                    <td>Họ tên</td>
                    <td><input class="form-control" type="text" value="<?php echo $_SESSION['username']; ?>"></td>
                </tr>
                <tr class="form-group">
                    <td>Địa chỉ email</td>
                    <td><input class="form-control" type="text" value="<?php echo $_SESSION['email']; ?>"></td>
                </tr>
                <tr class="form-group">
                    <td>Số điện thoại</td>
                    <td><input class="form-control" type="text" value="<?php echo $_SESSION['phone'];?>"></td>
                </tr>
                <tr class="form-group">
                    <td>Địa chỉ</td>
                    <td><input class="form-control" type="text" value="<?php echo $_SESSION['address'];?>"></td>
                </tr>
                <tr class="form-group">
                    <td>Tổng tiền</td>
                    <td><input class="form-control" type="text" value="<?php echo number_format($_SESSION['total'],0,'.','.')." VNĐ";?>"></td>
                </tr>
                <tr class="form-group">
                    <td>Phương thức thanh toán</td>
                    <td>
                        <input type="radio" name="payment_method" value="Ship COD" checked>Giao hàng tại nhà(COD) <br>
                        <input type="radio" name="payment_method" value="Thanh toán qua thẻ ngân hàng">Thanh toán qua thẻ ngân hàng
                    </td>
                </tr>

            </table>
            <div><input class="btn btn-danger" type="submit" name="ship" value="Thanh toán"></div>
        </form>
    </div>
</div>
<?php include_once "Views/Templates/link.php";?>
<footer>
    <?php include_once "Views/Templates/Partials/Footer.php";?>
</footer>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<?php include_once "Views/Templates/link.php";?>
<head>
    <?php include_once "Views/Templates/Partials/Head.php";?>
</head>
<body>
<div class="bg-light">
    <div class="container">
        <div class="row mt-3" style="min-height: 300px;">
            <div class="col-lg-3">
                <h1>Quản lý</h1>
                <div class="list-group">
                    <a class="list-group-item" href="index.php?task=pageuser">Quản lý thành viên</a>
                    <a class="list-group-item" href="index.php?task=pageproduct">Quản lý sản phẩm</a>
                    <a class="list-group-item" href="index.php?task=pagebill">Quản lý đơn hàng</a>
                </div>
            </div>
            <div class="col-lg-9">
                <div><h3 class="text-center">Danh sách đơn hàng</h3></div>
                <table class="table">
                    <tr>
                        <th>Mã Đơn hàng</th>
                        <th>Phương thức thanh toán</th>
                        <th>Tổng tiền</th>
                        <th>Tên khách hàng</th>
                        <th>Ngày mua</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_assoc($listBill)){ ?>
                        <tr>
                            <td><?php echo $row['id_bill'];?></td>
                            <td><?php echo $row['payment_method'];?></td>
                            <td><?php echo $row['total'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['created'];?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>
<footer>
    <?php include_once "Views/Templates/Partials/Footer.php";?>
</footer>
</body>

</html>
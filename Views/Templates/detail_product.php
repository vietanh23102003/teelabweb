<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "Views/Templates/Partials/Head.php";?>
</head>
<body>
<div class="bg-light">
    <?php foreach ($data as $product) { ?>
    <div class="container">
        <div class="row mx-auto mt-2 mb-2">
            <div class="col-4">
                <img width="300px" height="300px" src="<?php echo $product['image']?>" alt="">
            </div>
            <div class="col-8">
                <form action="" method="post">
                <table class="mb-5">
                    <tr>
                        <td class="p-1"><label for="">Tên sản phẩm</label></td>
                        <td><?php echo $product['name']?></td>
                    </tr>
                    <tr>
                        <td class="p-1"><label for="">Loại sản phẩm</label></td>
                        <td><?php echo $product['trandmark']?></td>
                    </tr>
                    <tr>
                        <td class="p-1"><label for="">Giá tiền</label></td>
                        <td><?php echo $product['price']?> VND</td>
                    </tr>
                    <tr>
                        <td class="p-1"><label for="">Giới tính</label></td>
                        <td><?php echo $product['type']?></td>
                    </tr>
                    <tr>
                        <td class="p-1">
                            <label for="">Size</label></td>
                        <td>
                            <?php if(count($product['size']) != 0) {?>
                                <?php foreach ($product['size'] as $size) { ?>
                                    <div class="custom-control custom-control-inline custom-radio">
                                        <input type="radio" id="<?php echo $size['id'] ?>" value="<?php echo $size['name'] ?>" name="size" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="<?php echo $size['id'] ?>"><?php echo $size['name'] ?></label>
                                    </div>
                                <?php } ?>
                            <?php } else {
                                echo 'Chưa nhập';
                            } ?>
                        </td>
                    </tr>
                </table>
                <div>
                    <input type="hidden" value="<?php echo $product['id'] ?>" name="id">
                    <input id="quantity" type="text" value="" name="quantity">
                    <input style="top: 100%;" class="btn btn-danger" type="submit" name="btn-cart" value="THÊM VÀO GIỎ HÀNG">
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<footer>
    <?php include_once "Views/Templates/Partials/Footer.php";?>
</footer>
<?php include_once "Views/Templates/link.php";?>
<script>
    $("input[name='quantity']").TouchSpin({
        initval: 1,
        min: 1,
        max: 20
    });
</script>
</body>

</html>
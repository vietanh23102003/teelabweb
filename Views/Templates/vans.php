<!DOCTYPE html>
<html lang="en">

<link href="bootstrap/bootstrap.css" rel="stylesheet">
<script src="bootstrap/bootstrap.bundle.js"></script>
<script src="bootstrap/bootstrap.js"></script>
<?php include_once "Views/Templates/link.php";?>
<link rel="stylesheet" href="Css/css.css">
<link rel="stylesheet" href="fontawesome/css/all.css">
<link rel="stylesheet" href="slick/slick-1.8.1/slick/slick.css">
<link rel="stylesheet" href="slick/slick-1.8.1/slick/slick-theme.css">
<head>
    <?php include_once "Views/Templates/Partials/Head.php";?>
</head>
<body>
<div class="bg-light">
    <div class="container">
        <h4 class="rounded" style="border-bottom: solid 3px black;">
            <div class="mt-2 p-1 bg-main rounded" style=" color: black !important; background-color: white; font-size:30px; border: 1px solid black !important;">Quần</div>
        </h4>
        <div class="row mx-auto">
            <?php
            while ($row = mysqli_fetch_assoc($result)){ ?>
                <div class="product">
                    <div class="product-details">
                        <div class="image-shoe">
                            <img class="image" src="<?php echo $row['image'];?>" alt="">
                            <div class="middle">
                                <a style="color: #E8E8E8;" class="text" href="index.php?task=detail&id=<?php echo $row['id_product']; ?>">Xem hàng</a>
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
<footer>
    <?php include_once "Views/Templates/Partials/Footer.php";?>
</footer>
</body>

</html>
<style type="text/css">
    .container{
        display: flex;
        justify-content: flex-start;
        flex-wrap: wrap;
        
        width: 80%;
    }
    .row {
        width: 100%;
    }
    .row .product{
        width: 24%;
        margin-right: 5px;
    }
    .middle .text{
        background-color: red !important;
    }
</style>
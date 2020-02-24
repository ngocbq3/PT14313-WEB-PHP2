<style>
    nav {
        width: 900px;
        margin: auto;
        height: 40px;
        background: green;
        line-height: 40px;
    }
    nav ul li{
        display: inline-block;
    }
    nav ul li a{
        display: block;
        padding: 0 10px;
        color: #fff;
        text-decoration: none;
    }
</style>
<h1>Trang chủ</h1>
<?php
//Dữ liệu của giỏ hàng
$total = $data['totalcart'];
//Danh mục hàng hóa
$cate = $data['cate'];
?>
<h2>Số lượng sản phẩm: <?=$data['totalcart']?></h2>
<div>
    <?php if(isset($_SESSION['cart'])) : ?>
        <a href="<?=BASE_URL?>cart/clear">Xóa giỏ hàng</a>
        <a href="<?=BASE_URL?>cart/detail">Chi tiết</a>
    <?php endif ?>
</div>
<nav>
    <ul>
       <?php foreach($cate as $c) : ?>
            <li><a href="./category/list/<?=$c->id?>"><?=$c->cate_name?></a></li>
        <?php endforeach; ?>

    </ul>
</nav>

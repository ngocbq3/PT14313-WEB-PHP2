<?php
$product = $data['product'];
?>
<h2>Số lượng sản phẩm: <?=$data['totalcart']?></h2>
<div>
    <?php if(isset($_SESSION['cart'])) : ?>
        <a href="<?=BASE_URL?>cart/clear">Xóa giỏ hàng</a>
        <a href="<?=BASE_URL?>cart/detail">Chi tiết</a>
    <?php endif ?>
</div>
<a href="<?= BASE_URL ?>cart/add/<?= $product->id ?>">Thêm vào giỏ hảng</a>
<h2><?= $product->name ?></h2>
<p><?= $product->detail ?></p>
<?php
$product = $data['product'];
?>
<a href="<?=BASE_URL?>cart/add/<?=$product->id?>">Thêm vào giỏ hảng</a>
<h2><?=$product->name?></h2>
<p><?=$product->detail?></p>
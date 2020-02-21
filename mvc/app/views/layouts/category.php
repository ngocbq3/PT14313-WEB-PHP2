<?php
$products = $data['products'];
?>
<?php foreach($products as $p) : ?>
    <h2><a href="<?=BASE_URL?>product/detail/<?=$p->id?>"><?=$p->name?></a></h2>
    
<?php endforeach; ?>
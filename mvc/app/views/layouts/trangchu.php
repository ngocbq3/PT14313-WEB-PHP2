<?php
    $products = $data['products'];//product
?>
<?php foreach ($products as $p) : ?>
    <div class="col">
        <div class="product">
            <a href="<?=BASE_URL?>product/detail/<?=$p->id?>">
                
                <h3><?=$p->name?></h3>
                <div class="price"><?=$p->price?></div>
                <div class="desc">
                    <p><?=$p->short_desc?></p>
                </div>
            </a>
        </div>
    </div>
<?php endforeach ?>
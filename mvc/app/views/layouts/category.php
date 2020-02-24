<?php
$products = $data['products'];
?>
<?php if (count($products) == null) : ?>
    <h2><?php echo "Không có sản phẩm trong danh mục"; ?></h2>
<?php else : ?>
    <?php foreach ($products as $p) : ?>
        <h2><a href="<?= BASE_URL ?>product/detail/<?= $p->id ?>"><?= $p->name ?></a></h2>
    <?php endforeach; ?>
<?php endif ?>
<?php
    $cate = $data['cate'];//menu
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="<?=BASE_URL?>public/css/common.css">
</head>
<body>
	<div class="container">
		<header><img src="<?=BASE_URL?>public/images/xbanner-trang-lien-he-moi.jpg.pagespeed.ic.FQvWHe7Pcx.jpg"></header>
		<nav>
			<ul>
				<li><a href="<?=BASE_URL?>">Trang chủ</a></li>
                <?php foreach($cate as $c) : ?>
                    <li><a href="<?=BASE_URL?>category/list/<?=$c->id?>"><?=$c->cate_name?></a></li>
                <?php endforeach ?>
			</ul>
		</nav>
		<article>
            <?php
            include_once "./app/views/layouts/" . $data['page'] . ".php";
            ?>
		</article>
		<footer>
			<p>&copy; (c) Academy PolyTechnic</p>
		</footer>
	</div>
</body>
</html>
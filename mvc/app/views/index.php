<?php
    $cate = $data['cate'];
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
			<div class="col">
				<div class="product">
					<a href="#">
						<img src="<?=BASE_URL?>public/images/xKINH-TE.jpg">
						<h3>Lorem ipsum dolor.</h3>
						<div class="price">13.000.000</div>
						<div class="desc">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</a>
				</div>				
			</div>
			<div class="col">
				<div class="product">
					<a href="#">
						<img src="<?=BASE_URL?>public/images/xKINH-TE.jpg">
						<h3>Lorem ipsum dolor.</h3>
						<div class="price">13.000.000</div>
						<div class="desc">
							<p>Lorem ipsum dolor sit amet, </p>
						</div>
					</a>
				</div>				
			</div>
			<div class="col">
				<div class="product">
					<a href="#">
						<img src="<?=BASE_URL?>public/images/xKINH-TE.jpg">
						<h3>Lorem ipsum dolor.</h3>
						<div class="price">13.000.000</div>
						<div class="desc">
							<p>Lorem ipsum dolor sit amet, consectetur </p>
						</div>
					</a>
				</div>				
			</div>
			<div class="col">
				<div class="product">
					<a href="#">
						<img src="<?=BASE_URL?>public/images/xKINH-TE.jpg">
						<h3>Lorem ipsum dolor.</h3>
						<div class="price">13.000.000</div>
						<div class="desc">
							<p>Lorem ipsum dolor sit amet</p>
						</div>
					</a>
				</div>				
			</div>
			<div class="col">
				<div class="product">
					<a href="#">
						<img src="<?=BASE_URL?>public/images/xKINH-TE.jpg">
						<h3>Lorem ipsum dolor.</h3>
						<div class="price">13.000.000</div>
						<div class="desc">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</a>
				</div>				
			</div>
			<div class="col">
				<div class="product">
					<a href="#">
						<img src="<?=BASE_URL?>public/images/xKINH-TE.jpg">
						<h3>Lorem ipsum dolor.</h3>
						<div class="price">13.000.000</div>
						<div class="desc">
							<p>Lorem ipsum dolor sit amet</p>
						</div>
					</a>
				</div>				
			</div>
			<div class="col">
				<div class="product">
					<a href="#">
						<img src="<?=BASE_URL?>public/images/xKINH-TE.jpg">
						<h3>Lorem ipsum dolor.</h3>
						<div class="price">19.000.000</div>
						<div class="desc">
							<p>Lorem ipsum dolor sit amet</p>
						</div>
					</a>
				</div>				
			</div>
			<div class="col">
				<div class="product">
					<a href="#">
						<img src="<?=BASE_URL?>public/images/xKINH-TE.jpg">
						<h3>Lorem ipsum dolor.</h3>
						<div class="price">13.000.000</div>
						<div class="desc">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</a>
				</div>				
			</div>
		</article>
		<footer>
			<p>&copy; (c) Academy PolyTechnic</p>
		</footer>
	</div>
</body>
</html>
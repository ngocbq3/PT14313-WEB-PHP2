<?php
session_start();
//require_once('./app/core/Cart.php');
require_once('./app/autoload.php');
// require_once('./app/core/App.php');
require_once('./app/core/config.php');
date_default_timezone_set('asia/Ho_Chi_Minh');
// $product = Product::all();
// echo '<pre>';
// var_dump($product);

$app = new App;
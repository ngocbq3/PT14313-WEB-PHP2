<?php

class HomeController extends Controller {
    public function index() {
        $cate = Category::all();
        $cate = json_decode($cate);
        $cart = new Cart;
        $count = $cart->totalProduct();
        $this->render('layouts/home', ['cate'=>$cate, 'totalcart'=>$count]);
    }
    public function list() {
        echo "danh sách trang";
    }
    //Test update, insert, delete
    function update($id) {
        $arr = ['cate_name'=>"Samsung", 'slug'=>"sam-sung", 'desc'=>'Điện thoại samsung siêu đắt'];
        $cate = new Category;
        echo $cate->update($arr, $id);        
    }
}
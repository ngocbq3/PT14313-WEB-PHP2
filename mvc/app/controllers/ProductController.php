<?php
//Controller điều khiển sản phẩm
class ProductController extends Controller {
    public function detail($id) {
        $product = Product::find_id($id);
        $cart = new Cart;
        $count = $cart->totalProduct();
        $this->render('layouts/detailProduct', ['product'=>$product, 'totalcart'=>$count]);
    }
    public function add() {
        $cate = Category::all();
        $this->render('layouts/createproduct', ['cate'=>$cate]);
    }
}
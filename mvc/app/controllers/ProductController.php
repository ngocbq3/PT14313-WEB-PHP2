<?php
//Controller điều khiển sản phẩm
class ProductController extends Controller {
    public function detail($id) {
        $product = Product::find_id($id);
        $this->render('layouts/detailProduct', ['product'=>$product]);
    }
}
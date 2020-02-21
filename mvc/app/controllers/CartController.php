<?php

//Controller của giỏ hàng
class CartController extends Controller {
    public function add($id) {
        $cart = new Cart;
        $cart->check_cart($id);
        header('location:' . BASE_URL);
    }
}
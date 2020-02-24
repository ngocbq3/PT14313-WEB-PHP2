<?php
//Lớp giỏ hàng
class Cart {

    //Kiểm tra giỏ hàng
    //$id là id của hàng hóa khi thêm vào giỏ hàng
    public function check_cart($id) {
        $product = Product::find_id($id);
        //Kiểm tra xem giỏ hàng đã có chưa, nếu chưa có thì tạo giỏ hàng
        if (!isset($_SESSION['cart']) || count($_SESSION['cart'])==null) {
            $_SESSION['cart'] = [];//Tạo mảng để lưu giỏ hàng
        }

        $cart_arr = $_SESSION['cart'];
        $pro_existed = false; //Nếu sản phẩm đó chưa có trong giỏ

        //Duyệt vòng lặp để kiểm tra xem mặt hàng đó có trong giỏ không
        for ( $i=0; $i < count($cart_arr); $i++ ) {
            if ( $cart_arr[$i]['id'] == $id ) {
                $pro_existed = true;
                $cart_arr[$i]['quantity']++; //Tăng số lượng của sản phẩm
                break;
            }
        }

        //Trường hợp sản phẩm không có trong giỏ hàng
        if (!$pro_existed) {
            $proItem = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1
            ];
            array_push($cart_arr, $proItem);
        }

        //Gán lại cho $_SESSION['cart']
        $_SESSION['cart'] = $cart_arr;
        // echo "<pre>";
        // var_dump($_SESSION['cart']);
    }

    //Tính số lượng sản phẩm có trong giỏ hàng
    public function totalProduct() {
        $count = 0;
        if (isset($_SESSION['cart'])) {
            for ($i=0;$i<count($_SESSION['cart']); $i++) {
                $count += $_SESSION['cart'][$i]['quantity'];
            }
        }
        return $count;
    }
    //Xóa giỏ hàng
    public function clearCart() {
        if (isset($_SESSION['cart'])) {
            unset($_SESSION['cart']);
        }
    }
    //Tính tổng tiền của giỏ hàng
    public function totalPrice() {
        $total = 0;
        if (isset($_SESSION['cart'])) {
            $cart_arr = $_SESSION['cart'];
            for( $i=0; $i < count($cart_arr); $i++) {
                $total += $cart_arr[$i]['price'] * $cart_arr[$i]['quantity'];
            }
        }
        return $total;
    }
}
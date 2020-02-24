<?php

//Controller của giỏ hàng
class CartController extends Controller {
    public function add($id) {
        $cart = new Cart;
        $cart->check_cart($id);
        header('location:' . BASE_URL);
    }
    public function clear() {
        $cart = new Cart;
        $cart->clearCart();
        header('location:' . BASE_URL);
    }
    //Chi tiết giỏ hàng
    public function detail() {
        $cart_arr = [];
        if (isset($_SESSION['cart'])) {
            $cart_arr = $_SESSION['cart'];
        }
        $this->render('layouts/detail_cart', ['cart'=>$cart_arr]);
    }
    //payment
    public function payment() {
        $this->render('layouts/payment', []);
    }
    //Khi thanh toán thành công
    public function success() {
        if (isset($_POST['btn_payment'])) {
            extract($_REQUEST);
            $cart = new Cart;
            $invoice = new Invoice;
            $invoiceDetail = new InvoiceDetail;

            $totalPrice = $cart->totalPrice();
            $date = date('Y-m-d H:i:s');
            $arr = [
                'customer_name' => $customer_name,
                'customer_phone_number' => $customer_phone_number,
                'customer_email' => $customer_email,
                'customer_address' => $customer_address,
                'total_price' => $totalPrice,
                'created_at' => $date
            ];
            //Tạo đơn hàng
            $invoice->insert($arr);

            //Lấy id của đơn hàng
            $invoice_id = $invoice->lastId()->id;
            //Thêm dữ liệu của giỏ hàng vào chi tiết hóa đơn (invoices)
            foreach ($_SESSION['cart'] as $key => $value) {
                //Lấy ra từng sản phẩm trong mảng
                $arr_detail = [
                    'invoice_id' => $invoice_id,
                    'product_id' => $value['id'],
                    'quantity' => $value['quantity'],
                    'unit_price' => $value['quantity'] * $value['price'],
                    'created_at' => $date
                ];
                $invoiceDetail->insert($arr_detail);
            }

            $thongbao = "Mua hàng thành công!";
            $this->render('layouts/payment_success', ['thongbao'=>$thongbao]);

        }
    }
}
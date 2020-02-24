<?php
    $cart_arr = $data['cart'];
?>
<?php if (count($cart_arr) > 0) : ?>
    <table border="1">
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>
        <?php for($i=0; $i<count($cart_arr); $i++) : ?>
            <tr>
                <td><?=$cart_arr[$i]['id']?></td>
                <td><?=$cart_arr[$i]['name']?></td>
                <td><?=$cart_arr[$i]['price']?></td>
                <td><?=$cart_arr[$i]['quantity']?></td>
                <td><?=$cart_arr[$i]['quantity'] * $cart_arr[$i]['price']?></td>
            </tr>
        <?php endfor ?>
    </table>
    <div>
        <a href="<?=BASE_URL?>cart/payment">Thanh toán</a>
    </div>
<?php else : ?>
    <h3>Không có sản phẩm nào trong giỏ hàng</h3>
    <a href="<?=BASE_URL?>">Trang chủ</a>
<?php endif ?>
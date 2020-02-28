<?php
if (isset($_POST['gui'])) {
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];
    $content = $_POST['content'];
    echo "Họ tên: $hoten <br>";
    echo "Email: $email <br>";
    echo "Content: $content";

}
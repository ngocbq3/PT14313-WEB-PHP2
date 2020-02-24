<?php
//Hàm tự động include class trong models và controllers
function autoloader($class)
{
    //Kiểm tra $class xem có phải là controller không
    //Nếu có thì tiến hành include vào project
    if (preg_match("/Controller$/", $class)) {
        if (file_exists('./app/controllers/' . $class . '.php')) {
            require_once './app/controllers/' . $class . '.php';
        }
    } else {
        //Ngược làm kiểm tra xem có phải là của model không
        if (file_exists('./app/models/' . $class . '.php')) {
            require_once './app/models/' . $class . '.php';
        } else if (file_exists('./app/core/' . $class . '.php')) {
            //Kiểm tra xem có phải $class nằm trong thư mục core không
            require_once './app/core/' . $class . '.php';
        }
    }
}
//Tự động load class
spl_autoload_register('autoloader');

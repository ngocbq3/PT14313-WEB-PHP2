<?php
//Hàm tự động include class trong models và controllers
function autoloader($class) {
    if ( preg_match("/Controller$/", $class) ) {
        if (file_exists('./app/controllers/' . $class . '.php')) {
            require_once './app/controllers/' . $class . '.php';
        }
    } else {
        if (file_exists('./app/models/' . $class . '.php')) {
            require_once './app/models/' . $class . '.php';
        } else if (file_exists('./app/core/' . $class . '.php')) {
            require_once './app/core/' . $class . '.php';
        }
    }
}
//Tự động load class
spl_autoload_register('autoloader');
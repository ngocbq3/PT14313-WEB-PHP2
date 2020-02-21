<?php

class App {
    //Đặt mặc định cho controller
    protected $controller = 'home';
    //Phương thức để xử lý hành động
    protected $method = 'index';
    //Các tham sô trên url
    protected $param = [];

    public function __construct()
    {
        $url = $this->parseUrl();
        //print_r($url);

        if (isset($url[0])) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        //Khi lấy được controller thì công thêm tên đuôi của nó
        $this->controller = $this->controller . "Controller";
        //echo $this->controller;die;
        //Kiểm tra xem file controller nó có tồn tại không
        if (file_exists('./app/controllers/' . $this->controller . '.php')) {
            //require_once './app/controllers/' . $this->controller . '.php';
            $this->controller = new $this->controller;
            if (isset($url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
            //echo $this->method;die;
            //Kiểm tra xem phương thức có tồn tại trong Controller đó không
            if (method_exists($this->controller, $this->method)) {
                $this->param = $url ? array_values($url) : [];
                call_user_func_array([$this->controller, $this->method], $this->param);
            } else {//Không có phương thức ở trong controller
                echo "File not found!!!";
            }
        } else { //Không có file controller
            echo "File not found!!!";
        }
        
    }

    public function parseUrl() {
        if (isset($_GET['url'])) {
            return explode("/", trim($_GET['url'], "/"));
        }
    }
}
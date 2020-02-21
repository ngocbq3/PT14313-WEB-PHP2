<?php
//Lớp xử lý view
class Controller {
    public function render($view, $data=[]) {
        include_once "./app/views/" . $view . ".php";
    }
}
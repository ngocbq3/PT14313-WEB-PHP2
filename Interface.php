<?php
interface Animal {
    public function run();
    public function an();
}
class Dog implements Animal {
    public $name="cậu vàng";
    public function run()
    {
        echo $this->name . " Đang chạy rất nhanh";
    }
    public function an() {
        echo $this->name . " Ăn rất no";
    }
}

abstract class Animal2 {
    public $name;
    abstract function run();
    abstract function an();
    function setName($name) {
        $this->name = $name;
    }
}

class Cat extends Animal2 {
    public function run()
    {
        echo $this->name . " Đang chạy trên mái nhà";
    }
    public function an() {
        echo $this->name . " Đang ăn thịt chuột.";
    }
}

class A {
    function getSelf() {
        return new self;
    }
    function getStatic() {
        return new static;
    }
    static function hien_thi() {
        echo "Bạn đang truy cập phương thức static";
    }
}
class B extends A {

}

B::hien_thi();
// $b = new B;
// echo get_class($b->getStatic());

// $cat = new Cat;
// $cat->setName("Mèo Tom");
// $cat->an();

// $dog = new Dog;
// $dog->run();
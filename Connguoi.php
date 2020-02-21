<?php
//Khai báo lớp Connguoi
class Connguoi {
    protected $ten = "ngocbq";
    
    function __construct($ten, $chieucao)
    {
        $this->ten = $ten;
        $this->chieucao = $chieucao;
    }
    function setTen($name) {
        $this->ten = $name;
    }
    function getTen() {
        return $this->ten;
    }
    function chay() {
        echo $this->ten . ' Đang chạy';
    }
}

class Nguoilon extends Connguoi {
    public function hienthiTen() {
        echo $this->ten;
    }
}

//Tạo đối tượng
$connguoi = new Connguoi('Nambq', 180);
$connguoi1 = new Connguoi('LongHQ', 167);

//var_dump($connguoi);
//Truy cập đến thuộc tính của đối tượng
echo $connguoi->getTen();
echo "<br>";
//Truy cập đến phương thức của đối tượng
$connguoi->chay();

//Thay đổi thuộc tính của đối tượng
//$connguoi1->setTen("Namdb");
echo "<br>" . $connguoi1->getTen();

$nguoilon = new Nguoilon('Nguoi Lon', 168);
$nguoilon->hienthiTen();
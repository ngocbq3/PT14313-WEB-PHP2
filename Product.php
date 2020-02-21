<?php
class Product {
    public $conn = null;
    public function __construct()
    {
        $this->conn = new PDO('mysql:host=localhost; dbname=xshop; charset=utf8', 'root', '');
    }
    public function getAll() {
        $sqlBuilder = "Select * From hang_hoa LIMIT 0,10";
        $stmt = $this->conn->prepare($sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public function insertProduct($arr=array()){
        $sqlBuilder = "INSERT INTO hang_hoa( ";
        foreach ($arr as $key=>$value) {
            $sqlBuilder .= "`".$key . "`, ";
        }
        $sqlBuilder = rtrim($sqlBuilder, ", ") . ") VALUES(";
        foreach ($arr as $key=>$value) {
            $sqlBuilder .= ":" .$key . ", ";
        }
        $sqlBuilder = rtrim($sqlBuilder, ", ") . ")";
        //echo $sqlBuilder;die;
        try {
            $stmt = $this->conn->prepare($sqlBuilder);
            $stmt->execute($arr);
            return $stmt->rowCount();
        } catch (PDOException $e) {
            throw $e;
        }
    }
}

$p = new Product;
echo $p->insertProduct(['ten_hh'=>'Iphone XS Max','don_gia'=>1099,'giam_gia'=>10, 'hinh'=>'1002.jpg', 'ma_loai'=>1002, 'dac_biet'=>'false', "so_luot_xem"=>12, 'ngay_nhap'=>'2020-1-16', 'mo_ta'=>'Hello Iphone', 'create_by'=>'HoaPT']);


<?php
//require_once("BaseModel.php");

class Product extends BaseModel {
    public $tableName = "products";

    //Phương thức lấy dữ liệu theo cate_id trong bảng products
    //Lấy các sản phẩm ở trong categories
    public static function productInCategory($cate_id) {
        $model = new static();
        $sqlBuilder = "Select * From " . $model->tableName . " WHERE cate_id=:cate_id";
        //Chuẩn bị
        $stmt = $model->conn->prepare($sqlBuilder);
        $stmt->execute(['cate_id'=>$cate_id]);
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $result;
    }    
}
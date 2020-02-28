<?php

class BaseModel {
    public function __construct()
    {
        $this->conn = new PDO('mysql:host=localhost; dbname=shopao; charset=utf8', 'root', '');
    }
    //Phương thức sẽ lấy ra toàn bộ dữ liệu của mảng
    public static function all() {
        $model = new static();
        $sqlBuilder = "Select * From " . $model->tableName;
        //Chuẩn bị
        $stmt = $model->conn->prepare($sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $result;
    }

    //Phương thức lấy dữ liệu theo id
    public static function find_id($id) {
        $model = new static;
        $sqlBuilder = "Select * From " . $model->tableName . " WHERE id = '$id'";
        $stmt = $model->conn->prepare($sqlBuilder);
        //echo $sqlBuilder;die;
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        if (count($result) > 0) {
            return $result[0];
        }
        return false;       
    }
    //Phương thức thêm dữ liệu
    //$arr mảng được định dang theo ['key'=>value]
    public function insert($arr=[]) {
        $query = "INSERT INTO $this->tableName( ";
        foreach ($arr as $key=>$value) {
            $query .= "`" . $key . "`, ";
        }
        $query = rtrim($query, ", ") . " ) VALUES( ";
        foreach ($arr as $key=>$value) {
            $query .= ":" . $key . ", ";
        }
        $query = rtrim($query, ", ") . " )";
        
        $stmt = $this->conn->prepare($query);
        $stmt->execute($arr);
    }

    //Phương thức sửa dữ liệu
    //$arr mảng được định dang theo ['key'=>value]
    public function update($arr=[], $id) {
        $query = "UPDATE $this->tableName SET ";
        foreach ( $arr as $key=>$value ) {
            $query .= "`$key`=:$key, ";
        }
        $query = rtrim($query, ", ");
        $query .= " WHERE id=:id";
        //echo $query;die;
        $stmt = $this->conn->prepare($query);      
        $arr['id'] = $id;
        $stmt->execute($arr);       
    }
    //Phương thức xóa dữ liệu theo id
    public function delete($id) {
        $query = "DELETE FROM $this->tableName WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();        
    }
}
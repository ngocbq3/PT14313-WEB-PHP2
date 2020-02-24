<?php
//bảng hóa đơn
class Invoice extends BaseModel {
    protected $tableName = 'invoices';
    public function lastId() {
        $query = "SELECT * FROM $this->tableName ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result[0];
    }
}
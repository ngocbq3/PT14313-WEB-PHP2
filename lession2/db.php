<?php

$conn = new PDO("mysql:host=localhost; dbname=shopao; charset=utf8", "root", "");
//Lấy dữ liệu
$sql = "Select * from categories";

//Chuẩn bị
$stmt = $conn->prepare($sql);
//Thực thi lệnh sql
$stmt->execute();
//Lấy dữ liệu
$result = $stmt->fetchAll(PDO::FETCH_CLASS);
// echo "<pre>";
// print_r($result);

//Thêm dữ liệu
$sql = "Insert Into categories(cate_name, slug, `desc`, created_at, updated_at, created_by) Values(:cate_name, :slug, :desc, :created_at, :updated_at, :created_by)";

$stmt = $conn->prepare($sql);
//Truyền dữ liệu cho tham số
$cate_name = "Điện thoại";
$slug = "dien_thoai";
$desc = "Danh mục điện thoại";
$created_at = "2020-1-13";
$updated_at = "2020-1-13";
$created_by = 1;
$stmt->bindParam(":cate_name", $cate_name);
$stmt->bindParam(":slug", $slug);
$stmt->bindParam(":desc", $desc);
$stmt->bindParam(":created_at", $created_at);
$stmt->bindParam(":updated_at", $updated_at);
$stmt->bindParam(":created_by", $created_by);
//Thực thi
$stmt->execute();
echo "Bạn đã thêm được " . $stmt->rowCount() . " dòng dữ liệu";

//Cập nhật dữ liệu
$sql = "UPDATE categories SET cate_name=:cate_name WHERE id=:id";
$stmt = $conn->prepare($sql);
$cate_name = "Iphone";
$stmt->bindParam(":cate_name", $cate_name);
$id = 8;
$stmt->bindParam(":id", $id);
// $stmt->execute();

// echo $stmt->rowCount() . " dòng dữ liệu được sửa";

//Xóa dữ liệu
$sql = "Delete from categories Where id=:id";
$stmt = $conn->prepare($sql);

$id = 8;
$stmt->bindParam(":id", $id);
//$stmt->execute();

//echo $stmt->rowCount() . " dòng dữ liệu được xóa";
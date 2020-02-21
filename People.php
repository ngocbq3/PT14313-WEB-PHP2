<?php
class People {
    public $ten;
    public $diachi;
    public $sdt;
    public $email;
    public function __construct($ten, $diachi, $sdt, $email)
    {
        $this->ten = $ten;
        $this->diachi = $diachi;
        $this->sdt = $sdt;
        $this->email = $email;
    }
    public function hien_thi() {
        echo "Tên: " . $this->ten;
        echo "<br>Địa chỉ: " . $this->diachi;
        echo "<br>Số điện thoại: " . $this->sdt;
        echo "<br>Email: " . $this->email;
    }
}

//Class nhân viên
class Nhanvien extends People{
    public $bangcap;
    public function __construct($ten, $diachi, $sdt, $email, $bangcap)
    {
        parent::__construct($ten, $diachi, $sdt, $email);
        $this->bangcap = $bangcap;
    }
    public function hien_thi()
    {
        parent::hien_thi();
        echo "<br>Bằng cấp: " . $this->bangcap;
    }
}

$nv = new Nhanvien("NamNQ", 'Hà Nội', "090909090", 'namnq@fpt.edu.vn', "Cử nhân");
$nv->hien_thi();
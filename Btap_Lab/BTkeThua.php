<?php
//tạo 1 class ConNguoi gồm các thuộc tính :hoten,diachi,namsinh,email,sdt
// tạo phương thức set cho các thuộc tính trên
// tạo phương thức tinhtuoi = năm hiện tại - năm sinh (có trả về)
// tạo phương thức hiển thị thông tin :hoten,diachi,tuoi,email,sdt
//tạo 1 class HocSinh từ class ConNguoi gồm các thuộc tính :diemToan,diemLy,diemHoa
// tạo phương thức set cho các thuộc tính trên
//tạo phương thức tính điểm tb = (Toán + lý+ hóa)/3
//tạo phương thức hiển thị thông tin sinh viên hiển thị ra các thông tin
// hoten,diachi,tuoi,email,sdt,điểm TB
//tạo 1 class GiangVien kế thừa từ class ConNguoi gồm các thuộc tính:luongCB,soGioDay
//// tạo phương thức set cho các thuộc tính trên
/// tạo phương thức tính tổng lương = luongCB *soGioDay
/// //tạo phương thức hiển thị thông tin giảng viên hiển thị ra các thông tin
//// hoten,diachi,tuoi,email,sdt,tổng lương
class ConNguoi
{
    public $hoTen;
    public $diaChi;
    public $namSinh;
    public $email;
    public $sdt;
    public function setData($hoTen, $diaChi, $namSinh, $email, $sdt)
    {
        $this->hoTen = $hoTen;
        $this->diaChi = $diaChi;
        $this->namSinh = $namSinh;
        $this->email = $email;
        $this->sdt = $sdt;

    }
}
class HocSinh extends ConNguoi
{
    public $diemToan;
    public $diemLy;
    public $diemHoa;
    public function __construct($hoTen, $diaChi, $namSinh, $email, $sdt, $diemToan, $diemLy, $diemHoa)
    {
        $this->setData($hoTen, $diaChi, $namSinh, $email, $sdt);
        $this->diemToan = $diemToan;
        $this->diemLy = $diemLy;
        $this->diemHoa = $diemHoa;


    }
    public function getTuoi()
    {
        return $tuoi = date("Y") - $this->namSinh;
    }
    public function tinhDiemTB()
    {
        $avg = ($this->diemToan + $this->diemLy + $this->diemHoa) / 3;
        return $avg;

    }
    public function showInfoHS()
    {
        echo "Họ tên: " . $this->hoTen . "<br>";
        echo "Tuổi: " . $this->getTuoi() . "<br>";
        echo "Số điện hoại: " . $this->sdt . "<br>";
        echo "Địa chỉ: " . $this->diaChi . "<br>";
        echo "Email: " . $this->email . "<br>";
        $diemTB = $this->tinhDiemTB();
        echo "Điểm Trung bình 3 môn Toán Lý Hóa: " . $diemTB . "<br>";

    }


}
class GiangVien extends HocSinh
{
    public $LuongCB;
    public $soGioDay;
    public function __construct($hoTen, $diaChi, $namSinh, $email, $sdt, $LuongCB, $soGioDay)
    {
        $this->setData($hoTen, $diaChi, $namSinh, $email, $sdt);
        $this->LuongCB = $LuongCB;
        $this->soGioDay = $soGioDay;
    }
    public function showInfoGV()
    {
        echo "Họ tên: " . $this->hoTen . "<br>";
        echo "Tuổi: " . $this->getTuoi() . "<br>";
        echo "Số điện hoại: " . $this->sdt . "<br>";
        echo "Địa chỉ: " . $this->diaChi . "<br>";
        echo "Email: " . $this->email . "<br>";
        $tongLuong = $this->tongLuong();
        echo "Tổng lương CB: " . number_format($tongLuong, 0, ',', '.')
            . " VND";

    }
    public function tongLuong()
    {
        $tongLuong = $this->LuongCB * $this->soGioDay;
        return $tongLuong;
    }

}
$HS = new HocSinh("Minh Nguyệt", "Hà Nội", 2004, "mignguyet@gmail.com", "0986751085", 8, 9, 8);
$HS->showInfoHS();
$GV = new GiangVien("Em bé", "Hà Nam", 1999, "nguyen@gmail.com", "0987654321", 20000000, 100);
$GV->showInfoGV();
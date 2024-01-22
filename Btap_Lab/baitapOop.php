<?php
// tạo 1 class là Crush có những thuộc tính sau :
//$ten,$namSinh,$moiQuanHe,$diaChi,$email
// yêu cầu
// xây dựng phương thức khởi tạo có tham số truyền vào cho các thuộc tính trên
// xây dựng hàm tính tuổi có trả về = năm hiện tại - năm sinh
//xây dựng hàm kiemTraDoTuoiLayChong như sau
// nếu tuổi của crush >= 18  => đủ tuổi  lấy chồng
//nếu tuổi của crush < 18 Không đủ tuổi lấy chồng
// xây dựng hàm hiển thị thông tin crush  gồm :
//$ten-$namSinh-$moiQuanHe-$diaChi-$email-tuổi- đủ tuổi lấy chồng


//tạo 1 class GiangVien gồm các thuộc tính:hoten,diachi,namsinh,email,sdt,luongCB,soGioDay
//// tạo phương thức set cho các thuộc tính trên
/// tạo phương thức tính tổng lương = luongCB *soGioDay
/// //tạo phương thức hiển thị thông tin giảng viên hiển thị ra các thông tin
//// hoten,diachi,tuoi,email,sdt,tổng lương
echo "<h1>THÔNG TIN CRUSH</h1>";

class Crush
{
    public $ten;
    public $namSinh;
    public $moiQuanHe;
    public $diaChi;
    public $email;


    public function __construct($ten, $namSinh, $moiQuanHe, $diaChi, $email)
    {
        $this->ten = $ten;
        $this->namSinh = $namSinh;
        $this->moiQuanHe = $moiQuanHe;
        $this->diaChi = $diaChi;
        $this->email = $email;


    }
    public function showInfo()
    {
        echo "Họ tên: " . $this->ten . "<br>";
        echo "Năm sinh: " . $this->namSinh . "<br>";
        echo "Mối quan hệ: " . $this->moiQuanHe . "<br>";
        echo "ĐỊa chỉ: " . $this->diaChi . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
    public function kiemTraDoTuoiLayChong()
    {
        $today = new DateTime();
        $birthdate = new DateTime($this->namSinh);
        $age = $today->diff($birthdate)->y;
        if ($age >= 18) {
            echo '==> Đủ tuổi lấy chồng';
        } else {
            echo 'Chưa đủ tuổi lấy chồng';
        }


    }

}
$cr = new Crush(ten: 'Minh Nguyệt', namSinh: '02/07/2005', moiQuanHe: 'độc thân', diaChi: 'Hà Nội', email: 'mihnguyt@gmail.com');
$cr->showInfo();
$cr->kiemTraDoTuoiLayChong();
//tạo 1 class HocSinh gồm các thuộc tính :hoten,diachi,namsinh,email,sdt,diemToan,diemLy,diemHoa
// tạo phương thức set cho các thuộc tính trên
//tạo phương thức tính điểm tb = (Toán + lý+ hóa)/3
//tạo phương thức hiển thị thông tin sinh viên hiển thị ra các thông tin
// hoten,diachi,tuoi,email,sdt,điểm TB
echo "<h1>THÔNG TIN HỌC SINH</h1>";
class HocSinh
{
    public $hoTen;
    public $diaChi;
    public $namSinh;
    public $email;
    public $sdt;
    public $diemToan;
    public $diemLy;
    public $diemHoa;
    public function __construct($hoTen, $diaChi, $namSinh, $email, $sdt, $diemToan, $diemLy, $diemHoa)
    {
        $this->hoTen = $hoTen;
        $this->diaChi = $diaChi;
        $this->namSinh = $namSinh;
        $this->email = $email;
        $this->sdt = $sdt;
        $this->diemToan = $diemToan;
        $this->diemLy = $diemLy;
        $this->diemHoa = $diemHoa;
    }
    public function showInfoHS()
    {
        echo "Họ tên: " . $this->hoTen . "<br>";
        echo "Năm sinh: " . $this->namSinh . "<br>";
        echo "Số điện hoại: " . $this->sdt . "<br>";
        echo "Địa chỉ: " . $this->diaChi . "<br>";
        echo "Email: " . $this->email . "<br>";
        $diemTB = $this->tinhDiemTB();
        echo "Điểm Trung bình 3 môn Toán Lý Hóa: " . $diemTB . "<br>";

    }
    public function tinhDiemTB()
    {
        $avg = ($this->diemToan + $this->diemLy + $this->diemHoa) / 3;
        return $avg;

    }

}
$hs = new HocSinh(hoTen: "Nguyễn Thị Anh", diaChi: "Nam Từ Liêm, Hà Nội", namSinh: "2008", email: "anh11@gmail.com", sdt: "0987654321", diemToan: 5, diemLy: 6, diemHoa: 9);
$hs->showInfoHS();
$hs->tinhDiemTB();

//tạo 1 class GiangVien gồm các thuộc tính:hoten,diachi,namsinh,email,sdt,luongCB,soGioDay
//// tạo phương thức set cho các thuộc tính trên
/// tạo phương thức tính tổng lương = luongCB *soGioDay
/// //tạo phương thức hiển thị thông tin giảng viên hiển thị ra các thông tin
//// hoten,diachi,tuoi,email,sdt,tổng lương
echo "<h1>THÔNG TIN GIẢNG VIÊN</h1>";
class GiangVien
{
    public $hoTen;
    public $diaChi;
    public $tuoi;
    public $email;
    public $sdt;
    public $LuongCB;
    public $soGioDay;

    public function __construct($hoTen, $diaChi, $tuoi, $email, $sdt, $LuongCB, $soGioDay)
    {
        $this->hoTen = $hoTen;
        $this->diaChi = $diaChi;
        $this->tuoi = $tuoi;
        $this->email = $email;
        $this->sdt = $sdt;
        $this->LuongCB = $LuongCB;
        $this->soGioDay = $soGioDay;
    }
    public function showInfoGV()
    {
        echo "Họ tên: " . $this->hoTen . "<br>";
        echo "Tuổi: " . $this->tuoi . "<br>";
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
$gv = new GiangVien(hoTen: "Trần Văn A", diaChi: "235/8 Tôn Thất Tẩn, P.Thanh Xuân, Hà Nội", tuoi: 26, email: "A@gmail.com", sdt: "0987654321", LuongCB: 5000, soGioDay: 100);
$gv->showInfoGV();
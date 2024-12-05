<?php
include_once 'pdo.php';
function listhoadon()
{
    $sql = 'select * from hoadon';
    return pdo_query($sql);
}
function getHoaDonById($id)
{
    $sql = "select * from hoadon where id_hoadon = $id";
    return pdo_query_one($sql);
}
function getAllChiTietDonHang($id)
{
    $sql = "select * from chi_tiet_hoa_don where id_hoadon = $id";
    return pdo_query($sql);
}
function updateHoaDon($id, $status)
{
    $sql = "update hoadon set status = $status where id_hoadon = $id";
    pdo_execute($sql);
}

function changeStatus($id, $status)
{
    $sql = "update hoadon set status = '$status' where id_hoadon ='$id'";
    pdo_execute($sql);
}
function changeTrangThai($id, $trangThai)
{
    $sql = "update hoadon set trang_thai_tt = '$trangThai' where id_hoadon ='$id'";
    pdo_execute($sql);
}
function createHoaDon($id_khachhang, $hoten, $sdt, $dia_chi, $trang_thai_tt, $tongtien, $status, $ngay_lap) {
    // Nếu $id_khachhang không có giá trị, gán NULL
    if (empty($id_khachhang)) {
        $id_khachhang = null;
    }
    
    // Câu lệnh SQL chèn dữ liệu
    $sql = "INSERT INTO hoadon (id_khachhang, hoten, sdt, diachi, trang_thai_tt, tongtien, status, ngay_lap) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    // Thực thi câu lệnh và trả về ID hóa đơn vừa tạo
    return pdo_execute_return_id($sql, $id_khachhang, $hoten, $sdt, $dia_chi, $trang_thai_tt, $tongtien, $status, $ngay_lap);
}

// Hàm thêm chi tiết hóa đơn
function createChiTietHoaDon($idHoaDon, $idSanPham, $gia, $soLuong) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO chi_tiet_hoa_don (id_hoadon, id_sanpham, gia, so_luong) VALUES (?, ?, ?, ?)");
    $stmt->execute([$idHoaDon, $idSanPham, $gia, $soLuong]);
    return $stmt->rowCount() > 0; // Kiểm tra xem có cập nhật được hay không
}
?>
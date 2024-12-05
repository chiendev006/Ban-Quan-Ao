<?php
include_once 'pdo.php';

// Hàm lấy danh sách hóa đơn
function listhoadon()
{
    $sql = 'SELECT * FROM hoadon';
    return pdo_query($sql);
}

// Hàm lấy hóa đơn theo ID
function getHoaDonById($id)
{
    $sql = "SELECT * FROM hoadon WHERE id_hoadon = ?";
    return pdo_query_one($sql, $id);
}

// Hàm lấy chi tiết hóa đơn theo ID hóa đơn
function getChiTietDonHang($id)
{
    $sql = "SELECT * FROM chi_tiet_hoa_don WHERE id_hoadon = ?";
    return pdo_query($sql, $id);
}

// Hàm cập nhật trạng thái hóa đơn
function updateHoaDon($id, $status)
{
    $sql = "UPDATE hoadon SET status = ? WHERE id_hoadon = ?";
    pdo_execute($sql, $status, $id);
}

// Hàm thay đổi trạng thái hóa đơn
function changeStatus($id, $status)
{
    $sql = "UPDATE hoadon SET status = ? WHERE id_hoadon = ?";
    pdo_execute($sql, $status, $id);
}

// Hàm thay đổi trạng thái thanh toán hóa đơn
function changeTrangThai($id, $trangThai)
{
    $sql = "UPDATE hoadon SET trang_thai_tt = ? WHERE id_hoadon = ?";
    pdo_execute($sql, $trangThai, $id);
}

function addHoaDon($idKhachHang, $status, $tongTien, $hoTen, $diaChi, $sdt, $email)
{
    $sql = "INSERT INTO hoadon (id_khachhang, status, tongtien, hoten, diachi, sdt, email) 
            VALUES ('$idKhachHang', '$status', '$tongTien', '$hoTen', '$diaChi', '$sdt', '$email')";
    return pdo_execute_return_id($sql);
}

function addChiTietHoaDon($idHoaDon, $idSanPham, $gia, $soLuong) {
    $sql = "INSERT INTO chi_tiet_hoa_don (id_hoadon, id_sanpham, gia, so_luong)
    VALUES('$idHoaDon', '$idSanPham', '$gia', '$soLuong')";
    return pdo_execute($sql);
}
function addKhachHang($hoTen, $email, $sdt) {
    $sql = "INSERT INTO khach_hang (ho_ten, email, sdt) VALUES (?, ?, ?)";
    return pdo_execute_return_id($sql, $hoTen, $email, $sdt); // Giả sử `pdo_execute_return_id` là một hàm xử lý PDO
}



?>

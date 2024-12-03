<?php
include_once 'pdo.php';

function addHoaDon($idKhachHang, $hinhThuc, $tongTien, $hoTen, $diaChi, $sdt, $email)
{
    $sql = "INSERT INTO hoadon (id_khachhang, trang_thai_tt, tongtien,
    hoten, diachi, sdt, email) VALUES('$idKhachHang', '$hinhThuc', '$tongTien', 
    '$hoTen', '$diaChi', '$sdt', '$email')";
    return pdo_execute_return_id($sql);
}

function addChiTietHoaDon($idHoaDon, $idSanPham, $gia, $soLuong) {
    $sql = "INSERT INTO chi_tiet_hoa_don (id_hoadon, id_sanpham, gia, so_luong)
    VALUES('$idHoaDon', '$idSanPham', '$gia', '$soLuong')";
    return pdo_execute($sql);
}
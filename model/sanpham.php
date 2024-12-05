<?php
include_once 'pdo.php';
function listSanphamlimit() {
    $sql = "SELECT * FROM (SELECT * FROM san_pham ORDER BY id_sp DESC LIMIT 8) sub ORDER BY id_sp ASC";
    return pdo_query($sql);
}

function listSanPham()
{
    $sql = 'select * from san_pham';
    return pdo_query($sql);
}

function addSanPham($name, $idDanhMuc, $mauSac, $kichCo, $gia, $chatlieu, $fileName)
{
    $sql = "insert into san_pham (ten_sp, iddm, mau_sac, kich_co, gia_sp, loai,
     img) values ('$name', '$idDanhMuc', '$mauSac', '$kichCo', '$gia', '$chatlieu', '$fileName')";
    pdo_execute($sql);
}

function getSanPhamById($id) {
    // Kết nối CSDL
    $conn = pdo_get_connection();

    // Lấy thông tin sản phẩm từ CSDL
    $sql = "SELECT * FROM san_pham WHERE id_sp = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    // Kiểm tra kết quả truy vấn
    $sanPham = $stmt->fetch(PDO::FETCH_ASSOC);
     // Thêm dòng này để kiểm tra kết quả

    // Trả về thông tin sản phẩm
    return $sanPham;
}



function editSanPham($id, $name, $idDanhMuc, $mauSac, $kichCo, $gia, $chatlieu, $fileName)
{
    if ($fileName == null) {
        $sql = "update san_pham set ten_sp = '$name', iddm = '$idDanhMuc', mau_sac = '$mauSac'
        , kich_co = '$kichCo', gia_sp = '$gia', loai = '$chatlieu' where id_sp='$id'";
    } else {
        $sql = "update san_pham set ten_sp = '$name', iddm = '$idDanhMuc', mau_sac = '$mauSac'
        , kich_co = '$kichCo', gia_sp = '$gia', loai = '$chatlieu', img = '$fileName' where id_sp='$id'";
    }
    pdo_execute($sql);
}
function changeStatus1($id, $status)
{
    $sql = "update san_pham set status = '$status' where id_sp ='$id'";
    pdo_execute($sql);
}
  
function getSanPhamByDanhMuc($idDanhMuc) {
    $sql = "SELECT * FROM san_pham WHERE iddm = :idDanhMuc";
    $stmt = pdo_query($sql, ['idDanhMuc' => $idDanhMuc]);
    return $stmt;
}




    


?>
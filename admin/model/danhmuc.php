<?php
function insert_danhsach($tenloai) {
    $sql = "insert into danh_muc(name_danh_muc) values('$tenloai')";
    pdo_execute($sql);
}
function loadall_danhmuc() {
    $sql = "select * from danh_muc order by name_danh_muc";
    $danh_muc = pdo_query($sql);
    return  $danh_muc;
}

function delete_danhmuc($id) {
    $sql = "delete from danh_muc where id_danh_muc = ".$id;
    pdo_execute($sql);
}
function loadone_danhmuc($id) {
    $sql = "select * from danh_muc where id_danh_muc=".$id;
    $ds = pdo_query_one($sql);
    return $ds;
}
function update_danhmuc($id,$tenloai) {
    $sql = "update danh_muc set name_danh_muc='".$tenloai."' where id_danh_muc=".$id;
    pdo_execute($sql);
}

?>
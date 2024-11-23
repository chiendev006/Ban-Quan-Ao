<?php

include_once "pdo.php";

function loadall_ThongKe(){
    $sql = "SELECT danh_muc.id_danh_muc AS ma_dm, 
    danh_muc.name_danh_muc AS ten_dm, 
    COUNT(san_pham.id_sp) AS count_sp, 
    MIN(san_pham.gia_sp) AS min_price, 
    MAX(san_pham.gia_sp) AS max_price, 
    AVG(san_pham.gia_sp) AS avg_price 
FROM danh_muc 
LEFT JOIN san_pham ON danh_muc.id_danh_muc = san_pham.iddm 
GROUP BY danh_muc.id_danh_muc 
ORDER BY danh_muc.id_danh_muc DESC";

    $listThongKe = pdo_query($sql);
    return $listThongKe;
};


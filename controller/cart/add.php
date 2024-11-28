<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $so_luong = 1;
    if(!isset($_SESSION['gioHang'])) {
        $_SESSION['gioHang'] = [];
        $_SESSION['gioHang'][] = [
            'id' => $id,
            'so_luong' => $so_luong
        ];
    }else {
        $tontai = false;
        foreach ($_SESSION['gioHang'] as $key => $value) {
            if($id == $value['id']) {
                $tontai = true;
                $_SESSION['gioHang'][$key]['so_luong'] += 1;
                break;
            }
        }
        if($tontai == false){
            $_SESSION['gioHang'][] = [
                'id' => $id,
                'so_luong' => $so_luong
            ];
        }
    }
    $script = "<script> 
    window.location = 'index.php?action=listgiohang';
    </script>";
    echo $script;
}
    
?>
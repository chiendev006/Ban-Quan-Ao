<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $so_luong = 1;
    if(!isset($_SESSION['gioHang'])) {
        $_SESSION['gioHang'] = []; //Khiểm tra xem sự tồn tại của giỏ hàng
        $_SESSION['gioHang'][] = [
            'id' => $id,
            'so_luong' => $so_luong
        ];
    }else {
        $tontai = false;
        foreach ($_SESSION['gioHang'] as $key => $value) {
            if($id == $value['id']) { // Nếu giỏ hàng tồn tại, kiểm tra xem có sp trong giỏ hàng
                $tontai = true;       // hay chưa nếu có thì +1
                $_SESSION['gioHang'][$key]['so_luong'] += 1;
                break;
            }
        }
        if($tontai == false){
            $_SESSION['gioHang'][] = [ // Nếu chưa có sp trong giỏ hàng thì thêm sp vào giỏ hàng
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
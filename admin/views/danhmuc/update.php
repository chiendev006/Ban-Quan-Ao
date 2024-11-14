<?php
include_once "views/layout/header.php";
if(is_array($ds)){
    extract($ds);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      
    </style>
</head>
<body>
    <!-- Content -->
<div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading"><a href=""></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading"><a href=""></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading"><a href=""></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading"><a href="">Binh luan</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         </div>
         <h2>Sửa Danh Mục</h2>
         <form action="?url=updatedm" method="post">

         <label class="form-lable" for="">Ma loai:</label>
                    <input class="form-control" type="text" name="id_danh_muc" value="<?= htmlspecialchars($ds['id_danh_muc']) ?>" disabled>
                    <label class="form-lable" for="">Name:</label>
                    <input class="form-control" type="text" name="name_danh_muc" value="<?= htmlspecialchars($ds['name_danh_muc']) ?>">
                <input type="hidden" name="id_danh_muc" value="<?php if(isset($ds['id_danh_muc']) && ($ds['id_danh_muc'] > 0)) echo $ds['id_danh_muc']; ?>">
                    <button class="btn btn-primary" type="submit" name="capnhat" value="Cap nhat">Cap nhat </button>
                    <button class="btn btn-primary"><a href="?url=listdm"></a>Danh sach</button>
                </form>

<?php
include_once "views/layout/footer.php";
?>
<?php
include_once "views/layout/header.php";
// hubu
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                                            <div class="stat-heading"><a href=""></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         </div>
         <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên danh mục</th>
            <th>Sửa danh mục</th>
            <th>Xóa danh mục</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
        usort($danh_muc, function($a, $b) {
            return $a['id_danh_muc'] - $b['id_danh_muc'];
        });
        foreach ($danh_muc as $item) { 

            $id = $item['id_danh_muc'];
            $name = $item['name_danh_muc'];

         
            $suads = "?url=suadm&id_danh_muc=" . $id;
            $xoads = "?url=deletedm&id_danh_muc=" . $id;
        ?>
        <tr>
            <td><?= htmlspecialchars($id) ?></td>
            <td><?= htmlspecialchars($name) ?></td>
            <td><a href="<?= $suads ?>"><button class="btn btn-warning">Sửa</button></a></td>
            <td><a href="<?= $xoads ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?');">
                <button class="btn btn-danger">Xóa</button></a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>
<?php
include_once "views/layout/footer.php";
?>
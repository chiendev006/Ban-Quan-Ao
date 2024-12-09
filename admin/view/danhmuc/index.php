<?php
include_once("./view/layouts/header.php");
?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Danh sách danh mục</h3>
                    <p class="text-subtitle text-muted"></p>
                </div>
                
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th class="col-2">ID</th>
                                <th>Tên danh mục</th>
                                <th class="col-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listDanhMuc as $key => $value) {
                                ?>
                                <tr>
                                    <td><?= $value['id_danh_muc'] ?></td>
                                    <td><?= $value['name_danh_muc'] ?></td>
                                    <td>
                                        <div class="d-flex">
                                            <a class="btn btn-secondary" href="index.php?action=editdanhmuc&id=<?=$value['id_danh_muc']?>">Sửa</a>
                                            <?php
                                            if ($value['status'] == 1) {
                                                ?>
                                                <a class="btn btn-danger" href="index.php?action=deletedanhmuc&id=<?=$value['id_danh_muc']?>&status=0">Ẩn</a>
                                                <?php
                                            } else {
                                                ?>
                                                <a class="btn btn-danger" href="index.php?action=deletedanhmuc&id=<?=$value['id_danh_muc']?>&status=1">Hiện</a>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
    <a class="btn btn-primary" href="index.php?action=adddanhmuc">Thêm danh mục</a>
    <?php
    include_once("./view/layouts/footer.php");
    ?>
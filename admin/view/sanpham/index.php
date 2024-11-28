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
                    <h3>Danh sách sản phẩm</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Danh sách sản phẩm</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Danh sách sản phẩm
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th class="col-1">ID</th>
                                <th>Tên</th>
                                <th>Màu</th>
                                <th>Kích cỡ</th>
                                <th>Giá</th>
                                <th>Hình ảnh</th>
                                <th>Chất liệu</th>
                                <th>Tên danh mục</th>
                                <th class="col-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listSanPham as $key => $value) {

                                ?>
                                <tr>
                                    <td><?= $value['id_sp'] ?></td>
                                    <td><?= $value['ten_sp'] ?></td>
                                    <td><?= $value['mau_sac'] ?></td>
                                    <td><?= $value['kich_co'] ?></td>
                                    <td><?= $value['gia_sp'] ?></td>
                                    <td>
                                        <?php
                                        if ($value['img']!=null): ?>
                                            <img src="<?= $base_url . 'upload/' . $value['img'] ?>" alt=""
                                                style="width: 100px; height: auto;">
                                        <?php else: ?>
                                            <img src="<?=$base_url?>upload/default.jpg" alt="Ảnh mặc định"
                                                style="width: 100px; height: auto;">
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $value['loai'] ?></td>
                                    <td><?= $value['iddm'] ?></td>
                                    <td>
                                        <div class="d-flex">
                                            <a class="btn btn-secondary"
                                                href="index.php?action=editsanpham&id=<?= $value['id_sp'] ?>">Sửa</a>
                                            <?php
                                            if ($value['status'] == 1) {
                                                ?>
                                                <a class="btn btn-danger"
                                                    href="index.php?action=deletesanpham&id=<?= $value['id_sp'] ?>&status=0">Ẩn</a>
                                                <?php
                                            } else {
                                                ?>
                                                <a class="btn btn-danger"
                                                    href="index.php?action=deletesanpham&id=<?= $value['id_sp'] ?>&status=1">Hiện</a>
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
    <a class="btn btn-primary" href="index.php?action=addsanpham">Thêm sản phẩm</a>
    <?php
    include_once("./view/layouts/footer.php");
    ?>
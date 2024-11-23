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
                    <h3>Danh sách tai khoan</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Danh sách tai khoan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Danh sách tai khoan
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th class="col-1">Id hoa don</th>
                                <th>Id khach hang</th>
                                <th>Hinh thuc thanh toan</th>
                                <th>Tong tien</th>
                                <th>Ho ten</th>
                                <th>Dia chi</th>
                                <th>SDT</th>
                                <th class="col-2">Status</th>
                                <th>Chi tiet hoa don</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($hoaDonInfo as $key => $value) {
                                ?>
                                <tr>
                                    <td><?= $value['id_hoadon'] ?></td>
                                    <td><?= $value['id_khachhang'] ?></td>
                                    <td><?= $value['trang_thai_tt'] == 0 ? 'Chưa thanh toán' : 'Đã thanh toán' ?></td>
                                    <td><?= $value['tongtien'] ?></td>
                                    <td><?= $value['hoten'] ?></td>
                                    <td><?= $value['diachi'] ?></td>
                                    <td><?= $value['sdt'] ?></td>
                                    <td><?= $value['status'] == 0 ? 'Chưa thanh toán' : 'Đã thanh toán' ?></td>
                                    <td><a class="btn btn-secondary" href="index.php?action=chitiethoadon&id=<?= $value["id_hoadon"] ?>">Chi tiet hoa don</a></td>
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
    <?php
    include_once("./view/layouts/footer.php");
    ?>
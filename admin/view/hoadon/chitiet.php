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
                    <h3>Hóa đơn chi tiết</h3>
                    <p class="text-subtitle text-muted"></p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"></a></li>
                            <li class="breadcrumb-item active" aria-current="page"></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Chi tiết hóa đơn
                </div>
                <div class="card-body">
                    <form method="post" action="index.php?action=capnhathoadon">
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên người nhận</label>
                            <input disabled value="<?= $hoaDonChiTiet['hoten'] ?>" type="text" class="form-control"
                                name="hoten" id="name" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Địa chỉ người nhận</label>
                            <input disabled type="text" class="form-control" name="diachi"
                                value="<?= $hoaDonChiTiet['diachi'] ?>" id="diachi" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Số điện thoại</label>
                            <input disabled type="text" value="<?= $hoaDonChiTiet['sdt'] ?>" class="form-control"
                                name="sdt" id="sdt" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Phương thức thanh toán</label>
                            <select name="trang_thai_tt" class="form-select" aria-label="Default select example" disabled>
                                <option <?= $hoaDonChiTiet['trang_thai_tt'] == 0 ? 'selected' : '' ?> value="0">
                                    Chuyển khoản</option>
                                <option <?= $hoaDonChiTiet['trang_thai_tt'] == 1 ? 'selected' : '' ?> value="1">Tiền
                                    mặt</option>
                                
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Tình trạng thanh toán</label>
                            <select name="status" class="form-select" aria-label="Default select example">
                                <option <?= $hoaDonChiTiet['status'] == 0 ? 'selected' : '' ?> value="0">Chưa thanh toán
                                </option>
                                <option <?= $hoaDonChiTiet['status'] == 1 ? 'selected' : '' ?> value="1">Đã thanh toán
                                </option>
                                <option <?= $hoaDonChiTiet['status'] == 2 ? 'selected' : '' ?> value="2">Hủy đơn hàng
                                </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Tiền phải trả</label>
                            <input disabled value="<?= $hoaDonChiTiet['tongtien'] ?>" type="text" class="form-control"
                                value="<?= 1 ?> VNĐ">
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Ảnh sản phẩm</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Giá sản phẩm</th>
                                    <th scope="col">Tổng giá</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($hoaDonInfo as $item) { ?>
                                    <tr>
                                        <td><?= $item['id_cthd'] ?></td>
                                        <td><?= $item['ten_sp'] ?></td>
                                        <td><img src="<?= $base_url . 'upload/' . $item['img'] ?>" style="width: 100px; height: auto;"></td>
                                        <td><?= $item['so_luong'] ?></td>
                                        <td><?= number_format($item['gia']) ?> VNĐ</td>
                                        <td><?= number_format($item['gia'] * $item['so_luong']) ?> VNĐ</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <input type="hidden" name="id" value="<?= $hoaDonChiTiet['id_hoadon'] ?>">

                        <button class="btn btn-primary" name="edit" type="submit">Cap nhat</button>
                    </form>
                </div>
            </div>

        </section>
    </div>
    <?php
    include_once("./view/layouts/footer.php");
    ?>
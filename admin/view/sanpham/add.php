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
                    <h3>Thêm sản phẩm</h3>
                    <p class="text-subtitle text-muted">For user to check they list</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thêm sản phẩm</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <form action="index.php?action=addsanpham" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="danhmuc" class="form-label">Tên danh mục</label>
                            <select class="form-select" name="danhmuc" aria-label="Default select example">
                                <option value="1">Áo phông</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="danhmuc" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="ten_sp" id="danhmuc">
                        </div>
                        <div class="mb-3">
                            <label for="mausau" class="form-label">Màu sắc</label>
                            <select class="form-select" name="mau_sac" aria-label="Default select example">
                                <option value="Đỏ">Đỏ</option>
                                <option value="Vàng">Vàng</option>
                                <option value="Đen">Đen</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="mausau" class="form-label">Kích cơx</label>
                            <select class="form-select" name="kich_co" aria-label="Default select example">
                                <option value="L">L</option>
                                <option value="M">M</option>
                                <option value="S">S</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="danhmuc" class="form-label">Gia sản phẩm</label>
                            <input type="number" class="form-control" name="gia_sp" id="danhmuc">
                        </div>
                        <div class="mb-3">
                            <label for="danhmuc" class="form-label">Chất liệu sản phẩm</label>
                            <input type="text" class="form-control" name="loai" id="danhmuc">
                        </div>
                        <div class="mb-3">
                            <label for="danhmuc" class="form-label">Ảnh sản phẩm</label>
                            <input type="file" class="form-control" name="img" id="danhmuc">
                        </div>
                        <button type="submit" name="addsp" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>

        </section>
    </div>
    <?php
    include_once("./view/layouts/footer.php");
    ?>
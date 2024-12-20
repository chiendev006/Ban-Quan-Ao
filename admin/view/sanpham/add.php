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
                            <select required class="form-select" name="danhmuc" aria-label="Default select example">
                                <?php  
                                    foreach($listDanhMuc as $item) {
                                ?>
                                    <option value="<?= $item['id_danh_muc'] ?>"><?= $item['name_danh_muc'] ?></option>
                                <?php
                                    }
                                ?>
                               
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="danhmuc" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" id="danhmuc">
                        </div>
                        <div class="mb-3">
                            <label for="danhmuc" class="form-label">Gia sản phẩm</label>
                            <input type="number" class="form-control" name="gia_sp" id="danhmuc">
                        </div>
                        <div class="mb-3">
                            <label for="mausau" class="form-label">Hãng</label>
                            <select class="form-select" name="hang" aria-label="Default select example">
                            <option value="Vui lòng chọn hãng">Vui lòng chọn hãng</option>
                                <option value="Panasonic">Panasonic</option>
                                <option value="Sam Sung">Sam Sung</option>
                                <option value="FPT">FPT</option>
                                <option value="TOSHIBA">TOSHIBA</option>
                                <option value="PHILIPS">PHILIPS</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="danhmuc" class="form-label">Mô tả sản phẩm</label>
                            <input type="text" class="form-control" name="mo_ta" id="danhmuc">
                        </div>
                        <div class="mb-3">
                            <label for="danhmuc" class="form-label">Ảnh sản phẩm</label>
                            <input type="file" class="form-control" name="hinhanh" id="danhmuc">
                        </div>
                        <button type="submit" name="add" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>

        </section>
    </div>
    <?php
    include_once("./view/layouts/footer.php");
    ?>
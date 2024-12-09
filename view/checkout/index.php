<?php include_once "view/index_checkout/header.php"; ?>
<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Thanh toán</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Checkout</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <form action="index.php?action=thanhtoan" method="post">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Tên của bạn</label>
                            <input class="form-control" name="ten" type="text" placeholder="Tên">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Dia chi</label>
                            <input class="form-control" name="diachi" type="text" placeholder="Địa chỉ">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>SDT</label>
                            <input class="form-control" name="sdt" type="text" placeholder="SĐT">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" type="text" placeholder="Email">
                        </div>
                        <div class="col-md-12 form-group">
                        </div>
                    </div>
                </div>
                <div class="collapse mb-4" id="shipping-address">
                    <h4 class="font-weight-semi-bold mb-4">Shipping Address</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input class="form-control" type="text" placeholder="John">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" placeholder="Doe">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="example@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" placeholder="+123 456 789">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Tổng thanh toán</h4>
                    </div>
                    <ul>
                    <?php foreach ($listGioHang as $key => $item) { ?>
                        <p>Sản phẩm <?= $key+1 ?>:</p>
                        <li>Tên san phẩm: <?= $item['tenSP'] ?><span><?= number_format($item['gia'] * $item['so_luong']) ?></span></li>
                        <p>Giá sản phẩm: <?= $item['gia'] ?>VNĐ</p>
                        <img src="<?= $base_url . 'admin/upload/' . $item['img'] ?>" alt="" style="width: 50%; height: 100px;">
                    <?php } ?>
                    </ul>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Products</h5>
                        <div class="d-flex justify-content-between">
                            <p>Tong tien</p>
                            <p><?= number_format($tongTien + 20000) ?> VNĐ</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Phi ship</p>
                            <p>20,000 VDN</p>
                        </div>
                        <hr class="mt-0">
                    </div>
                    <div class="checkout__input__checkbox">
                                <label for="tienmat"> Tiền mặt </label>
                                <input type="radio" checked name="trang_thai_tt" value="0" id="tienmat">
                                <label for="online"> Thanh toán online </label>
                                <input type="radio" name="trang_thai_tt" value="1" id="online">
                            </div>
                </div>     
                <div class="card border-secondary mb-5">
                    <div class="card-footer border-secondary bg-transparent">
                        <button name="thanhtoan" type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Đặt hàng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- Checkout End -->
     <?php include_once "view/layout/footer.php"; ?>
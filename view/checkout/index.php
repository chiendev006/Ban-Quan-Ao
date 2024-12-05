<?php include_once "view/layout/header.php"; ?>
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <h4>Chi tiết hóa đơn</h4>
            <form action="index.php?action=thanhtoan" method="post">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <!-- Thông tin khách hàng -->
                        <div class="form-group">
                            <label for="ten">Tên của bạn <span>*</span></label>
                            <input required name="ten" type="text" class="form-control" id="ten">
                        </div>
                        <div class="form-group">
                            <label for="diachi">Địa chỉ <span>*</span></label>
                            <input required name="diachi" type="text" class="form-control" id="diachi" placeholder="Địa chỉ">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="sdt">Phone <span>*</span></label>
                                    <input required name="sdt" type="text" class="form-control" id="sdt">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email <span>*</span></label>
                                    <input required name="email" type="email" class="form-control" id="email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Đơn hàng -->
                        <div class="checkout__order">
                            <h4>Hóa đơn của bạn</h4>
                            <div class="checkout__order__products">Sản phẩm <span>Tổng tiền</span></div>
                            <ul class="list-group">
                                <?php foreach ($listGioHang as $item) { ?>
                                    <li class="list-group-item"><?= $item['ten_sp'] ?><span class="float-right"><?= number_format($item['gia'] * $item['soLuong']) ?> VNĐ</span></li>
                                <?php } ?>
                            </ul>
                            <div class="checkout__order__subtotal mt-3">Phí ship <span>20,000 VNĐ</span></div>
                            <div class="checkout__order__total mt-2 font-weight-bold">Tổng tiền <span class="float-right"><?= number_format($tongTien + 20000) ?> VNĐ</span></div>
                            <div class="checkout__input__checkbox mt-3">
                                                    <div class="checkout__input__checkbox">
                            <label for="tienmat">Tiền mặt</label>
                            <input type="radio" checked name="hinhthuc" value="0" id="tienmat">
                            <label for="online">Thanh toán online</label>
                            <input type="radio" name="hinhthuc" value="1" id="online">
                        </div>

                            <button type="submit" name="thanhtoan" class="btn btn-primary btn-block mt-4">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<?php include_once "view/layout/footer.php"; ?>

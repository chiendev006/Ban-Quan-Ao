<?php include_once('view/layout/header.php');

?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="./asset/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Shopping Cart</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID Sản Phẩm</th>
                                <th>Hình ảnh</th>
                                <th class="shoping__product">Tên Sản Phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng giá</th>
                                <th>Hành động</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listGioHang as $item): ?>
                                    <td><?= $item['id'];?> </td>
                                    <td class="shoping__cart__item">
                                        <img width="80px" src="<?= $base_url . 'admin/upload/' . $item['hinhanh'] ?>" alt="<?= $item['ten_sp'] ?>" class="img-thumbnail">
                                        
                                    </td>
                                    <td><?= $item['ten_sp'] ?></td>
                                    <td class="shoping__cart__price">
                                        <?= number_format($item['gia']) ?> VNĐ
                                    </td>
                                    <td class="shoping__cart__quantity">
                                       <?= $item['soLuong'] ?>

                                    </td>
                                    <td class="shoping__cart__total">
                                        <?= number_format($item['gia'] * $item['soLuong']) ?> VNĐ
                                    </td>
                                    <td>
                                    
                                        <a href="index.php?action=deleteCart&id=<?= $item['id'] ?>" class="btn btn-danger btn-sm">Xóa</a>
                                    </td>

                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns d-flex justify-content-between">
                    <a href="index.php?action=index-shop" class="btn btn-primary">Tiếp tục mua sắm</a>
                    <a href="index.php?action=updateCart" class="btn btn-warning">Cập nhật giỏ hàng</a>
                </div>
            </div>

            <div class="col-lg-6 mt-4">
                <div class="shoping__discount">
                    <h5>Mã giảm giá</h5>
                    <form action="#" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Nhập mã giảm giá" name="coupon_code">
                            <button class="btn btn-success" type="submit">Áp dụng</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 mt-4">
                <div class="shoping__checkout">
                    <h5>Tổng giỏ hàng</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between">
                            Giá trị đơn <span><?= number_format($tongTien) ?> VNĐ</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            Phí ship <span>20,000 VNĐ</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            Tổng cộng <span><?= number_format($tongTien + 20000) ?> VNĐ</span>
                        </li>
                    </ul>
                    <a href="index.php?action=hienthithanhtoan" class="btn btn-success btn-block mt-3">Thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->

<?php include_once('view/layout/footer.php'); ?>

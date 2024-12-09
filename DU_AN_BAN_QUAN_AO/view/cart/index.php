<?php
include_once "view/layout/header.php";
?>
<div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Name</th>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php  
                            foreach ($listGioHang as $item) {
                        ?>
                        <tr>
                        <td class="align-middle"><?= $item['ten_sp'] ?> </td>
                            <td class="align-middle"><img src="<?= $base_url . 'admin/upload/' . $item['img'] ?>" alt="" style="width: 55%; height: 100px;"> <?php $item['ten_sp'] ?></td>
                            <td class="align-middle"><?= number_format($item['gia_sp']) ?> VĐN</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus" value=""></i>   
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" value="<?= $item['so_luong'] ?>">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle"><?= number_format($item['gia_sp'] * $item['so_luong']) ?> VNĐ</td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-5" action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Giá trị đơn </h6>
                            <h6 class="font-weight-medium"><?= number_format($tongTien) ?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Phí ship</h6>
                            <h6 class="font-weight-medium">20,000 VNĐ</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold"><?= number_format($tongTien + 20000) ?></h5>
                        </div>
                        <a  href="index.php?action=hienthithanhtoan" class="btn btn-block btn-primary my-3 py-3" >Thanh toan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include_once "view/layout/footer.php";
?>
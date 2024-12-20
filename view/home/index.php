
<?php
include_once ('view/layout/header.php');
?>



    <!-- Featured Start -->
    <!-- <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Featured End -->


    <!-- Categories Start -->
     
    <!-- Categories End -->


    <!-- Offer Start -->
    <!-- <div class="container-fluid offer pt-5">
        <div class="row px-xl-5">
            <div class="col-md-6 pb-4">
                <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                    <img src="./aset/img/offer-1.png" alt="">
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3">20% off the all order</h5>
                        <h1 class="mb-4 font-weight-semi-bold">Spring Collection</h1>
                        <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pb-4">
                <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                    <img src="./aset/img/offer-2.png" alt="">
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3">20% off the all order</h5>
                        <h1 class="mb-4 font-weight-semi-bold">Winter Collection</h1>
                        <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Offer End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Sản phẩm mới nhất</span></h2>
        </div>  
        <div class="row px-xl-5 pb-3">
        <div class="row px-xl-5 pb-3">
        <?php 
           include_once 'controller/home/index.php';
            foreach ($listSanPham as $key => $item) {
        ?>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 featured__filter" >
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img src="<?= $base_url . 'admin/upload/' . $item['img'] ?>" alt="" style="width: 100%;">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3"><?= $item['ten_sp'] ?></h6>
                        <div class="d-flex justify-content-center">
                            <h6><?= $item['gia_sp'] ?></h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="?action=detail&id=<?= $item['id_sp'] ?>" class="btn btn-sm text-dark p-0"><i
                                    class="fas fa-eye text-primary mr-1"></i>View
                                Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div> 
            <?php }?>
    </div>
    </div>
    <!-- Products End -->


    <!-- Subscribe Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="row justify-content-md-center py-5 px-xl-5">
            <div class="col-md-6 col-12 py-5">
                <div class="text-center mb-2 pb-2">
                    <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Gia dụng</span></h2>
                    <p>Sản phẩm chất lượng được sản xuất bởi công nghệ hiện đại nhất thế giới.</p>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Subscribe End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Danh sách sản phẩm</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
        <?php 
            include_once 'controller/home/index.php';
            foreach ($listSanPhamlimit as $key => $item) {
        ?>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img src="<?= $base_url . 'admin/upload/' . $item['img'] ?>" alt="" style="width: 313px;  ">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3"><?= $item['ten_sp'] ?></h6>
                        <div class="d-flex justify-content-center">
                            <h6><?= $item['gia_sp'] ?></h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div> 
            <?php }?>
    </div>
    <!-- Products End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="vendor-item border p-4">
                        <img src="./aset/img/vendor-1.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="./aset/img/vendor-2.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="./aset/img/vendor-3.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="./aset/img/vendor-4.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="./aset/img/vendor-5.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="./aset/img/vendor-6.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="./aset/img/vendor-7.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="./aset/img/vendor-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
<?php
include_once ('view/layout/footer.php');
?>
<!-- Page Header End -->

<!-- <?php
include_once "view/layout/header.php";
?> -->

<!-- Shop Detail Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">
                    <div class="carousel-item active">
                        <img src="<?= $base_url . 'admin/upload/' . $xem_Sp['img'] ?>" alt=""
                            style="width: 80%; height: 800px;">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-7 pb-5">
            <h3 class="font-weight-semi-bold"><?= ($xem_Sp['ten_sp']) ?></h3>
            <div class="d-flex mb-3">
                <div class="text-primary mr-2">
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star-half-alt"></small>
                    <small class="far fa-star"></small>
                </div>
                <small class="pt-1">(50 Reviews)</small>
            </div>
            <h3 class="font-weight-semi-bold mb-4">Giá: <?= ($xem_Sp['gia_sp']) ?> VND</h3><br>
            <h4>Hãng: <?= ($xem_Sp['hang']) ?></h4><br>
            <span>Mô tả sản phẩm: <?= ($xem_Sp['mo_ta']) ?></span><br>
            <form action="index.php?action=binhluan" method="post">
                <h4>Bình luận</h4>
                <div class="control-group">
                <p type="text" name="id_khachhang" value="2">
                <textarea class="form-control" name="noi_dung" rows="6" id="message" placeholder="Nhập bình luận..." required></textarea>
                </div>
                 <button class="btn btn-primary py-2 px-4" type="submit" name="add">Gửi</button>
            </form>
            <div class="d-flex pt-2">
                <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                <div class="d-inline-flex">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
<!-- <?php
include_once "view/layout/footer.php";
?> -->
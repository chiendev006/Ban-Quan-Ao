<?php include_once "view/index_checkout/header.php"; ?>
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Liên hệ với chúng tôi để được hỗ trợ !</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
                <div id="success"></div>
                <form action="index.php?action=contact" method="post">
                    <div class="control-group">
                        <input type="text" class="form-control" name="name" placeholder="Tên" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" name="noidung" placeholder="Nội dung" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-primary py-2 px-4" type="submit" name="add">Gửi</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-5 mb-5">
            <h5 class="font-weight-semi-bold mb-3">Liên hệ</h5>
            <p>Nếu bạn gặp vấn đề hãy nhập thông tin và nội dung cần hỗ trợ chúng tôi sẽ phản hồi và hỗ trợ bạn trong
                thời gian sớm nhất.</p>
            <div class="d-flex flex-column mb-3">
                <h5 class="font-weight-semi-bold mb-3">Store 1</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>55 Lương Khánh Thiện, Hải Phòng,
                    Việt Nam</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>chiennmpp03120@gmail.com</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>0377153845</p>
            </div>
            <div class="d-flex flex-column">
                <h5 class="font-weight-semi-bold mb-3">Store 2</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>44 Ngô Gia Tự, Hải Phòng, Việt Nam
                </p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>Nampp03120@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.159890273704!2d106.70677487503929!3d20.865604680743225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7bf67d69c9c7%3A0x4341c6cef1813f18!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1733365467917!5m2!1svi!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
</div>
<?php include_once "view/layout/footer.php"; ?>
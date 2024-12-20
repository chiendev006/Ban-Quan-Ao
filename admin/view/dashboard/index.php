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
        <h3>Thống kê doanh thu</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
            <div class="row">
    <!-- Chọn ngày -->
    <div class="col-4">
        <form method="GET" action="">
            <div class="form-group">
                <label for="ngay">Chọn ngày:</label>
                <input type="date" id="ngay" name="ngay" class="form-control" value="<?= isset($_GET['ngay']) ? $_GET['ngay'] : '' ?>">
            </div>
            <button type="submit" class="btn btn-primary">Lọc</button>
        </form>
    </div>

    <!-- Chọn tháng -->
    <div class="col-4">
        <form method="GET" action="">
            <div class="form-group">
                <label for="thang">Chọn tháng:</label>
                <input type="month" id="thang" name="thang" class="form-control" value="<?= isset($_GET['thang']) ? $_GET['thang'] : '' ?>">
            </div>
            <button type="submit" class="btn btn-primary">Lọc</button>
        </form>
    </div>

    <!-- Chọn năm -->
    <div class="col-4">
        <form method="GET" action="">
            <div class="form-group">
                <label for="nam">Chọn năm:</label>
                <input type="number" id="nam" name="nam" class="form-control" min="2000" max="2099" step="1" value="<?= isset($_GET['nam']) ? $_GET['nam'] : '' ?>">
            </div>
            <button type="submit" class="btn btn-primary">Lọc</button>
        </form>
    </div>
</div>


<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <h5>Doanh thu hôm nay</h5>
                <p><?= number_format($doanh_thu_ngay, 2) ?> VNĐ</p>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <h5>Doanh thu tháng này</h5>
                <p><?= number_format($doanh_thu_thang, 2) ?> VNĐ</p>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <h5>Doanh thu năm nay</h5>
                <p><?= number_format($doanh_thu_nam, 2) ?> VNĐ</p>
            </div>
        </div>
    </div>
</div>



                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Profile Visit</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-profile-visit"></div>
                            </div>
                        </div>
</div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Profile Visit</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-primary" width="32" height="32" fill="blue"
                                                style="width:10px">
                                                <use
                                                    xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">Europe</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0">862</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-europe"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-success" width="32" height="32" fill="blue"
                                                style="width:10px">
                                                <use
                                                    xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">America</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0">375</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-america"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-danger" width="32" height="32" fill="blue"
style="width:10px">
                                                <use
                                                    xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">Indonesia</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0">1025</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-indonesia"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Latest Comments</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-lg">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Comment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="assets/images/faces/5.jpg">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">Congratulations on your graduation!</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
<img src="assets/images/faces/2.jpg">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">Wow amazing design! Can you make another
                                                        tutorial for
                                                        this design?</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="assets/images/faces/1.jpg" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">John Duck</h5>
                                <h6 class="text-muted mb-0">@johnducky</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Recent Messages</h4>
                    </div>
                    <div class="card-content pb-4">
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="assets/images/faces/4.jpg">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">Hank Schrader</h5>
                                <h6 class="text-muted mb-0">@johnducky</h6>
                            </div>
                        </div>
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="assets/images/faces/5.jpg">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">Dean Winchester</h5>
                                <h6 class="text-muted mb-0">@imdean</h6>
                            </div>
                        </div>
                        <div class="recent-message d-flex px-4 py-3">
<div class="avatar avatar-lg">
                                <img src="assets/images/faces/1.jpg">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">John Dodol</h5>
                                <h6 class="text-muted mb-0">@dodoljohn</h6>
                            </div>
                        </div>
                        <div class="px-4">
                            <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Start
                                Conversation</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Visitors Profile</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart-visitors-profile"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>

    
    // Hàm reset giá trị các input khác
function resetInputs(currentId) {
    // Lấy danh sách tất cả các input
    const inputs = document.querySelectorAll("#ngay, #thang, #nam");
    
    // Lặp qua các input và reset giá trị nếu không phải input hiện tại
    inputs.forEach(input => {
        if (input.id !== currentId) {
            input.value = ''; // Reset giá trị
        }
    });
}

// Gắn sự kiện submit cho từng form
document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', function (event) {
        // Lấy ID của input hiện tại
        const currentInputId = this.querySelector('input').id;

        // Đợi form xử lý xong, sau đó reset các input khác
        setTimeout(() => resetInputs(currentInputId), 100);
    });
});
</script>

    <?php
    include_once("./view/layouts/footer.php");
    ?>
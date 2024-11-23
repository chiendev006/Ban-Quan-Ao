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
                    <h3>Thống kê</h3>
                </div>
                
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Thống kê
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                    <tr>
                    <th>ID danh mục</th>
                    <th>Tên danh muc</th>
                    <th>Số lượng</th>
                    <th>Giá cao nhất</th>
                    <th>Giá thấp nhất</th>
                    <th>Giá trung bình</th>
                </tr>
          
                <?php foreach ($listThongKe as $thongke){
                    extract($thongke)
                ?>
                        <tr>
                            <td><?php echo  $ma_dm ;?></td>
                            <td><?php echo  $ten_dm; ?></td>
                            <td><?php echo  $count_sp; ?></td>
                            <td><?php echo  $max_price;?></td>
                            <td><?php echo $min_price; ?></td>
                            <td><?php echo $avg_price; ?></td>
                        </tr>

                <?php }
                ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
    
    <?php
    include_once("./view/layouts/footer.php");
    
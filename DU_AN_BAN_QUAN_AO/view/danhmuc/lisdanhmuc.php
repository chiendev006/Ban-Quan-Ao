<div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Danh Mục Thời Trang</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <?php
                          include_once 'controller/home/index.php';
                           foreach ($listDanhMuc as $key => $item) { ?>
                            <li data-filter=".<?= $item['id_danh_muc'] ?>"><?= $item['name_danh_muc'] ?></li>
                        <?php } ?>
                    </ul>
                    </div>
                </nav>
            </div> 
          
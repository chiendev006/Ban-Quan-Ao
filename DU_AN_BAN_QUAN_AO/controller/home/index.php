<?php
include_once('model/danhmuc.php');
include_once('model/sanpham.php');
$listDanhMuc = listDanhMuc();
$listSanPham = listSanPham();
$listSanPhamlimit = listSanphamlimit();
include_once('view/home/index.php');

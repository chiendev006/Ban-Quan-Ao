<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="aset/css/style.css">
</head>
<body>
<div class="cart-section mt-150 mb-150">
                <div class="container"  style="display: flex; justify-content: center; align-items: center"3>
                  <div class="row">
                  <form action="index.php?action=dangki" method = "POST" >
                          <h2>Đăng kí</h2>
                          <div class="mb-3">
                            <label for="username" class="form-label">Họ tên</label>
                            <input type="text" name="ho_ten"class="form-control" placeholder="Nhập tên người dùng">
                          </div>
                          <div class="mb-3">
                            <label for="username" class="form-label">Ngày sinh</label>
                            <input type="date" name="ngay_sinh"class="form-control" placeholder="Nhập tên người dùng">
                          </div>
                          <div class="mb-3">
                            <label for="username" class="form-label">Nhập Email</label>
                            <input type="text" name="email"class="form-control" placeholder="Nhập tên người dùng">
                          </div>
                          <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" name="matkhau" class="form-control" placeholder="Nhập mật khẩu">
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Số điện thoại</label>
                            <input type="text" name="sdt" class="form-control" placeholder="Nhập số điện thọa">
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Địa chỉ</label>
                            <input type="text" name="dia_chi" class="form-control" placeholder="Nhập địa chỉ">
                          </div>
                          <!-- <button type="submit" class="btn btn-warning">Đăng nhập</button> -->
						  <button type="submit" name="add" class="btn btn-warning" >Đăng Ký</button>
                        </form>
                      </div>                    
                  </div>
              </div>
              
</body>
</html>
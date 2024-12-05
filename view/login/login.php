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
                  <form action="index.php?action=login" method = "POST" >
                          <h2>Đăng nhập</h2>
                          <div class="mb-3">
                            <label for="username" class="form-label">Tên người dùng</label>
                            <input type="text" name="email"class="form-control" placeholder="Nhập tên người dùng">
                          </div>
                          <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" name="matkhau" class="form-control" placeholder="Nhập mật khẩu">
                          </div>
                          <button type="submit" class="btn btn-warning">Đăng nhập</button>
						  <button type="button" class="btn btn-warning" onclick="window.location.href='index.php?action=dangki'">Đăng Ký</button>
                        </form>
                      </div>                    
                  </div>
              </div>
              
</body>
</html>
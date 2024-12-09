<?php
session_start();
include_once '../model/login.php';
if (isset($_POST['email']) && isset($_POST['matkhau'])) {
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    $checkUser = checkuser($email, $matkhau);

    if ($checkUser && $checkUser['role'] == 1) {
        $_SESSION['admin']['email'] = $email;
        header('location: index.php');
        exit();
    } else {
        $script = "<script> 
    alert('Bạn không đủ quyền !!!!!!');
    window.location = 'dangnhap.php';
    </script>";
    echo $script;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="aset/css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            background: url('https://i.pinimg.com/736x/1c/bf/56/1cbf56b236e9c84d25ed047d62d49886.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .boxconten {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .text-danger {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="boxconten">
        <h1>Admin Login</h1>
    <form action="" method="post">

        <div class="mb-3">
            <label for="email" class="form-label fw-bold">Tên đăng nhập</label>
            <input type="text" name="email" id="email" class="form-control shadow-sm" placeholder="Nhập tên đăng nhập" required>
        </div>
        <div class="mb-3">
            <label for="matkhau" class="form-label fw-bold">Mật khẩu</label>
            <input type="matkhau" name="matkhau" id="matkhau" class="form-control shadow-sm" placeholder="Nhập mật khẩu" required>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary fw-bold shadow-sm">Đăng nhập</button>
        </div>
    </form>
    </div>
</body>
</html>
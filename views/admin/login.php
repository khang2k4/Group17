<!DOCTYPE html>
<html lang="vi">
<head>
    <!-- Khai báo mã tài liệu HTML5 và thiết lập ngôn ngữ là tiếng Việt -->
    <meta charset="UTF-8"> <!-- Mã hóa ký tự UTF-8 hỗ trợ tiếng Việt -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Tối ưu hiển thị trên thiết bị di động -->
    <title>Đăng nhập</title> <!-- Tiêu đề trang -->

    <!-- Kết nối với thư viện CSS của Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Toàn bộ trang */
        body {
            background: linear-gradient(135deg, #6e8efb, #a777e3); /* Nền chuyển sắc */
            min-height: 100vh; /* Chiều cao tối thiểu 100% viewport */
            display: flex; /* Căn giữa theo flexbox */
            justify-content: center; /* Căn ngang */
            align-items: center; /* Căn dọc */
            font-family: 'Arial', sans-serif; /* Font chữ chính */
        }
        
        /* Hộp chứa form */
        .container {
            background: #ffffff; /* Nền trắng */
            padding: 2rem; /* Khoảng cách bên trong */
            border-radius: 15px; /* Bo góc */
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2); /* Đổ bóng */
            max-width: 400px; /* Chiều rộng tối đa */
            width: 100%; /* Chiều rộng đầy đủ */
        }

        /* Tiêu đề h2 */
        h2 {
            font-weight: bold; /* Chữ đậm */
            margin-bottom: 20px; /* Khoảng cách dưới */
            color: #4e54c8; /* Màu chữ */
            text-shadow: 0 3px 5px rgba(0, 0, 0, 0.1); /* Bóng chữ */
        }

        /* Nhãn form */
        .form-label {
            font-weight: bold; /* Chữ đậm */
            color: #333; /* Màu chữ xám đậm */
        }

        /* Trường nhập liệu */
        .form-control {
            background: #f3f4f6; /* Nền xám nhạt */
            border: 1px solid #ddd; /* Viền mỏng */
            border-radius: 10px; /* Bo góc */
            padding: 10px 15px; /* Khoảng cách bên trong */
            transition: all 0.3s ease-in-out; /* Hiệu ứng mượt */
            box-shadow: inset 0px 3px 6px rgba(0, 0, 0, 0.1); /* Đổ bóng bên trong */
        }
        .form-control:focus {
            outline: none; /* Bỏ viền mặc định */
            border-color: #6e8efb; /* Đổi màu viền khi focus */
            box-shadow: 0px 3px 8px rgba(110, 142, 251, 0.4); /* Bóng khi focus */
        }

        /* Nút bấm */
        .btn-primary {
            background: linear-gradient(45deg, #6e8efb, #a777e3); /* Nền chuyển sắc */
            border: none; /* Bỏ viền */
            padding: 10px 20px; /* Khoảng cách bên trong */
            font-size: 16px; /* Cỡ chữ */
            font-weight: bold; /* Chữ đậm */
            color: #fff; /* Màu chữ trắng */
            border-radius: 50px; /* Bo góc lớn */
            transition: all 0.3s ease-in-out; /* Hiệu ứng hover */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Đổ bóng */
        }
        .btn-primary:hover {
            transform: translateY(-2px); /* Hiệu ứng nổi lên */
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3); /* Đổ bóng đậm hơn */
        }

        /* Cảnh báo lỗi */
        .alert-danger {
            border-radius: 10px; /* Bo góc */
            box-shadow: 0px 3px 8px rgba(255, 0, 0, 0.2); /* Đổ bóng đỏ */
        }
    </style>
</head>
<body>
    <!-- Hộp chứa nội dung chính -->
    <div class="container">
        <h2 class="text-center">Đăng nhập quản trị viên</h2> <!-- Tiêu đề trung tâm -->
        
        <!-- Thông báo lỗi nếu có -->
        <?php if (isset($error)): ?>
            <div class="alert alert-danger text-center">
                <?= $error ?> <!-- Hiển thị nội dung lỗi -->
            </div>
        <?php endif; ?>

        <!-- Form đăng nhập -->
        <form method="POST" action="index.php?controller=admin&action=login">
            <!-- Trường nhập tên đăng nhập -->
            <div class="mb-3">
                <label for="username" class="form-label">Tên đăng nhập</label>
                <input type="text" name="username" class="form-control" id="username" required>
            </div>
            
            <!-- Trường nhập mật khẩu -->
            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>

            <!-- Nút bấm gửi form -->
            <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
        </form>
    </div>
</body>
</html>

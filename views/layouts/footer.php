<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Tin Tức</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
        }
        footer {
            background-color: #222;
            color: #fff;
            padding: 20px 0;
            margin-top: 50px;
        }
        footer hr {
            border-top: 1px solid #444;
        }
        footer .col-12 p {
            margin: 0;
            font-size: 14px;
            color: #ccc;
        }
        footer a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }
        footer a:hover {
            color: #f39c12;
        }
        .news-footer-links {
            margin-bottom: 20px;
            text-align: center;
        }
        .news-footer-links a {
            margin: 0 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <!-- Nội dung trang tin tức -->
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tin Tức Hôm Nay</h1>
        <div class="row">
            <!-- Tin chính -->
            <div class="col-md-8">
                <div class="card mb-4">
                    <img src="assets/images/news1.jpg" class="card-img-top" alt="Tin chính">
                    <div class="card-body">
                        <h5 class="card-title">Tiêu đề bài viết</h5>
                        <p class="card-text">Đây là đoạn mô tả ngắn về bài viết. Nhấn để xem chi tiết.</p>
                        <a href="#" class="btn btn-primary">Xem thêm</a>
                    </div>
                </div>
            </div>
            <!-- Tin phụ -->
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="assets/images/news2.jpg" class="card-img-top" alt="Tin phụ">
                    <div class="card-body">
                        <h6 class="card-title">Tiêu đề bài viết phụ</h6>
                        <a href="#" class="btn btn-link">Đọc ngay</a>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="assets/images/news3.jpg" class="card-img-top" alt="Tin phụ">
                    <div class="card-body">
                        <h6 class="card-title">Tiêu đề bài viết phụ</h6>
                        <a href="#" class="btn btn-link">Đọc ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
<div style="background-color: #ffe066; padding: 30px 20px; margin-top: 20px; text-align: center; font-family: Arial, sans-serif;">
    <div style="display: flex; justify-content: center; align-items: flex-start; flex-wrap: wrap; max-width: 1200px; margin: 0 auto;">
        
        <!-- Info Section -->
        <div style="flex: 1; padding: 20px; text-align: left;">
            <h3 style="font-size: 18px; font-weight: bold; color: #333; margin-bottom: 15px;">Thông Tin Liên Hệ</h3>
            <p style="margin: 10px 0; font-size: 14px; color: #666;">Báo tiếng Việt nhiều người xem nhất</p>
            <p style="margin: 10px 0; font-size: 14px; color: #666;">Thuộc Bộ Khoa học và Công nghệ</p>
            <p style="margin: 10px 0; font-size: 14px; color: #666;">Số giấy phép: 548/GP-BTTTT</p>
            <p style="margin: 10px 0; font-size: 14px; color: #666;">Do Bộ Thông tin và Truyền thông cấp ngày 24/08/2021</p>
        </div>

        <!-- Contact Section -->
        <div style="flex: 1; padding: 20px; text-align: left; margin-left: 50px;"> <!-- Đẩy sang bên phải -->
            <h3 style="font-size: 18px; font-weight: bold; color: #333; margin-bottom: 15px;">Thông Tin Liên Lạc</h3>
            <p style="margin: 10px 0; font-size: 14px; color: #666;">Tổng biên tập: Đỗ Phương Quỳnh</p>
            <p style="margin: 10px 0; font-size: 14px; color: #666;">Địa chỉ: Tòa A FPT Tower, Dịch Vọng, Cầu Giấy, Hà Nội</p>
            <p style="margin: 10px 0; font-size: 14px; color: #666;">Điện thoại: 024 7300 8899</p>
            <p style="margin: 10px 0; font-size: 14px; color: #666;">Email: nentangweb@gmail.com</p>
        </div>
        
    </div>
</div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <!-- Đặt mã hóa ký tự UTF-8 để hỗ trợ hiển thị tiếng Việt. -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Cài đặt cho trang hiển thị thân thiện trên mọi thiết bị (desktop, mobile). -->

    <title>Trang Tin Tức</title>
    <!-- Tiêu đề trang web. -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Thư viện Bootstrap CSS để thiết kế giao diện nhanh chóng và đẹp mắt. -->

    <style>
        /* Các quy tắc CSS tuỳ chỉnh cho trang web. */
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
    <!-- Nội dung chính của trang -->
    <div class="container mt-5">
        <!-- Tạo container Bootstrap và thêm khoảng cách trên (margin-top: 5 đơn vị). -->

        <h1 class="text-center mb-4">Tin Tức Hôm Nay</h1>
        <!-- Tiêu đề trang, căn giữa và thêm khoảng cách dưới (margin-bottom: 4). -->

        <div class="row">
            <!-- Bố cục chia thành hàng với Bootstrap. -->

            <!-- Cột tin chính -->
            <div class="col-md-8">
                <!-- Một cột chiếm 8/12 màn hình trên thiết bị trung bình trở lên. -->
                <div class="card mb-4">
                    <!-- Card Bootstrap với khoảng cách dưới (margin-bottom: 4). -->
                    <img src="assets/images/image1.jpg" class="card-img-top" alt="Tin chính">
                    <!-- Hình ảnh của bài viết chính. -->
                    <div class="card-body">
                        <h5 class="card-title">Tiêu đề bài viết</h5>
                        <!-- Tiêu đề bài viết chính. -->
                        <p class="card-text">Đây là đoạn mô tả ngắn về bài viết. Nhấn để xem chi tiết.</p>
                        <!-- Mô tả ngắn gọn của bài viết. -->
                        <a href="#" class="btn btn-primary">Xem thêm</a>
                        <!-- Nút nhấn "Xem thêm" dẫn đến chi tiết bài viết. -->
                    </div>
                </div>
            </div>

            <!-- Cột tin phụ -->
            <div class="col-md-4">
                <!-- Một cột chiếm 4/12 màn hình trên thiết bị trung bình trở lên. -->

                <!-- Bài viết phụ 1 -->
                <div class="card mb-3">
                    <!-- Card tin phụ. -->
                    <img src="assets/images/image2.jpg" class="card-img-top" alt="Tin phụ">
                    <!-- Hình ảnh của bài viết phụ. -->
                    <div class="card-body">
                        <h6 class="card-title">Tiêu đề bài viết phụ</h6>
                        <!-- Tiêu đề bài viết phụ. -->
                        <a href="#" class="btn btn-link">Đọc ngay</a>
                        <!-- Nút nhấn "Đọc ngay". -->
                    </div>
                </div>

                <!-- Bài viết phụ 2 -->
                <div class="card mb-3">
                    <img src="assets/images/image3.jpg" class="card-img-top" alt="Tin phụ">
                    <!-- Hình ảnh của bài viết phụ. -->
                    <div class="card-body">
                        <h6 class="card-title">Tiêu đề bài viết phụ</h6>
                        <!-- Tiêu đề bài viết phụ. -->
                        <a href="#" class="btn btn-link">Đọc ngay</a>
                        <!-- Nút nhấn "Đọc ngay". -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Phần Footer -->
    <div style="background-color: blueviolet; padding: 30px 20px; margin-top: 20px; text-align: center; font-family: Arial, sans-serif;">
        <div style="display: flex; justify-content: center; align-items: flex-start; flex-wrap: wrap; max-width: 1200px; margin: 0 auto;">
            
            <!-- Thông tin liên hệ -->
            <div style="flex: 1; padding: 20px; text-align: left;">
                <h3 style="font-size: 18px; font-weight: bold; color: white; margin-bottom: 15px;">Thông Tin Liên Hệ</h3>
                <p style="margin: 10px 0; font-size: 14px; color: white;">Báo tiếng Việt nhiều người xem nhất</p>
                <p style="margin: 10px 0; font-size: 14px; color: white;">Thuộc Bộ Khoa học và Công nghệ</p>
                <p style="margin: 10px 0; font-size: 14px; color: white;">Số giấy phép: 548/GP-BTTTT</p>
                <p style="margin: 10px 0; font-size: 14px; color: white;">Do Bộ Thông tin và Truyền thông cấp ngày 24/08/2021</p>
            </div>

            <!-- Thông tin liên lạc -->
            <div style="flex: 1; padding: 20px; text-align: left; margin-left: 50px;">
                <h3 style="font-size: 18px; font-weight: bold; color: white; margin-bottom: 15px;">Thông Tin Liên Lạc</h3>
                <p style="margin: 10px 0; font-size: 14px; color: white;">Tổng biên tập: Đỗ Phương Quỳnh</p>
                <p style="margin: 10px 0; font-size: 14px; color: white;">Địa chỉ: Tòa A FPT Tower, Dịch Vọng, Cầu Giấy, Hà Nội</p>
                <p style="margin: 10px 0; font-size: 14px; color: white;">Điện thoại: 024 7300 8899</p>
                <p style="margin: 10px 0; font-size: 14px; color: white;">Email: nentangweb@gmail.com</p>
            </div>
            
        </div>
    </div>

    <!-- Script cho Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Thư viện JavaScript hỗ trợ Bootstrap. -->
</body>
</html>

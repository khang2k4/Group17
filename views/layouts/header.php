<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Đặt mã hóa ký tự UTF-8 để hỗ trợ hiển thị ngôn ngữ quốc tế. -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Cài đặt cho trang hiển thị thân thiện trên mọi thiết bị (desktop, mobile). -->

    <title>TH2 Group 17</title>
    <!-- Tiêu đề trang web. -->

    <!-- Thư viện Bootstrap CSS để hỗ trợ thiết kế giao diện nhanh chóng. -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
    <!-- Thư viện Font Awesome để hiển thị các biểu tượng đẹp mắt. -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Thư viện JavaScript hỗ trợ Bootstrap. -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    <style>
        /* Định dạng giao diện tổng thể */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        /* Tùy chỉnh thanh điều hướng (navbar) */
        .navbar {
            background: linear-gradient(45deg, #6e8efb, #a777e3);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Định dạng tên thương hiệu (navbar-brand) */
        .navbar-brand {
            font-weight: bold;
            color: #fff !important;
            font-size: 1.5rem;
            text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* Định dạng liên kết trong navbar */
        .navbar-nav .nav-link {
            color: #ffffff !important;
            font-weight: 600;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        /* Hiệu ứng hover cho liên kết trong navbar */
        .navbar-nav .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        /* Định dạng nút "Tìm kiếm" */
        .btn-primary {
            background: linear-gradient(45deg, #42e695, #3bb2b8);
            border: none;
            color: #fff;
            font-weight: bold;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        /* Hiệu ứng hover cho nút "Tìm kiếm" */
        .btn-primary:hover {
            background: linear-gradient(45deg, #3bb2b8, #42e695);
            transform: scale(1.05);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3);
        }

        /* Định dạng nút "Đăng xuất" */
        .btn-danger {
            background: linear-gradient(45deg, #f85032, #e73827);
            border: none;
            color: #fff;
            font-weight: bold;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        /* Hiệu ứng hover cho nút "Đăng xuất" */
        .btn-danger:hover {
            background: linear-gradient(45deg, #e73827, #f85032);
            transform: scale(1.05);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3);
        }

        /* Định dạng ô nhập trong form tìm kiếm */
        .input-group .form-control {
            border-radius: 5px 0 0 5px;
            border: 2px solid #ddd;
            transition: all 0.3s ease;
            box-shadow: inset 0px 3px 6px rgba(0, 0, 0, 0.1);
        }

        /* Hiệu ứng khi focus vào ô nhập */
        .input-group .form-control:focus {
            border-color: #6e8efb;
            box-shadow: 0px 4px 10px rgba(110, 142, 251, 0.3);
        }

        /* Định dạng nút trong form tìm kiếm */
        .input-group .btn {
            border-radius: 0 5px 5px 0;
        }
    </style>
</head>
<body>
    <!-- Thanh điều hướng (Navbar) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">TLU News</a>
        <!-- Thương hiệu của trang, dẫn đến trang chủ. -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Nút thu gọn navbar trên thiết bị di động. -->

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Danh sách các mục trong navbar -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=home&action=index">Home</a>
                    <!-- Liên kết đến trang chủ. -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=admin&action=dashboard">Admin</a>
                    <!-- Liên kết đến trang quản trị. -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=category&action=index">Categories</a>
                    <!-- Liên kết đến trang danh mục. -->
                </li>
            </ul>
        </div>

        <!-- Form tìm kiếm -->
        <form method="GET" action="header.php" class="d-flex">
            <input type="hidden" name="controller" value="home">
            <input type="hidden" name="action" value="search">
            <!-- Truyền các tham số controller và action qua form GET. -->

            <div class="input-group">
                <input type="text" class="form-control" name="keyword" placeholder="Nhập từ khóa tìm kiếm..." value="<?= $_GET['keyword'] ?? '' ?>">
                <!-- Ô nhập từ khóa tìm kiếm. -->
                <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                <!-- Nút gửi form để thực hiện tìm kiếm. -->
            </div>
        </form>

        <!-- Nút đăng xuất -->
        <a style="margin-left: 10px;" href="index.php?controller=admin&action=logout" class="btn btn-danger">Đăng xuất</a>
        <!-- Liên kết đến chức năng đăng xuất. -->
    </nav>
</body>
</html>

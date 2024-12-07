<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TH2 Nhóm 5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background: linear-gradient(45deg, #6e8efb, #a777e3);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand {
            font-weight: bold;
            color: #fff !important;
            font-size: 1.5rem;
            text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .navbar-nav .nav-link {
            color: #ffffff !important;
            font-weight: 600;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .btn-primary {
            background: linear-gradient(45deg, #42e695, #3bb2b8);
            border: none;
            color: #fff;
            font-weight: bold;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #3bb2b8, #42e695);
            transform: scale(1.05);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3);
        }

        .btn-danger {
            background: linear-gradient(45deg, #f85032, #e73827);
            border: none;
            color: #fff;
            font-weight: bold;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .btn-danger:hover {
            background: linear-gradient(45deg, #e73827, #f85032);
            transform: scale(1.05);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3);
        }

        .input-group .form-control {
            border-radius: 5px 0 0 5px;
            border: 2px solid #ddd;
            transition: all 0.3s ease;
            box-shadow: inset 0px 3px 6px rgba(0, 0, 0, 0.1);
        }

        .input-group .form-control:focus {
            border-color: #6e8efb;
            box-shadow: 0px 4px 10px rgba(110, 142, 251, 0.3);
        }

        .input-group .btn {
            border-radius: 0 5px 5px 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">TLU News</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=home&action=index">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=admin&action=dashboard">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=category&action=index">Categories</a>
                </li>
            </ul>
        </div>

        <form method="GET" action="header.php" class="d-flex">
            <input type="hidden" name="controller" value="home">
            <input type="hidden" name="action" value="search">
            <div class="input-group">
                <input type="text" class="form-control" name="keyword" placeholder="Nhập từ khóa tìm kiếm..." value="<?= $_GET['keyword'] ?? '' ?>">
                <button class="btn btn-primary" type="submit">Tìm kiếm</button>
            </div>
        </form>

        <a style="margin-left: 10px;" href="index.php?controller=admin&action=logout" class="btn btn-danger">Đăng xuất</a>
    </nav>
</body>
</html>

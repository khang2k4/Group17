<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
        }
        .container {
            background: #ffffff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            font-weight: bold;
            margin-bottom: 20px;
            color: #4e54c8;
            text-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
        }
        .form-label {
            font-weight: bold;
            color: #333;
        }
        .form-control {
            background: #f3f4f6;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 10px 15px;
            transition: all 0.3s ease-in-out;
            box-shadow: inset 0px 3px 6px rgba(0, 0, 0, 0.1);
        }
        .form-control:focus {
            outline: none;
            border-color: #6e8efb;
            box-shadow: 0px 3px 8px rgba(110, 142, 251, 0.4);
        }
        .btn-primary {
            background: linear-gradient(45deg, #6e8efb, #a777e3);
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            border-radius: 50px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
        }
        .alert-danger {
            border-radius: 10px;
            box-shadow: 0px 3px 8px rgba(255, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Đăng nhập quản trị viên</h2>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger text-center"><?= $error ?></div>
        <?php endif; ?>
        <form method="POST" action="index.php?controller=admin&action=login">
            <div class="mb-3">
                <label for="username" class="form-label">Tên đăng nhập</label>
                <input type="text" name="username" class="form-control" id="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
        </form>
    </div>
</body>
</html>

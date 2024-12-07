<?php
// Lấy tên controller và action từ URL, mặc định là 'home' và 'index' nếu không có.
$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

// Chuyển đổi tên controller thành dạng PascalCase và thêm hậu tố 'Controller'.
$controllerClass = ucfirst($controller) . 'Controller';

// Import file định nghĩa controller tương ứng.
require_once "controllers/$controllerClass.php";

// Khởi tạo đối tượng controller.
$instance = new $controllerClass();

// Kiểm tra xem action có tồn tại trong controller hay không.
if (method_exists($instance, $action)) {
    // Gọi phương thức (action) trong controller, truyền tham số ID nếu có.
    $instance->$action($_GET['id'] ?? null);
} else {
    // Hiển thị thông báo nếu action không tồn tại.
    echo "Action không tồn tại.";
}
?>

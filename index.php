<?php
<<<<<<< HEAD
$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

$controllerClass = ucfirst($controller) . 'Controller';
require_once "controllers/$controllerClass.php";

$instance = new $controllerClass();
if (method_exists($instance, $action)) {
    $instance->$action($_GET['id'] ?? null);
} else {
    echo "Action không tồn tại.";
}
=======

 require_once 'controllers/AdminController.php';
 require_once 'config/database.php';

 // Sử dụng kết nối từ database.php
 $controller1 = new UserController($pdo);

 // Điều hướng theo hành động
 $action = $_GET['action'] ?? 'login';

 switch ($action) {
     case 'login':
         $controller1->login();
         break;
     case 'dashboard':
         $controller1->dashboard();
         break;
     case 'logout':
         $controller1->logout();
         break;
     default:
         $controller1->login();
 }

?>
>>>>>>> 450eff8f8574696633a6097d5239a2d4056ffe1f

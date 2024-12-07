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
// index.php
require_once './controllers/HomeController.php';

$controller = new HomeController();
$controller->index();
?>
>>>>>>> 875d35e88bdd5dca620c5f9a8fca3f26a551d691

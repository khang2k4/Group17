<?php
require_once 'models/user.php';

class UserController {
    private $userModel;

    public function __construct($pdo) {
        $this->userModel = new User($pdo);
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Kiểm tra thông tin đăng nhập
            $user = $this->userModel->checkLogin($username, $password);

            if ($user) {
                session_start();
                $_SESSION['user'] = $user;
                header("Location: index.php?action=dashboard");
            } else {
                $error = "Sai tên đăng nhập hoặc mật khẩu!";
                include 'views/admin/login.php';
            }
        } else {
            include 'views/home/index.php';
            //include 'views/admin/login.php';
        }
    }

    public function dashboard() {
        session_start();
        if (isset($_SESSION['user'])) {
            include 'views/admin/dashboard.php';
        } else {
            header("Location: index.php");
        }
    }

    public function logout() {
        session_start(); 
        session_destroy(); 
        header("Location: index.php");
    }
}
?>

<?php

 // index.php
 //require_once './controllers/HomeController.php';

 //$controller = new HomeController();
 //$controller->index();
//include 'views/home/index.php';


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

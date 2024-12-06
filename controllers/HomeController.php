<?php
require_once './config/database.php';

class HomeController {
    public function index() {
        global $pdo;

        
        $stmt = $pdo->prepare("SELECT * FROM categories");
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);


        $stmt = $pdo->prepare("SELECT * FROM news");
        $stmt->execute();
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);


        include './views/home/index.php';
    }
}
?>

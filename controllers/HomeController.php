<?php
<<<<<<< HEAD
require_once 'models/News.php';

class HomeController {
    public function index() {
        $news = News::getAll();
        include 'views/news/index.php';
    }

    public function detail() {
        $id = $_GET['id'];
        $newsItem = News::getById($id);
        include 'views/news/detail.php';
    }
    public function search() {
        $keyword = $_GET['keyword'] ?? '';
        $news = News::search($keyword);
        include 'views/news/index.php';
    }
}

=======
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
>>>>>>> 875d35e88bdd5dca620c5f9a8fca3f26a551d691

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
    public $categories = [];
    public $news = [];
    public function index() {
        global $pdo;

        
        $stmt = $pdo->prepare("SELECT * FROM categories");
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);


        $stmt = $pdo->prepare("SELECT * FROM news");
        $stmt->execute();
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}
    $homeController = new HomeController();
    $categories = $homeController->categories;
    $news = $homeController->news;
?>
>>>>>>> 450eff8f8574696633a6097d5239a2d4056ffe1f

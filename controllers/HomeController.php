<?php
//kết nối 
require_once 'models/News.php';

class HomeController {
    //hiển thị
    public function index() {
        $news = News::getAll();//hàm lấy tất cả
        include 'views/news/index.php';
    }
//xem chi tiết
    public function detail() {
        $id = $_GET['id'];//lấy id
        $newsItem = News::getById($id);//hàm lấy id
        include 'views/news/detail.php';
    }
    //tìm kiếm
    public function search() {
        $keyword = $_GET['keyword'] ?? '';//từ khóa
        $news = News::search($keyword);
        include 'views/news/index.php';
    }
}


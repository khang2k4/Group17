<?php
// Nhúng file News.php từ thư mục models, chỉ thực hiện một lần
require_once 'models/News.php';
class NewsController
{
    //newmodel
    private $newsModel;

    public function __construct()
    {
        $this->newsModel = new News();// Khởi tạo đối tượng model News và gán cho thuộc tính $newsModel.
    }

    //Hien thi danh sach tin tuc
    public function index()
    {
        $news = $this->newsModel->getAll();//gọi getall
        require 'views/news/index.php';//hiển thị trang giao diện
    }

    //Hien thi chi tiet tin tuc
    public function detail($id)
    {
        //lấy thông tin chi tiết dựa trên id
        $newsItem = $this->newsModel->getById($id);
        if ($newsItem) {
            //nếu tồn tại hiển thị giao diện chính
            require 'views/news/detail.php';
        } else {
            //nếu k tồn tại hiển thị thông báo
            echo "Tin tức không tồn tại!";
        }
    }
}

<?php
//nhúng file
require_once 'models/Category.php';

class CategoryController {
    public function index() {
        $categories = Category::getAllCategories();// Lấy tất cả các danh mục từ cơ sở dữ liệu thông qua phương thức `getAllCategories` của model `Category`.
        include 'views/admin/category/index.php';// Hiển thị giao diện danh sách các danh mục.
    }
//thêm
    public function add() {
        // Kiểm tra xem phương thức yêu cầu có phải là POST không (chỉ xử lý khi form thêm danh mục được gửi).
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            // Gọi phương thức `add` trong model `Category` để thêm danh mục mới vào cơ sở dữ liệu.
            if (Category::add($name)) {
                header('Location: index.php?controller=category&action=index');
                exit;
            }
        }
        include 'views/admin/category/add.php';
    }
//sửa
    public function edit() {
        $id = $_GET['id']; // Lấy ID của danh mục
        $category = Category::getCategoriesById($id);
        // Kiểm tra xem phương thức yêu cầu có phải là POST không.
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            if (Category::update($id, $name)) {
                header('Location: index.php?controller=category&action=index');
                exit;
            }
        }
        include 'views/admin/category/edit.php';
    }
//xóa
    public function delete() {
        $id = $_GET['id'];// Lấy ID của danh mục 
         // Gọi phương thức `delete` trong model `Category` để xóa danh mục dựa trên ID.
        if (Category::delete($id)) {
            header('Location: index.php?controller=category&action=index');
            exit;
        }
    }
}

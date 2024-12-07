<?php
// Nhúng các mô hình cần thiết cho quản lý tin tức và người dùng
require_once 'models/News.php'; // Nhúng mô hình News để xử lý tin tức
require_once 'models/User.php';  // Nhúng mô hình User để xử lý người dùng

class AdminController {
    // Phương thức xử lý đăng nhập
    public function login(){
        // Kiểm tra xem phương thức yêu cầu có phải là POST không
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            // Lấy tên đăng nhập và mật khẩu từ form
            $username = $_POST['username'];
            $password = $_POST['password'];
            // Xác thực người dùng thông qua mô hình User
            $user = User::authenticate($username, $password);
            // Nếu xác thực thành công
            if($user){
                session_start(); // Bắt đầu phiên làm việc
                $_SESSION['user'] = $user; // Lưu thông tin người dùng vào session
                // Chuyển hướng đến bảng điều khiển admin
                header('Location: index.php?controller=admin&action=dashboard');
                exit; // Kết thúc script để không chạy thêm mã nào khác
            }else{
                // Nếu xác thực thất bại, hiển thị thông báo lỗi
                $error = 'Tên đăng nhập hoặc mật khẩu không đúng!';
            }
        }
        // Hiển thị trang đăng nhập
        include 'views/admin/login.php';
    }

    // Phương thức xử lý đăng xuất
    public function logout(){
        session_start(); // Bắt đầu phiên làm việc
        session_destroy(); // Hủy phiên làm việc
        // Chuyển hướng về trang đăng nhập
        header('Location: index.php?controller=admin&action=login');
    }

    /**
     * Phương thức requireLogin
     * Kiểm tra xem người dùng đã đăng nhập chưa và có phải admin không.
     * Nếu không, chuyển hướng về trang chủ.
     */
    public function requireLogin(){
        session_start(); // Bắt đầu phiên làm việc
        // Kiểm tra xem người dùng đã đăng nhập và có quyền admin (role = 1)
        if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != 1){
            // Nếu không, chuyển hướng về trang tin tức
            header('Location: index.php?controller=news&action=index');
            exit; // Kết thúc script
        }
    }  

    // Phương thức hiển thị bảng điều khiển admin
    public function dashboard() {
        $this->requireLogin(); // Kiểm tra quyền truy cập
        $news = News::getAll(); // Lấy tất cả tin tức từ mô hình News
        // Hiển thị trang bảng điều khiển
        include 'views/admin/dashboard.php';
    }

    // Phương thức thêm tin tức
    public function addNews() {
        $this->requireLogin(); // Kiểm tra quyền truy cập
        // Kiểm tra xem phương thức yêu cầu có phải là POST không
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_POST['image'];
            $category_id = $_POST['category_id'];
            // Thêm tin tức vào cơ sở dữ liệu
            if (News::add($title, $content, $image, $category_id)) {
                echo "<script>alert('Thêm tin tức thành công');</script>"; // Thông báo thành công
                // Chuyển hướng về bảng điều khiển
                header('Location: index.php?controller=admin&action=dashboard');
                exit; // Kết thúc script
            }
        }
        // Hiển thị trang thêm tin tức
        include 'views/admin/news/add.php';
    }

    // Phương thức chỉnh sửa tin tức
    public function editNews() {
        $this->requireLogin(); // Kiểm tra quyền truy cập
        $id = $_GET['id']; // Lấy ID của tin tức từ URL
        $news = News::getById($id); // Lấy thông tin tin tức từ cơ sở dữ liệu
        // Hiển thị trang chỉnh sửa tin tức
        include 'views/admin/news/edit.php';
    }

    // Phương thức cập nhật tin tức
    public function updateNews() {
        $this->requireLogin(); // Kiểm tra quyền truy cập
        // Kiểm tra xem phương thức yêu cầu có phải là POST không
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form
            $id = $_GET['id']; // Lấy ID từ URL
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_POST['image'];
            $category_id = $_POST['category_id'];
            // Cập nhật tin tức trong cơ sở dữ liệu
            if (News::update($id, $title, $content, $image, $category_id)) {
                echo "<script>alert('Sửa tin tức thành công');</script>"; // Thông báo thành công
                // Chuyển hướng về bảng điều khiển
                header('Location: index.php?controller=admin&action=dashboard');
                exit; // Kết thúc script
            }
        }
    }

    /**
     * Phương thức deleteNews
     * 
     * Xóa một tin tức khỏi cơ sở dữ liệu.
     * Dựa vào id lấy từ URL, gọi model News để thực hiện xóa.
     */
    public function deleteNews() {
        $this->requireLogin(); // Kiểm tra quyền truy cập
        $id = $_GET['id']; // Lấy ID của tin tức từ URL
        // Gọi phương thức delete trong mô hình News để xóa tin tức
        if (News::delete($id)) {
            echo "<script>alert('Xóa tin tức thành công');</script>"; // Thông báo thành công
            // Chuyển hướng về bảng điều khiển
            header('Location: index.php?controller=admin&action=dashboard');
            exit; // Kết thúc script
        }
    }
}

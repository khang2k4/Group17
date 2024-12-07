<?php
// Nhúng các mô hình cần thiết cho quản lý tin tức và người dùng
require_once 'models/News.php'; // Nhúng mô hình News để xử lý tin tức
require_once 'models/User.php';  // Nhúng mô hình User để xử lý người dùng

class AdminController {
    // Phương thức xử lý đăng nhập
    public function login(){
    // Kiểm tra xem phương thức yêu cầu có phải là POST không (người dùng đã gửi form đăng nhập).
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // Lấy dữ liệu từ form đăng nhập.
        $username = $_POST['username']; // Lấy tên đăng nhập do người dùng nhập.
        $password = $_POST['password']; // Lấy mật khẩu do người dùng nhập.

        // Xác thực thông tin người dùng thông qua phương thức `authenticate` của lớp `User`.
        $user = User::authenticate($username, $password);

        // Nếu xác thực thành công (hàm `authenticate` trả về thông tin người dùng).
        if($user){
            session_start(); // Khởi tạo phiên làm việc (session) để lưu trữ thông tin đăng nhập.
            $_SESSION['user'] = $user; // Lưu thông tin người dùng vào session để sử dụng trong các trang khác.

            // Chuyển hướng đến bảng điều khiển dành cho admin.
            header('Location: index.php?controller=admin&action=dashboard');
            exit; // Kết thúc script để ngăn việc thực thi các mã sau lệnh chuyển hướng.
        } else {
            // Nếu xác thực thất bại, gán thông báo lỗi vào biến `$error`.
            $error = 'Tên đăng nhập hoặc mật khẩu không đúng!';
        }
    }
    // Hiển thị trang đăng nhập (form đăng nhập) nếu không có POST hoặc xác thực thất bại.
    include 'views/admin/login.php';
}

        // Hiển thị trang đăng nhập
        include 'views/admin/login.php';
    }

    // Phương thức xử lý đăng xuất
   public function logout(){
    session_start(); // Bắt đầu phiên làm việc hiện tại (nếu có).
    session_destroy(); // Hủy toàn bộ phiên làm việc, xóa thông tin người dùng đã lưu trữ.

    // Chuyển hướng về trang đăng nhập để bắt đầu lại.
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

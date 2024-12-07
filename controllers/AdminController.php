<<<<<<< HEAD

<?php
require_once 'models/News.php';
require_once 'models/User.php'; 

class AdminController {
    public function login(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $username = $_POST['username'];
            $password = $_POST['password'];
              // Xác thực người dùng thông qua model User
            $user = User::authenticate($username, $password);
            if($user){
                session_start();
                $_SESSION['user'] = $user;
                header('Location: index.php?controller=admin&action=dashboard');
                exit;  
            }else{
                $error = 'Tên đăng nhập hoặc mật khẩu không đúng!';
            }
        }
        include 'views/admin/login.php';
    }

    public function logout(){
        session_start();
        session_destroy();
        header('Location: index.php?controller=admin&action=login');
    }
    /**
     * Phương thức requireLogin
     * Kiểm tra xem người dùng đã đăng nhập chưa và có phải admin không.
     * Nếu không, chuyển hướng về trang chủ.
     */
    public function requireLogin(){
        session_start();
        if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != 1){
            header('Location: index.php?controller=news&action=index');
            exit;
        }
    }  

    public function dashboard() {
        $this->requireLogin();
        $news = News::getAll();
        include 'views/admin/dashboard.php';
    }

    public function addNews() {
        $this->requireLogin();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_POST['image'];
            $category_id = $_POST['category_id'];
            if (News::add($title, $content, $image, $category_id)) {
                echo "<script>alert('Thêm tin tức thành công');</script>";
                header('Location: index.php?controller=admin&action=dashboard');
                exit;
            }
        }
        include 'views/admin/news/add.php';
    }

    public function editNews() {
        $this->requireLogin();
        $id = $_GET['id'];
        $news = News::getById($id);
        include 'views/admin/news/edit.php';
    }

    public function updateNews() {
        $this->requireLogin();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_GET['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_POST['image'];
            $category_id = $_POST['category_id'];
            if (News::update($id, $title, $content, $image, $category_id)) {
                echo "<script>alert('Sửa tin tức thành công');</script>";
                header('Location: index.php?controller=admin&action=dashboard');
                exit;
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
        $this->requireLogin();
        $id = $_GET['id'];
        if (News::delete($id)) {
            echo "<script>alert('Xóa tin tức thành công');</script>";
            header('Location: index.php?controller=admin&action=dashboard');
            exit;
        }
    }
}
=======
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
>>>>>>> 450eff8f8574696633a6097d5239a2d4056ffe1f

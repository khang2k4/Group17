<?php
require_once 'config/connDB.php';
class User{
    public static function authenticate($username, $password){
        $db = connDB::getConnection();
        $stmt = $db->prepare("SELECT * FROM users WHERE username =? ");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

          // Kiểm tra nếu người dùng tồn tại và mật khẩu khớp
        // So sánh mật khẩu từ cơ sở dữ liệu với mật khẩu đầu vào
        if($user && $password === $user['password']){
            return $user;
        }
        return false;
    }
}
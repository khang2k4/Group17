<?php
//kết nối csdl
class connDB
{
    private static $conn = null;
//hàm kết nối
    public static function getConnection()
    {

        // Kiểm tra xem kết nối đã được khởi tạo chưa
        if (self::$conn === null) {
            try {
                self::$conn = new PDO('mysql:host=localhost;dbname=tlunews', 'root', '', [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
                ]);
            } catch (PDOException $e) {
                // Xử lý lỗi nếu không kết nối được
                die("Connection failed: " . $e->getMessage());
            }
        }
        return self::$conn;
         // Trả về đối tượng kết nối pdo
    }
}


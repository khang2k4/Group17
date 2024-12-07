<?php
//import file chứa kết nối cơ sở dữ liệu
require_once 'config/connDB.php';
class Category {
    //lấy bản ghi từ bảng categories
    public static function getAllCategories() {
        // Lấy kết nối cơ sở dữ liệu
        $db = connDB::getConnection();
        // Thực thi truy vấn SQL để lấy tất cả các bản ghi từ bảng categories
        $stmt = $db->query("SELECT * FROM categories");
        // Trả về kết quả dưới dạng mảng
        return $stmt->fetchAll();
    }
    //lấy thông tin categories theo id
    public static function getCategoriesById($id) {
        $db = connDB::getConnection();
        $stmt = $db->prepare("SELECT * FROM categories WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    //thêm 1 categori mới
    public static function add($name) {
        $db = connDB::getConnection();
        $stmt = $db->prepare("INSERT INTO categories (name) VALUES (?)");
        return $stmt->execute([$name]);
    }
    //cập nhật 1 categori
    public static function update($id, $name) {
        $db = connDB::getConnection();
        $stmt = $db->prepare("UPDATE categories SET name = ? WHERE id = ?");
        return $stmt->execute([$name, $id]);
    }
    //xóa categori
    public static function delete($id) {
        $db = connDB::getConnection();
        $stmt = $db->prepare("DELETE FROM categories WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>

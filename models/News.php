<?php
require_once 'config/connDB.php';
class News
{
    //Lấy tất cả các bản ghi từ bảng news và thông tin danh mục tương ứng
    public static function getAll() {
        $db = connDB::getConnection();
        $stmt = $db->query("SELECT news.*, categories.name
            AS category_name FROM news 
            JOIN categories ON news.category_id = categories.id");
        return $stmt->fetchAll();
    }
    //Lấy một bản ghi từ bảng news dựa trên ID và thông tin danh mục tương ứng
    public static function getById($id) {
        $db = connDB::getConnection();
        $stmt = $db->prepare("SELECT news.*, categories.name
            AS category_name FROM news 
            JOIN categories ON news.category_id = categories.id
            WHERE news.id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    //Thêm một tin tức mới vào bảng news
    public static function add($title, $content, $image, $category_id) {
        $db = connDB::getConnection();
        $stmt = $db->prepare("INSERT INTO news (title, content, image, category_id) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$title, $content, $image, $category_id]);
    }
    //Cập nhật thông tin của một tin tức dựa trên ID
    public static function update($id, $title, $content, $image, $category_id) {
        $db = connDB::getConnection();
        $stmt = $db->prepare("UPDATE news SET title = ?, content = ?, image = ?, category_id = ? WHERE id = ?");
        return $stmt->execute([$title, $content, $image, $category_id, $id]);
    }
    //Xóa một tin tức dựa trên ID
    public static function delete($id) {
        $db = connDB::getConnection();
        $stmt = $db->prepare("DELETE FROM news WHERE id = ?");
        return $stmt->execute([$id]);
    }
    //Tìm kiếm tin tức theo từ khóa trong tiêu đề hoặc nội dung
    public static function search($keyword) {
        $db = connDB::getConnection();
        $stmt = $db->prepare("SELECT news.*, categories.name AS category_name FROM news JOIN categories ON news.category_id = categories.id WHERE news.title LIKE ? OR news.content LIKE ?");
        $keyword = '%' . $keyword . '%';
        $stmt->execute([$keyword, $keyword]);
        return $stmt->fetchAll();
    }
}
?>

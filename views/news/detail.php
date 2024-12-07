<?php require_once 'views/layouts/header.php'; ?>
<!-- Import phần đầu trang (header) chứa menu, liên kết CSS/JS chung -->

<div class="container mt-5">
    <h2><?= $newsItem['title'] ?></h2>
    <!-- Hiển thị tiêu đề bài viết từ mảng `$newsItem` -->

    <p><?= $newsItem['content'] ?></p>
    <!-- Hiển thị nội dung bài viết -->

    <img src="assets/images/<?= $newsItem['image'] ?>" alt="<?= $newsItem['title'] ?>" style="width: 100%; height: auto;">
    <!-- Hiển thị hình ảnh minh họa bài viết, với đường dẫn và mô tả từ `$newsItem` -->

    <p><strong>Danh mục:</strong> <?= $newsItem['category_name'] ?></p>
    <!-- Hiển thị danh mục bài viết -->

    <a href="index.php?controller=home&action=index" class="btn btn-secondary">Quay lại</a>
    <!-- Nút quay lại trang chủ -->
</div>

<?php require_once 'views/layouts/footer.php'; ?>
<!-- Import phần chân trang (footer) -->

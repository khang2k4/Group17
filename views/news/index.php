<?php require_once 'views/layouts/header.php'; ?>
<!-- Import phần đầu trang (header) chứa menu và liên kết tài nguyên chung -->

<div class="container mt-5">
    <h2>Danh sách tin tức</h2>
    <!-- Tiêu đề danh sách tin tức -->

    <div class="row">
        <?php foreach ($news as $item): ?>
        <!-- Lặp qua mảng `$news` để hiển thị từng bài viết -->

            <div class="col-md-4">
                <!-- Mỗi bài viết được hiển thị trong một cột -->
                <div class="card mb-4">
                    <!-- Card Bootstrap để tạo giao diện bài viết -->
                    <img src="assets/images/<?= $item['image'] ?>" class="card-img-top" alt="<?= $item['title'] ?>">
                    <!-- Hiển thị hình ảnh minh họa bài viết -->

                    <div class="card-body">
                        <h5 class="card-title"><?= $item['title'] ?></h5>
                        <!-- Hiển thị tiêu đề bài viết -->

                        <a href="index.php?controller=home&action=detail&id=<?= $item['id'] ?>" class="btn btn-primary">
                            Xem chi tiết
                        </a>
                        <!-- Nút dẫn tới trang chi tiết bài viết với ID cụ thể -->
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- Kết thúc vòng lặp -->
    </div>
</div>

<?php require_once 'views/layouts/footer.php'; ?>
<!-- Import phần chân trang (footer) -->

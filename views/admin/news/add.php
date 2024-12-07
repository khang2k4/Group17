<?php require_once 'views/layouts/header.php'; ?>

<div class="container mt-5">
    <div class="card shadow-sm p-4">
        <h2 class="text-primary text-center mb-4">Thêm tin tức mới</h2>
        <form method="POST" action="index.php?controller=admin&action=addNews" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Tiêu đề</label>
                <input type="text" name="title" class="form-control" id="title" required placeholder="Nhập tiêu đề tin tức">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Nội dung</label>
                <textarea name="content" class="form-control" id="content" rows="5" required placeholder="Nhập nội dung tin tức"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Hình ảnh</label>
                <input type="file" name="image" class="form-control" id="image" accept="image/*" required>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">ID Danh mục</label>
                <input type="text" name="category_id" class="form-control" id="category_id" required placeholder="Nhập ID danh mục">
            </div>
            <button type="submit" class="btn btn-success w-100">Thêm tin tức</button>
        </form>
    </div>
</div>

<?php require_once 'views/layouts/footer.php'; ?>

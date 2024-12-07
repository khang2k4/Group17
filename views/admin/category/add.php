<?php require_once 'views/layouts/header.php'; ?>

<div class="container mt-5">
    <div class="card shadow-sm p-4">
        <h2 class="text-primary text-center mb-4">Thêm danh mục mới</h2>
        <form method="POST" action="index.php?controller=category&action=add">
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Tên danh mục</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nhập tên danh mục" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Thêm danh mục</button>
        </form>
    </div>
</div>

<?php require_once 'views/layouts/footer.php'; ?>

<?php require_once 'views/layouts/header.php'; ?>

<div class="container mt-5">
    <div class="card shadow-sm p-4">
        <h2 class="text-primary text-center mb-4">Sửa danh mục</h2>
        <form method="POST" action="index.php?controller=category&action=edit&id=<?= $category['id'] ?>">
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Tên danh mục</label>
                <input type="text" name="name" class="form-control" id="name" value="<?= htmlspecialchars($category['name']) ?>" required placeholder="Nhập tên danh mục mới">
            </div>
            <button type="submit" class="btn btn-primary w-100">Cập nhật</button>
        </form>
    </div>
</div>

<?php require_once 'views/layouts/footer.php'; ?>

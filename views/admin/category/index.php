<?php require_once 'views/layouts/header.php'; ?>

<div class="container mt-5">
    <div class="card shadow-sm p-4">
        <h2 class="text-primary text-center mb-4">Danh sách danh mục</h2>
        <a href="index.php?controller=category&action=add" class="btn btn-success mb-3">+ Thêm danh mục mới</a>
        <table class="table table-hover table-bordered">
            <thead class="table-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên danh mục</th>
                    <th scope="col" class="text-center">Sửa</th>
                    <th scope="col" class="text-center">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category): ?>
                    <tr>
                        <td><?= $category['id'] ?></td>
                        <td><?= htmlspecialchars($category['name']) ?></td>
                        <td class="text-center">
                            <a href="index.php?controller=category&action=edit&id=<?= $category['id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                        </td>
                        <td class="text-center">
                            <a href="index.php?controller=category&action=delete&id=<?= $category['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once 'views/layouts/footer.php'; ?>

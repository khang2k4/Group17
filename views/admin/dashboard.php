<?php require_once 'views/layouts/header.php'; ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Quản lý tin tức</h2>
    <a href="index.php?controller=admin&action=addNews" class="btn btn-primary mb-3">Thêm tin tức mới</a>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($news as $item): ?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['title'] ?></td>
                    <td>
                        <img src="assets/images/<?= $item['image'] ?>" alt="<?= $item['title'] ?>" class="img-thumbnail" style="width: 100px; height: auto;">
                    </td>
                    <td>
                        <a href="index.php?controller=admin&action=editNews&id=<?= $item['id'] ?>" class="btn btn-warning">Sửa</a>
                    </td>
                    <td>
                        <a href="index.php?controller=admin&action=deleteNews&id=<?= $item['id'] ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once 'views/layouts/footer.php'; ?>

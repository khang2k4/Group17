<?php require_once 'views/layouts/header.php'; ?>
<!-- Nhúng file header.php để thêm các phần đầu của trang như tiêu đề, CSS, JavaScript, v.v. -->

<div class="container mt-5">
    <!-- Tạo một container với khoảng cách (margin-top) 5 để căn lề phía trên -->
    
    <div class="card shadow-sm p-4">
        <!-- Tạo một thẻ div với lớp 'card' để tạo khung với bóng và padding (p-4) -->
        
        <h2 class="text-primary text-center mb-4">Danh sách danh mục</h2>
        <!-- Tiêu đề của trang với màu chữ chính (text-primary), căn giữa (text-center), và khoảng cách dưới (mb-4) -->
        
        <a href="index.php?controller=category&action=add" class="btn btn-success mb-3">+ Thêm danh mục mới</a>
        <!-- Nút liên kết đến trang thêm danh mục mới với kiểu 'btn-success' và khoảng cách dưới (mb-3) -->
        
        <table class="table table-hover table-bordered">
            <!-- Tạo bảng với các lớp 'table', 'table-hover' (hiệu ứng khi di chuột), và 'table-bordered' (biên bảng) -->
            
            <thead class="table-primary">
                <!-- Phần đầu của bảng với lớp 'table-primary' để có màu nền sáng -->
                <tr>
                    <th scope="col">ID</th>
                    <!-- Cột tiêu đề cho ID danh mục -->
                    <th scope="col">Tên danh mục</th>
                    <!-- Cột tiêu đề cho tên danh mục -->
                    <th scope="col" class="text-center">Sửa</th>
                    <!-- Cột tiêu đề cho hành động sửa, căn giữa -->
                    <th scope="col" class="text-center">Xóa</th>
                    <!-- Cột tiêu đề cho hành động xóa, căn giữa -->
                </tr>
            </thead>
            <tbody>
                <!-- Bắt đầu phần thân của bảng -->
                <?php foreach ($categories as $category): ?>
                <!-- Lặp qua mảng $categories để hiển thị từng danh mục -->
                    <tr>
                        <td><?= $category['id'] ?></td>
                        <!-- Hiển thị ID của danh mục -->
                        <td><?= htmlspecialchars($category['name']) ?></td>
                        <!-- Hiển thị tên danh mục, đã được mã hóa bằng htmlspecialchars để ngăn chặn XSS -->
                        <td class="text-center">
                            <a href="index.php?controller=category&action=edit&id=<?= $category['id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                            <!-- Nút sửa danh mục, liên kết đến trang chỉnh sửa với ID danh mục -->
                        </td>
                        <td class="text-center">
                            <a href="index.php?controller=category&action=delete&id=<?= $category['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')">Xóa</a>
                            <!-- Nút xóa danh mục, liên kết đến trang xóa với ID danh mục.
                                 Có hộp thoại xác nhận khi người dùng nhấp vào nút -->
                        </td>
                    </tr>
                <?php endforeach; ?>
                <!-- Kết thúc vòng lặp foreach -->
            </tbody>
        </table>
        <!-- Kết thúc bảng -->
    </div>
</div>

<?php require_once 'views/layouts/footer.php'; ?>
<!-- Nhúng file footer.php để thêm các phần chân trang như thông tin bản quyền, script, v.v. -->

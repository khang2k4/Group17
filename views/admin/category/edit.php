<?php require_once 'views/layouts/header.php'; ?>
<!-- Nhúng file header.php để đưa vào các phần đầu của trang như tiêu đề, CSS, JavaScript, v.v. -->

<div class="container mt-5">
    <!-- Tạo một container với khoảng cách (margin-top) 5 để căn lề phía trên -->
    
    <div class="card shadow-sm p-4">
        <!-- Tạo một thẻ div với lớp 'card' để tạo khung với bóng và padding (p-4) -->
        
        <h2 class="text-primary text-center mb-4">Sửa danh mục</h2>
        <!-- Tiêu đề của trang với màu chữ chính (text-primary), căn giữa (text-center), và khoảng cách dưới (mb-4) -->
        
        <form method="POST" action="index.php?controller=category&action=edit&id=<?= $category['id'] ?>">
            <!-- Tạo một form với phương thức POST và chỉ định hành động khi gửi là chỉnh sửa danh mục.
                 ID của danh mục được truyền qua URL để xác định danh mục cần sửa -->
            
            <div class="mb-3">
                <!-- Div chứa các trường nhập liệu với khoảng cách dưới (mb-3) -->
                
                <label for="name" class="form-label fw-bold">Tên danh mục</label>
                <!-- Nhãn cho trường nhập liệu, liên kết với trường nhập liệu có id là 'name' và có kiểu chữ đậm (fw-bold) -->
                
                <input type="text" name="name" class="form-control" id="name" 
                       value="<?= htmlspecialchars($category['name']) ?>" required placeholder="Nhập tên danh mục mới">
                <!-- Trường nhập liệu kiểu text với tên là 'name', lớp 'form-control' để áp dụng kiểu Bootstrap,
                     ID là 'name', giá trị được lấy từ mảng $category (đã được mã hóa bằng htmlspecialchars để ngăn chặn XSS),
                     yêu cầu nhập dữ liệu (required), và có placeholder hướng dẫn -->
            </div>
            
            <button type="submit" class="btn btn-primary w-100">Cập nhật</button>
            <!-- Nút gửi form với kiểu Bootstrap 'btn-primary' và chiều rộng 100% (w-100) -->
        </form>
    </div>
</div>

<?php require_once 'views/layouts/footer.php'; ?>
<!-- Nhúng file footer.php để đưa vào các phần chân trang như thông tin bản quyền, script, v.v. -->

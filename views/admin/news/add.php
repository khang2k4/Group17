<?php require_once 'views/layouts/header.php'; ?>
<!-- Nhúng file header.php để thêm các phần đầu của trang như tiêu đề, CSS, JavaScript, v.v. -->

<div class="container mt-5">
    <!-- Tạo một container với khoảng cách (margin-top) 5 để căn lề phía trên -->
    
    <div class="card shadow-sm p-4">
        <!-- Tạo một thẻ div với lớp 'card' để tạo khung với bóng và padding (p-4) -->
        
        <h2 class="text-primary text-center mb-4">Thêm tin tức mới</h2>
        <!-- Tiêu đề của trang với màu chữ chính (text-primary), căn giữa (text-center), và khoảng cách dưới (mb-4) -->
        
        <form method="POST" action="index.php?controller=admin&action=addNews" enctype="multipart/form-data">
            <!-- Tạo một form với phương thức POST và chỉ định hành động khi gửi là thêm tin tức.
                 enctype="multipart/form-data" cho phép gửi file hình ảnh -->
            
            <div class="mb-3">
                <!-- Div chứa các trường nhập liệu với khoảng cách dưới (mb-3) -->
                
                <label for="title" class="form-label">Tiêu đề</label>
                <!-- Nhãn cho trường nhập liệu tiêu đề, liên kết với trường nhập liệu có id là 'title' -->
                
                <input type="text" name="title" class="form-control" id="title" required placeholder="Nhập tiêu đề tin tức">
                <!-- Trường nhập liệu kiểu text với tên là 'title', lớp 'form-control' để áp dụng kiểu Bootstrap,
                     ID là 'title', yêu cầu nhập dữ liệu (required), và có placeholder hướng dẫn -->
            </div>
            
            <div class="mb-3">
                <!-- Div chứa các trường nhập liệu với khoảng cách dưới (mb-3) -->
                
                <label for="content" class="form-label">Nội dung</label>
                <!-- Nhãn cho trường nhập liệu nội dung, liên kết với trường nhập liệu có id là 'content' -->
                
                <textarea name="content" class="form-control" id="content" rows="5" required placeholder="Nhập nội dung tin tức"></textarea>
                <!-- Trường nhập liệu kiểu textarea với tên là 'content', lớp 'form-control',
                     ID là 'content', số dòng hiển thị là 5, yêu cầu nhập dữ liệu (required), và có placeholder hướng dẫn -->
            </div>
            
            <div class="mb-3">
                <!-- Div chứa các trường nhập liệu với khoảng cách dưới (mb-3) -->
                
                <label for="image" class="form-label">Hình ảnh</label>
                <!-- Nhãn cho trường nhập liệu hình ảnh, liên kết với trường nhập liệu có id là 'image' -->
                
                <input type="file" name="image" class="form-control" id="image" accept="image/*" required>
                <!-- Trường nhập liệu kiểu file với tên là 'image', lớp 'form-control',
                     ID là 'image', chỉ chấp nhận file hình ảnh (accept="image/*"), yêu cầu nhập dữ liệu (required) -->
            </div>
            
            <div class="mb-3">
                <!-- Div chứa các trường nhập liệu với khoảng cách dưới (mb-3) -->
                
                <label for="category_id" class="form-label">ID Danh mục</label>
                <!-- Nhãn cho trường nhập liệu ID danh mục, liên kết với trường nhập liệu có id là 'category_id' -->
                
                <input type="text" name="category_id" class="form-control" id="category_id" required placeholder="Nhập ID danh mục">
                <!-- Trường nhập liệu kiểu text với tên là 'category_id', lớp 'form-control',
                     ID là 'category_id', yêu cầu nhập dữ liệu (required), và có placeholder hướng dẫn -->
            </div>
            
            <button type="submit" class="btn btn-success w-100">Thêm tin tức</button>
            <!-- Nút gửi form với kiểu Bootstrap 'btn-success' và chiều rộng 100% (w-100) -->
        </form>
    </div>
</div>

<?php require_once 'views/layouts/footer.php'; ?>
<!-- Nhúng file footer.php để thêm các phần chân trang như thông tin bản quyền, script, v.v. -->

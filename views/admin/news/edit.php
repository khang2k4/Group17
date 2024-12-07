<?php require_once 'views/layouts/header.php'; ?> 
// Nhúng tệp header.php vào, đảm bảo chỉ được nhúng một lần để tránh lỗi.

<div class="container mt-5"> 
    // Tạo một div với class "container" và khoảng cách trên (margin-top) 5 để chứa nội dung.

    <h2>Sửa tin tức</h2> 
    // Tiêu đề của trang, hiển thị "Sửa tin tức".

    <form method="POST" action="index.php?controller=admin&action=updateNews&id=<?= $news['id'] ?>"> 
    // Tạo một biểu mẫu với phương thức POST, gửi dữ liệu đến URL chỉ định để cập nhật tin tức, 
    // bao gồm ID của tin tức muốn sửa.

        <div class="mb-3"> 
        // Tạo một div với khoảng cách dưới (margin-bottom) 3 cho trường nhập.

            <label for="title" class="form-label">Tiêu đề</label> 
            // Nhãn cho trường nhập tiêu đề.

            <input type="text" name="title" class="form-control" id="title" value="<?= $news['title'] ?>" required> 
            // Trường nhập cho tiêu đề tin tức, chứa giá trị hiện tại của tiêu đề và yêu cầu nhập.

        </div>

        <div class="mb-3"> 
        // Tạo một div khác cho trường nội dung với khoảng cách dưới.

            <label for="content" class="form-label">Nội dung</label> 
            // Nhãn cho trường nhập nội dung.

            <textarea name="content" class="form-control" id="content" rows="5" required><?= $news['content'] ?></textarea> 
            // Trường nhập nội dung dưới dạng textarea, hiển thị nội dung hiện tại và yêu cầu nhập.

        </div>

        <div class="mb-3"> 
        // Tạo một div cho trường hình ảnh.

            <label for="image" class="form-label">Hình ảnh</label> 
            // Nhãn cho trường nhập hình ảnh.

            <input type="file" name="image" class="form-control" id="image" required> 
            // Trường nhập để người dùng tải lên hình ảnh, yêu cầu nhập.

        </div>

        <div class="mb-3"> 
        // Tạo một div cho trường danh mục.

            <label for="category_id" class="form-label">Danh mục</label> 
            // Nhãn cho trường nhập danh mục.

            <input type="text" name="category_id" class="form-control" id="category_id" value="<?= $news['category_id'] ?>" required> 
            // Trường nhập cho ID danh mục, chứa giá trị hiện tại và yêu cầu nhập.

        </div>

        <button type="submit" class="btn btn-primary">Sửa</button> 
        // Nút để gửi biểu mẫu, có lớp button primary để hiển thị nổi bật.

    </form>
</div>

<?php require_once 'views/layouts/footer.php'; ?> 
// Nhúng tệp footer.php vào, đảm bảo chỉ được nhúng một lần để tránh lỗi.

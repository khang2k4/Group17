<?php require_once 'views/layouts/header.php'; ?> 
// Nhúng tệp header.php vào, đảm bảo chỉ được nhúng một lần để tránh lỗi.

<div class="container mt-5"> 
    // Tạo một div với class "container" và khoảng cách trên (margin-top) 5 để chứa nội dung.

    <h2 class="text-center mb-4">Quản lý tin tức</h2> 
    // Tiêu đề của trang, hiển thị "Quản lý tin tức", căn giữa và có khoảng cách dưới (margin-bottom) 4.

    <a href="index.php?controller=admin&action=addNews" class="btn btn-primary mb-3">Thêm tin tức mới</a> 
    // Nút liên kết để thêm tin tức mới, dẫn đến URL chỉ định và có lớp "btn btn-primary" với khoảng cách dưới (margin-bottom) 3.

    <table class="table table-striped table-hover"> 
    // Tạo một bảng với các lớp để hiển thị kiểu dáng bàn, có sọc và hiệu ứng hover.

        <thead class="table-dark"> 
        // Phần đầu bảng, có nền tối.

            <tr> 
            // Bắt đầu một hàng trong bảng.

                <th scope="col">ID</th> 
                // Cột tiêu đề cho ID của tin tức.

                <th scope="col">Tiêu đề</th> 
                // Cột tiêu đề cho tiêu đề của tin tức.

                <th scope="col">Hình ảnh</th> 
                // Cột tiêu đề cho hình ảnh của tin tức.

                <th scope="col">Sửa</th> 
                // Cột tiêu đề cho hành động sửa tin tức.

                <th scope="col">Xóa</th> 
                // Cột tiêu đề cho hành động xóa tin tức.

            </tr>
        </thead>

        <tbody> 
        // Bắt đầu phần thân bảng, nơi sẽ hiển thị dữ liệu tin tức.

            <?php foreach ($news as $item): ?> 
            // Lặp qua từng phần tử trong mảng $news, với mỗi phần tử là $item.

                <tr> 
                // Bắt đầu một hàng mới trong bảng cho mỗi tin tức.

                    <td><?= $item['id'] ?></td> 
                    // Hiển thị ID của tin tức.

                    <td><?= $item['title'] ?></td> 
                    // Hiển thị tiêu đề của tin tức.

                    <td> 
                        // Bắt đầu cột cho hình ảnh của tin tức.

                        <img src="assets/images/<?= $item['image'] ?>" alt="<?= $item['title'] ?>" class="img-thumbnail" style="width: 100px; height: auto;"> 
                        // Hiển thị hình ảnh của tin tức với đường dẫn đến thư mục chứa hình ảnh, 
                        // có lớp "img-thumbnail" để tạo kiểu dáng và kích thước 100px cho chiều rộng, chiều cao tự động.

                    </td>

                    <td> 
                    // Bắt đầu cột cho nút sửa.

                        <a href="index.php?controller=admin&action=editNews&id=<?= $item['id'] ?>" class="btn btn-warning">Sửa</a> 
                        // Nút liên kết để sửa tin tức, dẫn đến URL chỉ định với ID tin tức, 
                        // có lớp "btn btn-warning" để tạo kiểu dáng nổi bật.

                    </td>

                    <td> 
                    // Bắt đầu cột cho nút xóa.

                        <a href="index.php?controller=admin&action=deleteNews&id=<?= $item['id'] ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a> 
                        // Nút liên kết để xóa tin tức, dẫn đến URL chỉ định với ID tin tức, 
                        // có lớp "btn btn-danger" để tạo kiểu dáng nổi bật. 
                        // Có một hộp thoại xác nhận khi nhấn nút xóa.

                    </td>
                </tr>
            <?php endforeach; ?> 
            // Kết thúc vòng lặp foreach.

        </tbody>
    </table>
</div>

<?php require_once 'views/layouts/footer.php'; ?> 
// Nhúng tệp footer.php vào, đảm bảo chỉ được nhúng một lần để tránh lỗi.

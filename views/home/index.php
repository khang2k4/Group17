<?php include './views/layout/header.php'; ?>

<div style="padding: 30px 20px; background-color: #f9f9f9; font-family: Arial, sans-serif; min-height: 100vh;">
    <h2 style="text-align: center; font-size: 28px; margin-bottom: 30px; color: #333; font-weight: bold;">Danh Sách Tin Tức</h2>

    <div>
        <h3 style="font-size: 22px; font-weight: bold; color: #333;">Danh Mục</h3>
        <ul style="list-style: none; padding: 0;">
            <?php foreach ($categories as $category): ?>
                <li style="font-size: 16px; color: #555;"><?php echo $category['name']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <ul style="list-style: none; padding: 0; margin: 0; max-width: 900px; margin: 0 auto;">
        <?php foreach ($news as $news_item): ?>
        <li style="display: flex; align-items: flex-start; margin-bottom: 20px; padding: 20px; border-radius: 10px; background-color: #fff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.2s, box-shadow 0.2s;">
            <img src="http://localhost/TH2/assets/images/<?php echo $news_item['image']; ?>" alt="Ảnh thumbnail tin tức" style="height: 80px; width: 80px; object-fit: cover; margin-right: 20px; border-radius: 8px; background-color: #ddd; flex-shrink: 0;">
            <div style="flex: 1;">
                <h3 style="font-size: 20px; font-weight: bold; color: #333; margin: 0; line-height: 1.5;"><?php echo $news_item['title']; ?></h3>
                <p style="font-size: 14px; color: #555; margin: 8px 0 16px; line-height: 1.6;"><?php echo substr($news_item['content'], 0, 100); ?>...</p>
            </div>
            <button style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; cursor: pointer; border-radius: 5px; font-size: 14px; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='#007bff'">
                Đọc Thêm
            </button>
        </li>
        <?php endforeach; ?>
    </ul>
</div>

<?php include './views/layout/footer.php'; ?>

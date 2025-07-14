<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <form method="get">
        <input type="hidden" name="action" value="search">
        <input type="text" name="keyword" placeholder="Tìm kiếm sản phẩm...">
        <button type="submit">Tìm kiếm</button>
    </form>
    <a href="?action=add">Thêm sản phẩm</a>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Mô tả</th>
            <th>ID Danh mục</th>
            <th>Hành động</th>
        </tr>
        <?php foreach($list as $sp): ?>
        <tr>
            <td><?= $sp['id'] ?></td>
            <td><?= $sp['ten_sanpham'] ?></td>
            <td><?= $sp['gia'] ?></td>
            <td><?= $sp['mota'] ?></td>
            <td><?= $sp['id_danhmuc'] ?></td>
            <td>
                <a href="?action=edit&id=<?= $sp['id'] ?>">Sửa</a> |
                <a href="?action=delete&id=<?= $sp['id'] ?>" onclick="return confirm('Xác nhận xóa?')">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php if($action == 'add' || ($action == 'edit' && isset($sp))): ?>
        <h2><?= $action == 'add' ? 'Thêm' : 'Sửa' ?> sản phẩm</h2>
        <form method="post">
            <input type="text" name="ten_sanpham" value="<?= $action == 'edit' ? $sp['ten_sanpham'] : '' ?>" required placeholder="Tên sản phẩm">
            <input type="number" name="gia" value="<?= $action == 'edit' ? $sp['gia'] : '' ?>" required placeholder="Giá">
            <input type="text" name="mota" value="<?= $action == 'edit' ? $sp['mota'] : '' ?>" required placeholder="Mô tả">
            <input type="number" name="id_danhmuc" value="<?= $action == 'edit' ? $sp['id_danhmuc'] : '' ?>" required placeholder="ID Danh mục">
            <button type="submit">Lưu</button>
        </form>
    <?php endif; ?>
</body>
</html> 
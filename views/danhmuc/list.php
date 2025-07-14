<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách danh mục</title>
</head>
<body>
    <h1>Danh sách danh mục</h1>
    <a href="?action=add">Thêm danh mục</a>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Tên danh mục</th>
            <th>Hành động</th>
        </tr>
        <?php foreach($list as $dm): ?>
        <tr>
            <td><?= $dm['id'] ?></td>
            <td><?= $dm['ten_danhmuc'] ?></td>
            <td>
                <a href="?action=edit&id=<?= $dm['id'] ?>">Sửa</a> |
                <a href="?action=delete&id=<?= $dm['id'] ?>" onclick="return confirm('Xác nhận xóa?')">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php if($action == 'add' || ($action == 'edit' && isset($dm))): ?>
        <h2><?= $action == 'add' ? 'Thêm' : 'Sửa' ?> danh mục</h2>
        <form method="post">
            <input type="text" name="ten_danhmuc" value="<?= $action == 'edit' ? $dm['ten_danhmuc'] : '' ?>" required>
            <button type="submit">Lưu</button>
        </form>
    <?php endif; ?>
</body>
</html> 
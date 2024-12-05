<?php include_once "view/layouts/header.php"; 


?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Quản lý liên hệ</h2>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ và Tên</th>
                <th>Email</th>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th>Ngày gửi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($contacts)): ?>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($contact['id']); ?></td>
                        <td><?php echo htmlspecialchars($contact['name']); ?></td>
                        <td><?php echo htmlspecialchars($contact['email']); ?></td>
                        <td><?php echo htmlspecialchars($contact['subject']); ?></td>
                        <td><?php echo htmlspecialchars($contact['message']); ?></td>
                        <td><?php echo htmlspecialchars($contact['created_at']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">Không có liên hệ nào</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php include_once "view/layouts/footer.php"; ?>
<style>
    /* Đảm bảo rằng phần nội dung chính có đủ không gian */
#app {
    padding-left: 300px; /* Điều chỉnh khoảng cách để tránh che sidebar */
}

/* Điều chỉnh chiều rộng của sidebar */
#sidebar {
    width: 0px;
}

</style>

<?php
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

// Kiểm tra nếu người dùng đã đăng nhập
if (!isset($_SESSION['user_id'])) {
    die("Bạn cần đăng nhập để thực hiện hành động này. Chỉ xóa tại ");
}

// Kiểm tra nếu có ID người dùng cần xóa
if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    // Kiểm tra quyền xóa
    if ($id != $_SESSION['user_id']) {
        die("Bạn không có quyền xóa tài khoản này.");
    }

    // Thực hiện xóa người dùng
    $userModel->deleteUserById($id); // Xóa người dùng đã tồn tại

    // Chuyển hướng đến danh sách người dùng
    header('Location: list_users.php');
    exit(); // Đảm bảo không có mã nào khác được thực thi sau khi chuyển hướng
} else {
    die("ID người dùng không hợp lệ.");
}
?>

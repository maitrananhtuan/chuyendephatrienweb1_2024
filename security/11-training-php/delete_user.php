<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;

function decodeId($encodedId) {
    return base64_decode($encodedId);
}

if (!empty($_GET['id'])) {
    $encodedId = $_GET['id']; // Nhận ID đã mã hóa từ URL
    $id = decodeId($encodedId); // Giải mã ID

    // Kiểm tra nếu ID hợp lệ (không rỗng và là số)
    if (!empty($id) && is_numeric($id)) {
        // Xóa người dùng bằng ID đã giải mã
        $userModel->deleteUserById($id);
    } else {
        // Nếu ID không hợp lệ, hiển thị thông báo lỗi
        header('location: list_users.php');
        exit;
    }
} else {
    // Nếu ID không tồn tại trong URL, hiển thị thông báo lỗi
    echo "ID is missing!";
    exit;
}
header('location: list_users.php');
?>
<?php
// Thông tin kết nối đến cơ sở dữ liệu MySQL
$host = 'localhost'; // Địa chỉ máy chủ MySQL
$dbname = 'student'; // Tên cơ sở dữ liệu
$username = 'root'; // Tên người dùng MySQL
$password = ''; // Mật khẩu

try {
    if (class_exists('PDO')) {
        // Chuỗi kết nối
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
        // Thiết lập chế độ lỗi và ngoại lệ
        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
            // Khởi tạo kết nối PDO
        $conn = new PDO($dsn, $username, $password, $options);
        if($conn) echo 'connection successful';
    } else {
        echo "Class PDO không tồn tại!";
    }
} catch (PDOException $e) {
    // Xử lý ngoại lệ nếu có
    echo "Lỗi kết nối: " . $e->getMessage();
    die(); // Thoát khỏi chương trình
}
?>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_FILES['upload'])) {
    print_r($_FILES); // In ra thông tin về tệp được tải lên

    $upload_dir = '/Applications/XAMPP/xamppfiles/htdocs/mac/upload_files/uploads/';
    // nối files
    $upload_file = $upload_dir . basename($_FILES['upload']['name']);
    // Kiểm tra xem tệp đã tồn tại chưa
    if (file_exists($upload_file)) {
        echo "Tệp đã tồn tại.";
    } else {
        // Di chuyển tệp tải lên vào thư mục đích
        if (move_uploaded_file($_FILES['upload']['tmp_name'], $upload_file)) {
            echo "Tệp đã được tải lên thành công.";
        } else {        var_dump(move_uploaded_file($_FILES['upload']['tmp_name'], $upload_file));
            echo "Đã xảy ra lỗi khi tải lên tệp.";
        }
    }
} else {
    echo "Vui lòng chọn tệp để tải lên.";
}
?>

<?php
    require_once 'pdo.php';

    $sql = 'INSERT INTO hocsinh(fullname, age) VALUES(?, ?)';

try {
    $stmt = $conn ->prepare($sql);
    $fullname = 'quang2';
    $age = 19;

    $stmt -> execute([$fullname, $age]);

    echo "Dữ liệu đã được thêm vào bảng thành công!";
}catch(Exception $e) {
    echo 'Error: '.$e -> getMessage().'<br>';
    echo 'File: '.$e -> getFile().'<br>';
    echo 'Line: '.$e -> getLine();
}
?>

<?php
    require_once 'pdo.php';
    $sql = "UPDATE hocsinh SET fullname = ?, age = ? WHERE id = ?";

    try {
        $stmt = $conn ->prepare($sql);
        $fullname = 'quang1';
        $age = 22;
        $id = 2;
    
        $stmt -> execute([$fullname, $age, $id]);
    
        echo "Dữ liệu đã được update vào bảng thành công!";
    }catch(Exception $e) {
        echo 'Error: '.$e -> getMessage().'<br>';
        echo 'File: '.$e -> getFile().'<br>';
        echo 'Line: '.$e -> getLine();
    }
?>
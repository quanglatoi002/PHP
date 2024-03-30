<?php
    require_once 'pdo.php';
    $sql = "DELETE FROM hocsinh WHERE id = ?";

    try {
        $stmt = $conn ->prepare($sql);
        $id = 2;
    
        $stmt -> execute([$id]);
    
        echo "Dữ liệu đã được xóa thành công!";
    }catch(Exception $e) {
        echo 'Error: '.$e -> getMessage().'<br>';
        echo 'File: '.$e -> getFile().'<br>';
        echo 'Line: '.$e -> getLine();
    }
?>
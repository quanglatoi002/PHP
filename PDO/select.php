<?php
    require_once 'pdo.php';
    $sql = "SELECT * FROM hocsinh";

    try {
        $stmt = $conn ->prepare($sql);
        // thực thi truy vấn
        $stmt -> execute();
        
        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
         // Duyệt qua từng bản ghi và hiển thị thông tin
    foreach ($result as $row) {
        echo "ID: " . $row['id'] . ", Tên: " . $row['fullname'] . "age: " . $row['age'] . "<br/>";
    }
    }catch(Exception $e) {
        echo 'Error: '.$e -> getMessage().'<br>';
        echo 'File: '.$e -> getFile().'<br>';
        echo 'Line: '.$e -> getLine();
    }
?>
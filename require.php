<?php

// ---------- nếu sau khi import mà bị lỗi thì bên dưới vẫn chạy thì sử dụng include
// include ('function.php');
include_once ('string_practice.php');

// ---------- nếu sau khi import mà bị lỗi thì bên dưới ko chạy được thì sử dụng require

// require ('function.php');
// require_once ('function.php');
echo 'quang';
$strName = '  Phạm Ngọc Hưng';
if(function_exists('removeFirstName')) {
    $result = removeFirstName($strName);
echo $result; // Kết quả: Ngoc Hung
}
// $result = removeFirstName($strName);
// echo $result; // Kết quả: Ngoc Hung
?>

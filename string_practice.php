<?php
    //bài 1 Viết ctrinh lấy 5 ký tự cuối chuỗi

    $str = 'Hoc lap trinh';
    $endStr = substr($str, -5);
    echo '5 ký tự cuối của chuỗi là: ' .$endStr;

    $str2 = 'Học lập trình';
    $endStr2 = mb_substr($str2, -5, null, 'UTF-8');
    echo '5 ký tự cuối của chuỗi là: ' .$endStr2;

    //b2 xóa chữ đầu tiên tron chuỗi
    $strName = '  Phạm Ngọc Hưng';
    function removeFirstName($str) {
        return trim(str_replace('Phạm', '', $str));
    }
    // if(!function_exists('removeFirstName')) {
    //     function removeFirstName($str) {
    //         echo 'Tạo mới';
    //         return trim(str_replace('Phạm', '', $str));
    //     }
    // }
//     $result = removeFirstName($strName);
// echo $result; // Kết quả: Ngoc Hung

?>

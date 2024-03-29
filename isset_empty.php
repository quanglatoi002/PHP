<?php
// Bật báo cáo lỗi cho tất cả các loại lỗi
error_reporting(E_ALL);

// Bật hiển thị thông báo lỗi trực tiếp trên trang web
ini_set('display_errors', 1);

// isset kiểm tra biến có tồn tại hay ko?
    // $bien = "quang";
    // if(isset($bien)){
    //     echo $bien;
    // }

// empty kiểm tra biến có tồn tại và kiểu dữ liệu.

// $arr2 = ['1', '2', '3', 'quang', 't'];
// if(!empty($arr2)) {
//     foreach($arr2 as $key => $item){
//         echo $item;
//     }
// }

// unset($arr2[3]);
// print_r($arr2) ;

// mảng đa chiều
$multiArray = array(
    [
        'soMot',
        'soHai',
        'soBa',
    ],
    'JS',
    'PHP'
);

if(!empty($multiArray) && is_array($multiArray)) {
    for($i = 0; $i < count($multiArray); $i++) {
        if(is_array($multiArray[$i]) && !empty($multiArray[$i])) {
            for($j = 0; $j < count($multiArray[$i]);$j++)          {    
                    printf($multiArray[$i][$j].'<br>');
                }
        }
        else printf($multiArray[$i].'<br>');
    }
}
?>
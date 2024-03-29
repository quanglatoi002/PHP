<?php
    $arr2 = [
        'address1' => 'HTML',
        'address2' => 'JS',
        'address3' => 'PHP',
        'address4' => 'C++',
    ];
    // array_value trả về 1 mảng tuần tự
    $arrayNew = array_values($arr2);
    // print_r($arrayNew);
    // chuyển key thành value của 1 mảng mới với dạng tuần tự với value là key được truyền vào
    $arrayKeyNew = array_keys($arr2);
    // print_r($arrayKeyNew);
    // xóa và trả về phần tử cuối cùng
    $arrayPop = array_pop($arr2);
    // echo $arrayPop;

    print_r($_GET) 
    // print_r($arr2);
    
?>
<?php
// Tạo class
class mySQL {
    static function sum($a, $b) {
        $tong = $a + $b;
        return $tong;
    }
    function show() {
        echo 'class';
    } 
}

$result = mySQL::sum(4,3);
echo $result;

$bien1 = new mySQL;
$bien1 ->show();
echo $bien1;
try {
    $result();
}catch(Exception $e) {
    echo 'Đã xảy rả lỗi: '. $e->getMessage();
}
?>





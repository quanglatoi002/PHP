<?php
    echo 'We talk about variables';
    $name =  ' Hoang'; // string
    $age = 18; // integer
    echo $name;
    $has_mercedes = false;
    var_dump($has_mercedes);
    echo '<br>';
    echo "$name is $age years old";
    // expression
    echo 5 + 5; // kq = 10
    echo '1' + '2'; //kq = 3
    $sum = '2' + '3';
    var_dump($sum);
    //constants
    define('SERVER_NAME', 'quang');
    echo SERVER_NAME
?>
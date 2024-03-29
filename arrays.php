<?php
    echo 'Array';
    $some_number = [1, 3, 4, 6];
    $fruits = ['pp', 'melon', 'apple'];
    echo $some_number;
    var_dump($some_number);
    echo $fruits[0];
    // associative array
    $colors = [
        3 => 'red', // key - value
        5 => 'green',
        7 => 'blue',
    ];
    echo '<br>';
    echo $colors[7];
    // echo $hex_color['green']
    $student = [
        ['full_name' => 'P',
        'age' => 18],
        ['full_name' => 'PV',
        'age' => 19],
        ['full_name' => 'PVQ',
        'age' => 20],
    ];
    print_r ($student[1]["full_name"]);
    echo ($student[1]["full_name"]);
    var_dump (json_encode($student));

?>
<?php
    $y = 22;
    function sayHello($name) {
        global $y;
        echo "y = $y";
        $x = 123;
        echo "Hello $name";
    }
    sayHello('quang');

    $names = ['join', 'anna', 'hoang', 'av'];
    echo count($names);
    // search inside array
    var_dump(in_array('anna', $names));
    // insert an item
    array_push($names, 'quang');
    // insert to the begin of the array
    array_unshift($names, 'satoshi');
    // delete from the end of the array
    array_pop($names);
    print_r($names);
    $chunked_array = array_chunk($names, 3);
    print_r($chunked_array);

    $array_one = [1, 2, 3];
    $array_two = [4, 5, 6];
    $merged_array = array_merge($array_one, $array_two);
    print_r ($merged_array);

    $numbers = range(0, 9);
    $squared_numbers = array_map(function($each_number) { 
        return $each_number * $each_number;
    }, $numbers);
    print_r($squared_numbers);
    //filter
    $filtered_numbers = array_filter($numbers, fn($each_number) => $each_number !==0 && $each_number % 2 == 0);
    print_r($filtered_numbers);
?>
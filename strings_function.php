<?php
    $full_name = 'P VQ';
    echo "length:: ", strlen($full_name);
    echo strrev($full_name);
    echo strtolower($full_name);
    echo strtoupper($full_name);
    echo str_replace(' ', '', $full_name);
    if(str_starts_with($full_name, 'P')) {
        echo "Có";
    }
    echo "<h1>hello </h1>";
    echo htmlspecialchars("<h1>hello </h1>");
    printf('<br> %s likes %s', 'Quang', 'G60')
?>
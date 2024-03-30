<?php
    session_start();
    $_SESSION['userName'] = 'nguoisd';
    $_SESSION['user'] = 'quang';
    
    // unset($_SESSION['user']);
    session_destroy();
    print_r($_SESSION['userName']);
    print_r($_SESSION['user']);
?>
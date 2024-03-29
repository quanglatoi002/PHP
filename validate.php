<?php
    
    if(!empty($_POST)) {
        $errors = [];
        // print_r($_POST);
        //fullName
        if(empty($_POST['fullName'])) {
            $errors['fullName']['required'] = 'Bắt buộc phải nhập họ tên'; 
        }
        else {
            if(strlen($_POST['fullName']) < 5) {
                $errors['fullName']['min_length'] = 'Họ tên phải lớn hơn 5 ký tự'; 
            }
        }
        //email
        if(empty($_POST['email'])) {
            $errors['email']['required'] = 'Bắt buộc phải điền email'; 
        }
        else {
            if(!filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) {
                $errors['email']['invalid'] = 'Email không đúng định dạng'; 
            }
        }
    }

    if (empty($errors)) {
        echo "<pre>";
        echo 'Validation succeeded';
        echo "</pre>";
    }else {
        print_r($errors);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="fullName">Họ tên: </label>
        <input type="text" name="fullName" id="fullName">
        <?php echo !empty($errors['fullName']['require']) ? $errors['fullName']['require'] : ''  ?>
        <label for="email">email: </label>
        <input type="email" name="email" id="email">
        <?php echo !empty($errors['email']['required']) ? $errors['email']['required'] : ''  ?>
        <input type="submit" value="submit">
    </form>
    
</body>
</html>
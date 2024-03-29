<?php
    echo 'Superglobals';
    // print_r($_SERVER);
    
    // if(isset($_GET['name'])) {
    //     echo $_GET['name'];
    // }else {
    //     echo 'ngu the';

    // }
    $email = htmlspecialchars($_POST['email']) ?? 'ngu the';
    $password = htmlspecialchars($_POST['password']) ?? 'ngu the';
    echo $email;
    echo $password;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form 
    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>"
    method=POST>
        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
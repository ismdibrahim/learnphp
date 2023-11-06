<?php 
$cookie_name = "user";
$cookie_value = "Ibrahim Hossen";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/'); // 86400 to 1 day
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <?php 
        if(!isset($_COOKIE[$cookie_name])){
            echo "Cookie name ". $cookie_name . " is not set! \n";
        }else{
            echo "Cookie name ". $cookie_name . " is set. \n";
            echo "Cookie value is ". $cookie_value;
        }
    ?>
</body>
</html>
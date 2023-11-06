<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- echo session  -->
    <?php 
        echo "Favorite color is ". $_SESSION['favcolor'] . "<br>";
        echo "Favorite animal is ". $_SESSION['favanimal'] . "<br>"; 

        // session_unset();
        // session_destroy();

        // $_SESSION["favcolor"] = "yellow";
        print_r($_SESSION);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $str = "<h1>Hello World!</h1>";
        // $newstr = filter_var($str, FILTER_SANITIZE_STRING);
        // echo $newstr;

        $int = 100;

        if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
          echo("Integer is valid");
        } else {
          echo("Integer is not valid");
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $int = 122;
        $min = 1;
        $max = 200;
        if(filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false){
            echo "Variable value is not within the legal range";
        }else{
            echo "Variable value is within the legal range";
        }
    ?>
</body>
</html>
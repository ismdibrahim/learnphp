<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms validation and required</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <?php 
        $nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";
        $name = $email = $gender = $comment = $website = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["name"])){
                $nameErr = "Name is required!";
            }else{
                $name = test_input($_POST["name"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                    $nameErr = "Only letters and white space allowed";
                }
            }

            if(empty($_POST["email"])){
                $emailErr = "Email is required!";
            }else{
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            if(empty($_POST["website"])){
                $websiteErr = "Website is required!";
            }else{
                $website = test_input($_POST["website"]);
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                    $websiteErr = "Invalid URL";
                }
            }

            if(empty($_POST["comment"])){
                $commentErr = "Comment is required!";
            }else{
                $comment = test_input($_POST["comment"]);
            }

            if(empty($_POST["gender"])){
                $genderErr = "Gender is required!";
            }else{
                $gender = test_input($_POST["gender"]);
            }
        }

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <h2>PHP Validation and Required</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Name</label>
        <input type="text" name="name" value="<?php echo $name; ?>"> 
        <span class="error"><?php echo $nameErr; ?></span> <br><br>

        <label for="email">Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span> <br><br>

        <label for="website">Website</label>
        <input type="text" name="website" value="<?php echo $website; ?>">
        <span class="error"><?php echo $websiteErr; ?></span> <br><br>

        <label for="comment">Comment</label>
        <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
        <span class="error"><?php echo $commentErr; ?></span> <br><br>

        <label for="gender">Gender</label>
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
        <span class="error"><?php echo $genderErr; ?></span> <br><br>

        <input type="submit" name="submit" value="Submit">  
    </form>

    <?php 
        echo "<h2>Your Input:</h2>";
        if(!$nameErr){
            echo $name . "<br>";
        }
        if(!$emailErr){
            echo $email. "<br>";
        }
        if(!$websiteErr){
            echo $website. "<br>";
        }
        if(!$commentErr){
            echo $comment. "<br>";
        }
        if(!$genderErr){
            echo $gender. "<br>";
        }
    ?>
</body>
</html>
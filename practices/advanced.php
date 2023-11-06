<?php 

/**
 * Date
 */

// $d=strtotime("tomorrow");
// echo date("Y-m-d h:i:sa", $d) . "\n";

// $d=strtotime("next Saturday");
// echo date("Y-m-d h:i:sa", $d) . "\n";

// $d=strtotime("+3 Months");
// echo date("Y-m-d h:i:sa", $d) . "\n";

// $startdate=strtotime("Saturday");
// $enddate=strtotime("+6 weeks", $startdate);

// while ($startdate < $enddate) {
//   echo date("M d", $startdate) . "\n";
//   $startdate = strtotime("+1 week", $startdate);
// }

// $d1=strtotime("December 04");
// $d2=ceil(($d1-time())/60/60/24);
// echo "There are " . $d2 ." days until 4th of December.";

// $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// echo fread($myfile,filesize("webdictionary.txt"));
// fclose($myfile);

// $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
// $txt = "John Doe\n";
// fwrite($myfile, $txt);
// $txt = "Ibrahim Hossen\n";
// fwrite($myfile, $txt);
// fclose($myfile);

// $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
// var_dump(json_decode($jsonobj));

// $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// $obj = json_decode($jsonobj);

// echo $obj->Peter;
// echo $obj->Ben;
// echo $obj->Joe;

// function divide($divided, $divisor){
//     if($divisor == 0){
//         throw new Exception("Division by zero");
//     }else{
//         return $divided / $divisor;
//     }
// }
// echo divide(5, 0);

// function divide($dividend, $divisor) {
//     if($divisor == 0) {
//       throw new Exception("Division by zero", 1);
//     }
//     return $dividend / $divisor;
//   }
  
//   try {
//     echo divide(5, 0);
//   } catch(Exception $ex) {
//     $code = $ex->getCode();
//     $message = $ex->getMessage();
//     $file = $ex->getFile();
//     $line = $ex->getLine();
//     echo "Exception thrown in $file on line $line: [Code $code]
//     $message";
//   }
$servername = "localhost";
$username = "username";
$password = "password";

// $conn = new mysqli($servername, $username, $password);
// if($conn->connect_errno){
//     die("Connection failed: " . $conn->connect_errno);
// }

// $sql = "CREATE DATABASE myDB";
// if($conn->query($sql) === true){
//     echo "Database created successfully.";
// }else{
//     echo "Error creating database." . $conn->error;
// }
// $conn->close();
// if(mysqli_query($conn, $sql)){
//     echo "Database created successfully.";
// }else{
//     echo "Error creating database." . mysqli_errno();
// }
// mysqli_close($conn);

// try{
//     $conn = new PDO("mysql:host=$servername", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $sql = $sql = "CREATE DATABASE myDB";
//     $conn->exec($sql);
//     echo "Database created successfully<br>";
// }catch(PDOException $e){
//     echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;

// CREATE TABLE MyQuest(
//     id int(6) UBSIGNED AUTO_INCREMENT PRIMARY_KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(30),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTARP ON UPDATE CURRENT_TIMESTAMP
// )

libxml_use_internal_errors(false);
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<document>
  <user>John Doe</wronguser>
  <email>john@example.com</wrongemail>
</document>";

$xml = simplexml_load_string($myXMLData);
if ($xml === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
} else {
    print_r($xml);
}
?>

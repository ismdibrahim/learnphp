<?php 
    /**
     * Global Scope
    */
    // $x = 5;
    // function myTest(){
    //     // echo "Varial x inside function: $x";
    // }
    // myTest();

    // echo "Variable x outside function: $x";

    /**
     * Local Scope
    */
    // function myTest(){
    //     $x = 5;
    //     echo "Varial x inside function: $x";
    // }
    // myTest();

    // echo "Variable x outside function: $x";

    /**
     * Global keyword
    */
    // $x = 5;
    // $y = 10;
    // function myTest(){
    //     global $x, $y;
    //     $y = $x + $y;
    // }
    // myTest();
    // echo $y;


    /**
     * $GLOBALS
    */
    // $x = 5;
    // $y = 10;
    // function myTest(){
    //     $GLOBALS['y'] = $GLOBALS['x']+ $GLOBALS['y'];
    // }
    // myTest();
    // echo $y;

    /**
     * Static keyword
    */
    // function myTest(){
    //     static $x = 0;
    //     echo $x . "\n";
    //     $x++;
    // }
    // myTest();
    // myTest();
    // myTest();


    /**
     * echo statement
    */

    // $text = "PHP";
    // echo "Learn $text \n";

    // $x = 10;
    // $y = 5;
    // echo $x +$y;


    /**
     * Print statement
    */

    // $text = "PHP";
    // print "Learn $text \n";

    // $x = 10;
    // $y = 5;
    // print $x +$y;

    /**
     * String
    */
    // $x = "Hello World!";
    // echo strlen($x);

    // $x = "Hello World!";
    // echo str_word_count($x);

    // $x = "Hello World!";
    // echo str_replace("World", "Ibrahim", $x);

    /**
     * Integer & Flot
    */

    // $x = 5985;
    // // var_dump($x);
    // var_dump(is_int($x));

    // $x = 10.365;
    // var_dump($x);


    /**
     * Array
    */

    // $cars = array("Volvo","BMW","Toyota");
    // var_dump($cars);


    /**
     * Object
    */
    // class Car{
    //     public $color;
    //     public $model;
    //     public function __construct($color, $model)
    //     {
    //         $this->color = $color;
    //         $this->model = $model;
    //     }
    //     public function msg(){
    //         return "My car is a ". $this->color . " ". $this->model . "!";
    //     }
    // }
    // $mycar = new Car("Black", "Volvo");
    // echo $mycar->msg();

    /**
     * NULL
    */

    // $x = "Hello world!";
    // $x = null;
    // var_dump($x);

    /**
     * Math
    */
    
    // echo pi();
    // $value = array(0, 150, 30, 20, -8, -200);
    // echo min($value);
    // echo max($value);

    // echo(abs(-6.7));

    // echo(round(0.60));  // returns 1
    // echo(round(0.49));  // returns 0

    // echo(sqrt(64));  // returns 8

    // echo rand();

    /**
     * Constacts
    */
    // define("GETTINGS", "Hello World!");
    // echo GETTINGS;

    // const MYCAR = "Volvo";
    // echo MYCAR;

    // define("CARS", ['BMW', "Volvo", "Toyota"]);
    // echo CARS[0];

    // echo __LINE__;

    // namespace myArea;
    // function myValue(){
    // return __NAMESPACE__;
    // }
    // echo myValue()

    // namespace myArea;
    // class Fruits {
    // public function myValue(){
    //     return Fruits::class;
    // }
    // }
    // $kiwi = new Fruits();
    // echo $kiwi->myValue();
    
    /**
     * Operators
    */

    // echo $status = empty($user) ? "anonymous" : "logged in";
    // $user = "Ibrahim";
    // echo $status = empty($user) ? "anonymous" : "logged in";

    // echo $user = $_GET['user'] ?? "anonymous";
    // echo $color = $color ?? "red";

    /**
     * Conditional statements
    */

    // $data = 21;
    // if($data <= 10){
    //     echo "The data is 10";
    // }elseif($data <= 20){
    //     echo "The data is 20";
    // }else{
    //     echo "I don't know.";
    // }

    // $color = "red";
    // switch($color){
    //     case "red":
    //         echo "Color is red";
    //         break;
    //     case "blue":
    //         echo "Color is blue";
    //         break;
    //     case "green":
    //         echo "Color is green";
    //         break;
    //     default:
    //         echo "I don't know";

    // }

    /**
     * Loops
    */
    // $x = 1;
    // while($x <= 5) {
    //     echo "The number is: $x \n";
    //     $x++;
    // }

    // $x = 1;
    // do {
    //     echo "The number is: $x \n";
    //     $x++;
    // } while ($x <= 5);

    // for ($x = 0; $x <= 5; $x++) {
    //     echo "The number is: $x \n";
    // }

    // $colors = array("red", "green", "blue", "yellow");
    // foreach($colors as $color){
    //     echo $color . "\n";
    // }

    // $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    // foreach($age as $key => $value){
    //     echo "$key = $value \n";
    // }

    /**
     * Functions
    */

    // declare(strict_types=1);
    // function sum(int $x, int $y){
    //     $z = $x + $y;
    //     return $z;
    // }
    // echo sum(5,5);

    // declare(strict_types=1); // strict requirement
    // function addNumbers(float $a, float $b) : float {
    // return $a + $b;
    // }
    // echo addNumbers(1.2, 5.2); // 6.4

    // declare(strict_types=1); // strict requirement
    // function addNumbers(float $a, float $b) : int {
    // return (int)($a + $b);
    // }
    // echo addNumbers(1.2, 5.2);

    // function add(&$value){
    //     $value += 5;
    // }
    // $num = 3;
    // add($num);
    // echo $num;
    
    /**
     * Array
    */
    // $cars = array("Volvo", "BMW", "Toyota");
    // $arrlength = count($cars);
    // for ($i=0; $i <$arrlength ; $i++) { 
    //     echo $cars[$i] . "\n";
    // }

    // $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    // foreach($age as $key => $value){
    //     echo $key . " age is " . $value . "\n";
    // }

    // $cars = array(
    //     array("volvo", 22, 90),
    //     array("BMW", 12, 30)
    // );
    // echo $cars[0][0]. ": In stock ". $cars[0][1]. " sold ". $cars[0][2] . "\n";
    // echo $cars[1][0]. ": In stock ". $cars[1][1]. " sold ". $cars[1][2];

    // $cars = array(
    //     array("volvo", 22, 90),
    //     array("BMW", 12, 30)
    // );
    // for($row=0; $row<2; $row++){
    //     echo "Row Number $row \n";
    //     for($col=0;$col<=2; $col++){
    //         echo $cars[$row][$col]. "\n";
    //     }
    // }

    // $cars = array("Volvo", "BMW", "Toyota");
    // sort($cars);
    // $arrlength = count($cars);
    // for($i=0;$i<$arrlength;$i++){
    //     echo $cars[$i]. "\n";
    // }

    /**
     * Superglobals variable
    */

    // $x = 75; 
    // $y = 25;
    // function addition(){
    //     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    // }
    // addition();
    // echo $z;

    // echo $_SERVER['SERVER_NAME'];
    ?>
    <!-- <form method="post" action="<?php // echo $_SERVER["PHP_SELF"] ?>">
        Name: 
        <input type="text" name="fname">
        <input type="submit">
    </form> -->
    <?php
    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    //     $name = htmlspecialchars($_REQUEST['fname']);
    //     if(empty($name)){
    //         echo "Name is empty.";
    //     }else{
    //         echo $name;
    //     }
    // }
?>
    <a href="?subject=PHP&web=mdibrahim.net">Get</a>
<?php
    echo "Study " . $_GET['subject'] . " at " . $_GET['web'];

    /**
     * NULL
    */


    /**
     * NULL
    */
    
    /**
     * NULL
    */


    /**
     * NULL
    */
?>
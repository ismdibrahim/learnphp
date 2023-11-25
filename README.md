# Table of content

- [What's PHP?](#php)
- [Syntax](#syntax)
- [variable](#variables-scope)
  - [Variables Scope](#variables-scope)
- [Data Types](#data-types)
  - [Integer](#integer)
  - [Float](#float)
  - [Boolean](#boolean)
  - [Array](#array)
  - [Object](#object) 
  - [NULL](#null)
- [PHP Math](#php-math)
- [Constants](#constants)
- [Operators](#pperators)
  - [Arithmetic Operators](#arithmetic-operators)
  - [Assignment Operators](#assignment-operators)
  - [Comparison Operators](#comparison-operators)
  - [Increment / Decrement Operators](#increment-decrement-operators)
  - [Logical Operators](#logical-operators) 
  - [String Operators](#string-operators)
  - [Array Operators](#array-operators)
  - [Conditional Assignment Operators](#conditional-assignment-operators)
- [Conditional Statements](#conditional-statements)
  - [if Statement](#if-statement)
  - [if...else Statement](#ifelse-statement)
  - [if...elseif...else Statement](#ifelseifelse-statement)
  - [switch Statement](#switch-statement)
- [Loops](#loops)
  - [while Loop](#while-loop)
  - [do while Loop](#do-while-loop)
  - [for Loop](#for-loop)
  - [foreach Loop](#foreach-loop)
- [Functions](#functions)
- [Arrays](#arrays)
  - [Indexed Arrays](#indexed-arrays)
  - [Associative Arrays](#associative-arrays)
  - [Multidimensional Arrays](#multidimensional-arrays)
  - [Sort Functions For Arrays](#sort-functions-for-arrays)
- [Global Variables - Superglobals](#global-variables---superglobals)
- [Regular Expressions](#regular-expressions)
- [Form Handling](#formhandling)
- [PHP Advanced](#php-advanced)
  - [Date() Function](#date-function)
  - [Include Files](#include-files)
  - [File Open/Read/Write/Close](#file-openreadwriteclose)
  - [File Upload](#file-upload)
  - [Cookies](#cookies) 
  - [Sessions](#sessions)
  - [PHP Filter Extension](#php-filter_extension) 
  - [Callback Functions](#callback-functions)
  - [JSON](#json) 
  - [Exception](#exception)
- [MySQL Database](#mysql-database)
  - [Connect to MySQL](#connect-to-mysql)
  - [Create a MySQL Database](#create-a-mysql-database)
  - [Create a MySQL Table](#create-a-mysql-table)
  - [Insert Data Into MySQL](#insert-data-into-mysql)
  - [Insert Multiple Records Into MySQL](#insert-multiple-records-into-mysql) 
  - [MySQL Prepared Statements](#mysql-prepared-statements)
  - [Select Data From a MySQL Database](#select-data-from-a-mysql-database)
  - [Select and Filter Data From a MySQL Database](#select-and-filter-data-from-a-mysql-database)
  - [Select and Order Data From a MySQL Database](#select-and-order-data-from-a-mysql-database)
  - [Delete Data From a MySQL Table](#delete-data-from-a-mysql-table)
  - [Update Data In a MySQL Table](#update-data-in-a-mysql-table) 
  - [Limit Data Selections From a MySQL Database](#limit-data-selections-from-a-mysql-database)
- [XML](#xml)
  - [XML Parser](#xml-parser)
  - [SimpleXML Parser](#simplexml-parser)
    - [SimpleXML - Read From String](#simplexml-read-from-string)
    - [SimpleXML - Read From File](#simplexml-read-from-file)
    - [SimpleXML - Get Node/Attribute Values](#simplexml---get-nodeattribute-values)
    - [Get Node Values of Specific Elements](#get-node-values-of-specific-elements)
    - [Get Node Values - Loop](#get-node-values---loop) 
    - [Get Attribute Values](#get-attribute-values)
    - [Get Attribute Values - Loop](#get-attribute-values---loop)
  - [XML Expat Parser](#xml-expat-parser)
  - [XML DOM Parser](#xml-dom-parser)
- [AJAX](#ajax)
  - [AJAX Database](#ajax-database)
  - [AJAX XML](#ajax-xml)
  - [AJAX Live Search](#ajax-live-search)
  - [AJAX Poll](#ajax-poll)

# PHP
PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. PHP code is executed on the server.

## Syntax
```php
<?php
// PHP code goes here
?
```
## Comments
```php
// This is a single-line comment
# This is also a single-line comment
```
Syntax for multiple-line comments:
```php
/*
This is a multiple-lines comment block
that spans over multiple
lines
*/
```
## Variables
PHP is a Loosely Typed Language: PHP automatically associates a data type to the variable, depending on its value.

- A variable starts with the $ sign, followed by the name of the variable
- A variable name must start with a letter or the underscore character
- A variable name cannot start with a number
- A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variable names are case-sensitive ($age and $AGE are two different variables)
```php
$txt = "Hello world!";
$x = 5;
```

## Variables Scope
The scope of a variable is the part of the script where the variable can be used. PHP has three different variable scopes:

- global
- local
- static

### Global
A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function.
```php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
```

### Local
A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function.
```php
function myTest() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
```

### Global Keyword
The global keyword is used to access a global variable from within a function.
```php
$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y; // outputs 15
```

PHP also stores all global variables in an array called $GLOBALS[index]
```php
$x = 5;
$y = 10;

function myTest() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15
```
### Static Keyword
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job. To do this, use the static keyword when you first declare the variable. 
```php
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
myTest();
myTest(); // output 0 1 2
```
## echo Statement
The following example shows how to output text and variables with the echo statement:
```php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
```

## print Statement
The following example shows how to output text and variables with the print statement:
```php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
```

## Data Types
Variables can store data of different types, and different data types can do different things. PHP supports the following data types:

- String
- Integer
- Float (floating point numbers - also called double)
- Boolean
- Array
- Object
- NULL
- Resource

## String
A string is a sequence of characters, like "Hello world!". A string can be any text inside quotes. You can use single or double quotes:
```php
$x = "Hello world!";
$y = 'Hello world!';
```
### strlen() - Return the Length of a String
The PHP strlen() function returns the length of a string.
```php
$x = "Hello World!";
echo strlen($x); // output 12
```

### str_word_count() - Count Words in a String
```php
$x = "Hello World!";
echo str_word_count($x); // output 2
```

### strrev() - Reverse a String
```php
$x = "Hello World!";
echo strrev($x); // Output !dlroW olleH
```

### strpos() - Search For a Text Within a String
strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
```php
$x = "Hello World!";
echo strpos($x, "World"); // Output 6
```

### str_replace() - Replace Text Within a String
```php
$x = "Hello World!";
echo str_replace("World", "Ibrahim", $x); // Output Hello Ibrahim!
```

## Integer
An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
```php
$x = 5985;
var_dump($x); // Output int(5985)
```

## Float
A float (floating point number) is a number with a decimal point or a number in exponential form.
```php
$x = 10.365;
var_dump($x); // Output float(10.365)
```

## Boolean
A Boolean represents two possible states: TRUE or FALSE. Booleans are often used in conditional testing. 
```php
$x = true;
$y = false;
```

## Array
An array stores multiple values in one single variable.
```php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
// Output 

// array(3) {
//   [0]=>
//   string(5) "Volvo"
//   [1]=>
//   string(3) "BMW"
//   [2]=>
//   string(6) "Toyota"
// }
```

## Object
Classes and objects are the two main aspects of object-oriented programming.

```php
class Car{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function msg(){
        return "My car is a ". $this->color . " ". $this->model . "!";
    }
}
$mycar = new Car("Black", "Volvo");
echo $mycar->msg(); // Output: My car is a Black Volvo!
```

## NULL
Null is a special data type which can have only one value: NULL. A variable of data type NULL is a variable that has no value assigned to it. Variables can also be emptied by setting the value to NULL:
```php
$x = "Hello world!";
$x = null;
var_dump($x); // Output: NULL
```

## PHP Math
PHP has a set of math functions that allows you to perform mathematical tasks on numbers.

### pi() Function
The pi() function returns the value of PI:
```php
echo(pi()); // returns 3.1415926535898
```

### min() and max() Functions
The min() and max() functions can be used to find the lowest or highest value in a list of arguments:
```php
  $value = array(0, 150, 30, 20, -8, -200);
  echo min($value); // returns -200
  echo max($value); // returns 150
```

### abs() Function
The abs() function returns the absolute (positive) value of a number:
```php
echo(abs(-6.7));  // returns 6.7
```

### sqrt() Function
The sqrt() function returns the square root of a number:
```php
echo(sqrt(64));  // returns 8
```

### round() Function
The round() function rounds a floating-point number to its nearest integer:
```php
echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0
```

### rand() function
The rand() function generates a random number:
```php
echo rand(); // OR
echo rand(10, 100);
```

## Constants
To create a constant, use the define() function.
```php
// Syntax
define(name, value)

// Example 
define("GETTINGS", "Hello World!");
echo GETTINGS; // Output: Hello World!
```
Constants are automatically global and can be used across the entire script.
```php
define("GETTINGS", "Hello World!");
function myTest() {
  echo GREETING;
}
myTest(); // output: Hello World!
```

### const Keyword
You can also create a constant by using the const keyword.
```php
const MYCAR = "Volvo";
echo MYCAR;
```

### Constant Arrays
You can create an Array constant using the define() function.
```php
define("CARS", ['BMW', "Volvo", "Toyota"]);
echo CARS[0]; // Output: BMW
```

### Magic Constants
PHP has nine predefined constants that change value depending on where they are used, and therefor they are called "magic constants". These magic constants are written with a double underscore at the start and the end, except for the ClassName::class constant.

- __CLASS__
If used inside a class, the class name is returned.
```php
class Fruits {
  public function myValue(){
    return __CLASS__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue(); // Fruits
```
- __DIR__
The directory of the file.
```php
echo __DIR__; // C:\awesomesites\w3schools\php
```

- __FILE__ 
The file name including the full path.
```php
echo __FILE__; // C:\awesomesites\w3schools\php\magic_const_file.php
```

- __FUNCTION__ 
If inside a function, the function name is returned.
```php
function myValue(){
  return __FUNCTION__;
}
echo myValue(); // myValue
```

- __LINE__
The current line number.
```php
echo __LINE__; // 367
```

- __METHOD__
If used inside a function that belongs to a class, both class and function name is returned.
```php
class Fruits {
  public function myValue(){
    return __METHOD__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue(); // Fruits::myValue
```

- __NAMESPACE__
If used inside a namespace, the name of the namespace is returned.
```php
namespace myArea;
function myValue(){
  return __NAMESPACE__;
}
echo myValue() // myArea
```

- __TRAIT__
If used inside a trait, the trait name is returned.
```php
trait message1 {
  public function msg1() {
    echo __TRAIT__; 
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1(); // message1
```
- ClassName::class
Returns the name of the specified class and the name of the namespace, if any.
```php
namespace myArea;
class Fruits {
  public function myValue(){
      return Fruits::class;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue(); // myArea\Fruits
```

## Operators
Operators are used to perform operations on variables and values. PHP divides the operators in the following groups:

- Arithmetic operators
- Assignment operators
- Comparison operators
- Increment/Decrement operators
- Logical operators
- String operators
- Array operators
- Conditional assignment operators

## Arithmetic Operators
The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.

- "+" Addition - sum of $x and $y
```php
$x = 10;  
$y = 6;
echo $x + $y; // 16
```

- "-" Subtraction - difference of $x and $y
```php
$x = 10;  
$y = 6;
echo $x - $y; // 4
```

- "*" Multiplication - product of $x and $y
```php
$x = 10;  
$y = 6;
echo $x * $y; // 60
```

- "/" Division - quotient of $x and $y
```php
$x = 10;  
$y = 6;
echo $x / $y; // 1.6666666666667
```

- "%"	Modulus - remainder of $x divided by $y
```php
$x = 10;  
$y = 6;
echo $x % $y; // 4
```

- "**" Exponentiation - 	result of raising $x to the $y'th power
```php
$x = 10;  
$y = 6;
echo $x ** $y; // 1000
```

## Assignment Operators
The PHP assignment operators are used with numeric values to write a value to a variable.

- x = y same as... x = y The left operand gets set to the value of the expression on the right
```php
$x = 10;  
echo $x; // 10
```

- x += y same as... x = x + y Addition
```php
$x = 20;  
$x += 100;
echo $x; // 120
```

- x -= y same as... x = x - y Subtraction
```php
$x = 50;
$x -= 30;
echo $x; // 20
```

- x *= y same as... x = x * y Multiplication
```php
$x = 5;
$x *= 6;
echo $x; // 30
```

- x /= y same as... x = x / y Division
```php
$x = 10;
$x /= 5;
echo $x; // 2
```

- x %= y same as... x = x % y Modulus
```php
$x = 15;
$x %= 4;
echo $x; // 3
```

## Comparison Operators
Comparison operators are used to compare two values (number or string):

-  == (Equal) - Returns true if $x is equal to $y
```php
$x = 100;  
$y = "100";
var_dump($x == $y); // returns true because values are equal
```

-  === (Identical) - Returns true if $x is equal to $y, and they are of the same type
```php
$x = 100;  
$y = "100";
var_dump($x === $y); // returns false because types are not equal
```

-  != (Not equal) - 	Returns true if $x is not equal to $y
-  <> (Not equal) - 	Returns true if $x is not equal to $y
```php
$x = 100;  
$y = "100";
var_dump($x != $y); // returns false because values are equal

Example 2
$x = 100;  
$y = "100";
var_dump($x <> $y); // returns false because values are equal
```

-  !== (Not identical) - 	Returns true if $x is not equal to $y, or they are not of the same type
```php
$x = 100;  
$y = "100";
var_dump($x !== $y); // returns true because types are not equal
```

-  > (Greater than) - 	Returns true if $x is greater than $y
```php
$x = 100;
$y = 50;
var_dump($x > $y); // returns true because $x is greater than $y
```

-  < (Less than) - 		Returns true if $x is less than $y
```php
$x = 10;
$y = 50;
var_dump($x < $y); // returns true because $x is less than $y
```

-  >= (Greater than or equal to) - Returns true if $x is greater than or equal to $y
```php
$x = 50;
$y = 50;
var_dump($x >= $y); // returns true because $x is greater than or equal to $y
```

-  <= (Less than or equal to) - Returns true if $x is less than or equal to $y
```php
$x = 50;
$y = 50;
var_dump($x <= $y); // returns true because $x is less than or equal to $y
```

-  <=> (Spaceship	) - Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
```php
$x = 5;  
$y = 10;
echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;
echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;
echo ($x <=> $y); // returns +1 because $x is greater than $y
```

## Increment-Decrement Operators
Increment operators are used to increment a variable's value. decrement operators are used to decrement a variable's value.

- "++$x" Pre-increment - Increments $x by one, then returns $x
```php
$x = 10;  
echo ++$x; // 11
```

- "$x++" Post-increment - Returns $x, then increments $x by one
```php
$x = 10;  
echo $x++; // 10
```

- "--$x" Pre-decrement - Decrements $x by one, then returns $x
```php
$x = 10;  
echo --$x; // 9
```

- "$x++" Post-decrement - Returns $x, then decrements $x by one
```php
$x = 10;  
echo $x--; // 10
```

## Logical Operators
Logical operators are used to combine conditional statements.

- and, &&  - 	True if both $x and $y are true
```php
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
} // Hello world!

Example 2
$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world!";
} // Hello world!
```

- or, || - 	True if either $x or $y is true
```php
$x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello world!";
} // Hello world!

Example 2
$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello world!";
} // Hello world!
```

- xor - 	True if either $x or $y is true, but not both
```php
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!";
} // Hello world!
```

- ! - 		True if $x is not true
```php
$x = 100;  

if ($x !== 90) {
    echo "Hello world!";
} // Hello world!
```

## String Operators
PHP has two operators that are specially designed for strings.

- . (Concatenation) - Concatenation of $txt1 and $txt2	
```php
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2; // Hello world!
```

- .= (Concatenation assignment) - 	Appends $txt2 to $txt1
```php
$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1; // Hello world!
```

## Array Operators 
The PHP array operators are used to compare arrays.

- "+" Union - Union of $x and $y
```php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
print_r($x + $y); 
// Array ( [a] => red [b] => green [c] => blue [d] => yellow )
```

- "==" Equality - Returns true if $x and $y have the same key/value pairs
```php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x == $y); // bool(false)
```

- "===" Identity - Returns true if $x and $y have the same key/value pairs in the same order and of the same types
```php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x === $y); // bool(false)
```

- "!=" Inequality - Returns true if $x is not equal to $y
```php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x != $y); // bool(true)
```

- "<>" Inequality -	Returns true if $x is not equal to $y
```php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x != $y); // bool(true)
```

- "!==" Returns true if $x is not identical to $y
```php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x !== $y); // bool(true)
```

## Conditional Assignment Operators
Conditional assignment operators are used to set a value depending on conditions:

- "?:" Ternary - Returns the value of $x. The value of $x is expr2 if expr1 = TRUE. The value of $x is expr3 if expr1 = FALSE

```php
echo $status = empty($user) ? "anonymous" : "logged in"; // anonymous

$user = "Ibrahim";
echo $status = empty($user) ? "anonymous" : "logged in"; // logged in
```

- (??) Null coalescing - Returns the value of $x. The value of $x is expr1 if expr1 exists, and is not NULL. If expr1 does not exist, or is NULL, the value of $x is expr2. Introduced in PHP 7

```php
echo $user = $_GET['user'] ?? "anonymous"; // anonymous
echo $color = $color ?? "red"; // red
```

## Conditional Statements
We have the following conditional statements:

- if statement - executes some code if one condition is true
- if...else statement - executes some code if a condition is true and another code if that condition is false
- if...elseif...else statement - executes different codes for more than two conditions
- switch statement - selects one of many blocks of code to be executed

### if Statement
```php
// Syntax
if (condition) {
  code to be executed if condition is true;
}

// Example
$data = 20;
if($data < 21){
    echo "The data is 20";
} // The data is 20
```

### if...else Statement
```php
// Syntax
if (condition) {
  code to be executed if condition is true;
} else {
  code to be executed if condition is false;
}

// Example
$data = 25;
if($data < 21){
    echo "The data is 20";
}else{
    echo "The data is 21";
} // The data is 21
```

### if...elseif...else Statement
```php
// Syntax
if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  code to be executed if first condition is false and this condition is true;
} else {
  code to be executed if all conditions are false;
}

// Example
$data = 21;
if($data <= 10){
    echo "The data is 10";
}elseif($data <= 20){
    echo "The data is 20";
}else{
    echo "I don't know.";
}
```

### switch Statement
```php
// Syntax
switch (n) {
  case label1:
    code to be executed if n=label1;
    break;
  case label2:
    code to be executed if n=label2;
    break;
  case label3:
    code to be executed if n=label3;
    break;
    ...
  default:
    code to be executed if n is different from all labels;
}

// Example
$color = "red";
switch($color){
    case "red":
        echo "Color is red";
        break;
    case "blue":
        echo "Color is blue";
        break;
    case "green":
        echo "Color is green";
        break;
    default:
        echo "I don't know";
}
```

## Loops
Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.

- while - loops through a block of code as long as the specified condition is true
- do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
- for - loops through a block of code a specified number of times
- foreach - loops through a block of code for each element in an array

### while Loop
```php
// Syntax
while (condition is true) {
  code to be executed;
}
```
```php
// Example 1
$x = 1;
while($x <= 5) {
    echo "The number is: $x \n";
    $x++;
}
// The number is: 1 
// The number is: 2 
// The number is: 3 
// The number is: 4 
// The number is: 5 

// Example 2
$x = 0;
while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
}
// The number is: 0
// The number is: 10
// The number is: 20
// The number is: 30
// The number is: 40
// The number is: 50
// The number is: 60
// The number is: 70
// The number is: 80
// The number is: 90
// The number is: 100
```

### do while Loop
```php
// Syntax
do {
  code to be executed;
} while (condition is true);
```
```php
// Example
$x = 1;
do {
    echo "The number is: $x \n";
    $x++;
} while ($x <= 5);
// The number is: 1 
// The number is: 2 
// The number is: 3 
// The number is: 4 
// The number is: 5 

// Example 2
$x = 6;
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
// The number is: 6
```

### for Loop
```php
// Syntax
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}
```
```php
// Example 
for ($x = 0; $x <= 5; $x++) {
  echo "The number is: $x \n";
}
// The number is: 0 
// The number is: 1 
// The number is: 2 
// The number is: 3 
// The number is: 4 
// The number is: 5 
```

### foreach Loop
```php
// Syntax
foreach ($array as $value) {
  code to be executed;
}
```
```php
// Example 1
$colors = array("red", "green", "blue", "yellow");
foreach($colors as $color){
    echo $color . "\n";
} // red green blue yellow

// Example 2
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $key => $value){
    echo "$key = $value \n";
}
// Peter = 35 
// Ben = 37 
// Joe = 43 
```

### Break
The break statement can also be used to jump out of a loop.
```php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
// The number is: 0
// The number is: 1
// The number is: 2
// The number is: 3
```

### Continue
The continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.
```php
for ($x = 0; $x < 6; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
// The number is: 0
// The number is: 1
// The number is: 2
// The number is: 3
// The number is: 5
```

## Functions
PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.

```php
// Syntax
function functionName() {
  code to be executed;
}

// Example 
function writeMsg() {
  echo "Hello world!";
}
writeMsg(); // Hello world!
```

### Function Arguments
Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.
```php
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}
familyName("Jani");
familyName("Hege");
// Jani Refsnes.
// Hege Refsnes.

// Example 2
function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}
familyName("Hege", "1975"); // Hege Refsnes. Born in 1975
```

### PHP is a Loosely Typed Language
PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

```php
// Example 1
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10

// Example 2
declare(strict_types=1); // strict requirement

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown
```

### Default Argument Value
```php
declare(strict_types=1); // strict requirement
function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}
setHeight(350); // The height is : 350
setHeight(); // will use the default value of 50. The height is : 50
```

### PHP Functions - Returning values
```php
declare(strict_types=1);
function sum(int $x, int $y){
    $z = $x + $y;
    return $z;
}
echo sum(5,5); // 10
```

### PHP Return Type Declarations
To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.
```php
declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.2, 5.2); // 6.4
```
You can specify a different return type, than the argument types, but make sure the return is the correct type:
```php
declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumbers(1.2, 5.2); // 6
```

### Passing Arguments by Reference
When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:

```php
function add(&$value){
    $value += 5;
}
$num = 3;
add($num);
echo $num; // 8
```

## Arrays
An array stores multiple values in one single variable:
```php
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
// I like Volvo, BMW and Toyota.
```

There are three types of arrays:

- Indexed arrays - Arrays with a numeric index
- Associative arrays - Arrays with named keys
- Multidimensional arrays - Arrays containing one or more arrays

### Indexed Arrays
The index can be assigned automatically (index always starts at 0)
```php
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
// I like Volvo, BMW and Toyota.
```
To loop through and print all the values of an indexed array, you could use a for loop, like this:

```php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
for ($i=0; $i <$arrlength ; $i++) { 
    echo $cars[$i] . "\n";
}
// Volvo
// BMW
// Toyota
```

### Associative Arrays
Associative arrays are arrays that use named keys that you assign to them.
```php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old."; // Peter is 35 years old.
```
To loop through and print all the values of an associative array, you could use a foreach loop, like this:

```php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $key => $value){
    echo $key . " age is " . $value . "\n";
}
// Peter age is 35
// Ben age is 37
// Joe age is 43
```

### Multidimensional Arrays
A multidimensional array is an array containing one or more arrays.

```php
$cars = array(
    array("volvo", 22, 90),
    array("BMW", 12, 30)
);
echo $cars[0][0]. ": In stock ". $cars[0][1]. " sold ". $cars[0][2] . "\n";
echo $cars[1][0]. ": In stock ". $cars[1][1]. " sold ". $cars[1][2];
// volvo: In stock 22 sold 90
// BMW: In stock 12 sold 30
```
We can also put a for loop inside another for loop to get the elements of the $cars array.
```php
$cars = array(
  array("volvo", 22, 90),
  array("BMW", 12, 30)
);
for($row=0; $row<2; $row++){
  echo "Row Number $row \n";
  for($col=0;$col<=2; $col++){
      echo $cars[$row][$col]. "\n";
  }
}
// Row Number 0 
// volvo
// 22
// 90
// Row Number 1 
// BMW
// 12
// 30
```

### Sort Functions For Arrays
- sort() - sort arrays in ascending order
- rsort() - sort arrays in descending order
- asort() - sort associative arrays in ascending order, according to the value
- ksort() - sort associative arrays in ascending order, according to the key
- arsort() - sort associative arrays in descending order, according to the value
- krsort() - sort associative arrays in descending order, according to the key

### sort() - sort arrays in ascending order
```php
// Example 1
$numbers = array(4, 6, 2, 22, 11);
sort($numbers); // 2 4 6 11 22

// Example 2
$cars = array("Volvo", "BMW", "Toyota");
sort($cars); // BMW Toyota Volvo
```

### rsort() - sort arrays in descending order

```php
// Example 1
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers); // 22 11 6 4 2

// Example 2
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars); // Volvo Toyota BMW
```

### asort() - sort associative arrays in ascending order, according to the value
```php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value . "\n";
}
// Key=Peter, Value=35
// Key=Ben, Value=37
// Key=Joe, Value=43
```

### ksort() - sort associative arrays in ascending order, according to the key
```php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value . "\n";
}
// Key=Ben, Value=37
// Key=Joe, Value=43
// Key=Peter, Value=35
```

### arsort() - sort associative arrays in descending order, according to the value
```php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value . "\n";
}
// Key=Joe, Value=43
// Key=Ben, Value=37
// Key=Peter, Value=35
```

### krsort() - Sort Array (Descending Order), According to Key
```php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value. "\n";
}
```

### Global Variables - Superglobals
Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

superglobal variables are:

- $GLOBALS
- $_SERVER
- $_REQUEST
- $_POST
- $_GET
- $_FILES
- $_ENV
- $_COOKIE
- $_SESSION

### $GLOBALS
PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.

```php
$x = 75; 
$y = 25;
function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z; // 100
```

### $_SERVER
$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

- $_SERVER['PHP_SELF']	Returns the filename of the currently executing script
- $_SERVER['SERVER_NAME']	Returns the name of the host server 
- $_SERVER['HTTP_HOST']	Returns the Host header from the current request
- $_SERVER['HTTPS']	Is the script queried through a secure HTTP protocol
- $_SERVER['SCRIPT_NAME']	Returns the path of the current script
- $_SERVER['SCRIPT_URI']	Returns the URI of the current page

### $_REQUEST
$_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.

```html
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
```
```php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
```

### $_POST
$_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.

```html
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
```
```php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
```

### $_GET
$_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get". $_GET can also collect data sent in the URL.

```html
<a href="?subject=PHP&web=mdibrahim.net">Get</a>
```
```php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
```

## Regular Expressions
A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for. Regular expressions can be used to perform all types of text search and text replace operations.

```php
// Syntax

// Regular expressions are strings composed of delimiters, a pattern and optional modifiers.
$exp = "/mdibrahim/i";
```
In the example above, / is the delimiter, mdibrahim is the pattern that is being searched for, and i is a modifier that makes the search case-insensitive.

The delimiter can be any character that is not a letter, number, backslash or space. The most common delimiter is the forward slash (/), but when your pattern contains forward slashes it is convenient to choose other delimiters such as # or ~.

### Regular Expression Functions
PHP provides a variety of functions that allow you to use regular expressions. The preg_match(), preg_match_all() and preg_replace() functions are some of the most commonly used ones:

- preg_match()	Returns 1 if the pattern was found in the string and 0 if not
- preg_match_all()	Returns the number of times the pattern was found in the string, which may also be 0
- preg_replace()	Returns a new string where matched patterns have been replaced with another string

### preg_match()
The preg_match() function will tell you whether a string contains matches of a pattern.
```php
$str = "Visit mdibrahim";
$pattern = "/mdibrahim/i";
echo preg_match($pattern, $str); // Outputs 1
```

### preg_match_all()
The preg_match_all() function will tell you how many matches were found for a pattern in a string.

```php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); // 4
```

### preg_replace()
The preg_replace() function will replace all of the matches of the pattern in a string with another string.

```php
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "mdibrahim", $str); // Visit mdibrahim
```

## Form Handling

### When to use GET?
Information sent from a form with the GET method is visible to everyone (all variable names and values are displayed in the URL). GET also has limits on the amount of information to send. The limitation is about 2000 characters.

GET should NEVER be used for sending passwords or other sensitive information!

### When to use POST?
Information sent from a form with the POST method is invisible to others (all names/values are embedded within the body of the HTTP request) and has no limits on the amount of information to send.

### Example

```html
<form method="post" action="welcome.php">
    <label for="name">Name</label>
    <input type="text" name="name">

    <label for="email">Email</label>
    <input type="email" name="email">

    <input type="submit">
</form>
```
```php
<h2>Welcome <?php echo $_POST['name']?></h2>
<p>Your email address is: <?php echo $_POST['email']?></p>
```

## Form Validation and Required
```php
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
```

## Validate E-mail and URL

### Validate Name
The code below shows a simple way to check if the name field only contains letters, dashes, apostrophes and whitespaces. If the value of the name field is not valid, then store an error message:

```php
$name = $_POST["name"];
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed";
}
```

### Validate E-mail
If the e-mail address is not well-formed, then store an error message:
```php
$email = $_POST["email"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
```

### Validate URL
```php
$website = $_POST["website"];
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  $websiteErr = "Invalid URL";
}
```

## PHP Advanced

## Date() Function
```php
// Syntax
date(format,timestamp)
```
### Get a Date
Here are some characters that are commonly used for dates:

- d - Represents the day of the month (01 to 31)
- m - Represents a month (01 to 12)
- Y - Represents a year (in four digits)
- l (lowercase 'L') - Represents the day of the week

```php
echo "Today is " . date("Y/m/d") . "<br>"; // Today is 2023/11/03
echo "Today is " . date("l"); // Today is Tuesday
```

### Get a Time
Here are some characters that are commonly used for times:

- H - 24-hour format of an hour (00 to 23)
- h - 12-hour format of an hour with leading zeros (01 to 12)
- i - Minutes with leading zeros (00 to 59)
- s - Seconds with leading zeros (00 to 59)
- a - Lowercase Ante meridiem and Post meridiem (am or pm)

```php
echo "The time is " . date("h:i:sa"); // he time is 07:13:44am
```

### Get Your Time Zone
```php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa"); // The time is 03:15:04am
```

### Date With mktime()
mktime() function returns the Unix timestamp for a date. The Unix timestamp contains the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.

```php
// Syntax
mktime(hour, minute, second, month, day, year)

// Example
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
// Created date is 2014-08-12 11:14:54am
```

### Date From a String With strtotime()
strtotime() function is used to convert a human readable date string into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT).

```php
// Syntax
strtotime(time, now)

// Example
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
// Created date is 2014-04-15 10:30:00pm
```

PHP is quite clever about converting a string to a date, so you can put in various values:

```php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "\n"; // 2023-11-03 12:00:00am

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "\n"; // 2023-11-04 12:00:00am

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "\n"; // 2024-02-02 08:24:18am
```

The example below outputs the dates for the next six Saturdays:

```php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
// Nov 04
// Nov 11
// Nov 18
// Nov 25
// Dec 02
// Dec 09
```

The example below outputs the number of days until 4th of December:

```php
$d1=strtotime("December 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of December.";
// There are 32 days until 4th of December.
```

## Include Files
- require will produce a fatal error (E_COMPILE_ERROR) and stop the script
```php
require 'footer.php';
```

- include will only produce a warning (E_WARNING) and the script will continue
```php
include 'footer.php';
```

## File Open/Read/Write/Close
In this chapter we will teach you how to open, read, write, and close a file on the server.

### Open File - fopen()
The first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened.

- r	Open a file for read only. File pointer starts at the beginning of the file
- w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
- a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
- x	Creates a new file for write only. Returns FALSE and an error if file already exists
- r+	Open a file for read/write. File pointer starts at the beginning of the file
- w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
- a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
- x+	Creates a new file for read/write. Returns FALSE and an error if file already exists

```php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
```

### Read File - fread()
The first parameter of fread() contains the name of the file to read from and the second parameter specifies the maximum number of bytes to read.
```php
fread($myfile,filesize("webdictionary.txt"));
```

### Close File - fclose()
The fclose() function is used to close an open file.
```php
fclose($myfile);
```

### Read Single Line - fgets()
The fgets() function is used to read a single line from a file.

```php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile); // AJAX = Asynchronous JavaScript and XML
```

### Read Single Character - fgetc()
```php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
```

### Create File - fopen()
If you use fopen() on a file that does not exist, it will create it, given that the file is opened for writing (w) or appending (a).

```php
$myfile = fopen("testfile.txt", "w")
```

### Write to File - fwrite()
The first parameter of fwrite() contains the name of the file to write to and the second parameter is the string to be written.

```php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);
// Mickey Mouse
// Minnie Mouse
```

### Append Text
You can append data to a file by using the "a" mode. The "a" mode appends text to the end of the file, while the "w" mode overrides (and erases) the old content of the file.
```php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);
fclose($myfile);
// Mickey Mouse
// Minnie Mouse
// Donald Duck
// Goofy Goof
```

## File Upload
First, ensure that PHP is configured to allow file uploads. In your "php.ini" file, search for the file_uploads directive, and set it to On:
```php
file_uploads = On
```
### Check if File Already Exists
First, we will check if the file already exists in the "uploads" folder.
```php
// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
```

### Limit File Size
If the file is larger than 500KB, an error message is displayed.
```php
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
```

### Limit File Type
The code below only allows users to upload JPG, JPEG, PNG, and GIF files.
```php
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
```


## Cookies
A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.

A cookie is created with the setcookie() function.

```php
// Syntax
setcookie(name, value, expire, path, domain, secure, httponly);
// Only the name parameter is required. All other parameters are optional.
```

```php
// Example 
<?php 
$cookie_name = "user";
$cookie_value = "Ibrahim";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');
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
```

### Modify a Cookie Value
To modify a cookie, just set (again) the cookie using the setcookie() function.

### Delete a Cookie
To delete a cookie, use the setcookie() function with an expiration date in the past:
```php
<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html>
```

### Check if Cookies are Enabled
The following example creates a small script that checks whether cookies are enabled. First, try to create a test cookie with the setcookie() function, then count the $_COOKIE array variable:

```php
<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
?>

</body>
</html>
```

## Sessions
So; Session variables hold information about one single user, and are available to all pages in one application.

A session is started with the session_start() function. Session variables are set with the PHP global variable: $_SESSION.

```php
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html>
// Note: The session_start() function must be the very first thing in your document. Before any HTML tags.
```

### Get PHP Session Variable Values
Notice that session variables are not passed individually to each new page, instead they are retrieved from the session we open at the beginning of each page (session_start()).

```php
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

</body>
</html>
```

Another way to show all the session variable values for a user session is to run the following code:

```php
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
print_r($_SESSION);
?>

</body>
</html>
```

### Modify a PHP Session Variable
To change a session variable, just overwrite it:

```php
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>

</body>
</html>
```

### Destroy a PHP Session
To remove all global session variables and destroy the session, use session_unset() and session_destroy():

```php
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

</body>
</html>
```

## PHP Filter Extension
PHP filters are used to validate and sanitize external input. The PHP filter extension has many of the functions needed for checking user input, and is designed to make data validation easier and quicker.

The filter_list() function can be used to list what the PHP filter extension offers:

```php
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
</style>
</head>
<body>

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>

</body>
</html>
```

### filter_var() Function
The filter_var() function both validate and sanitize data. 

### Sanitize a String
The following example uses the filter_var() function to remove all HTML tags from a string:

```php
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr; // Hello World!
```

### Validate an Integer
The following example uses the filter_var() function to check if the variable $int is an integer. If $int is an integer, the output of the code below will be: "Integer is valid". If $int is not an integer, the output will be: "Integer is not valid":

```php
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
} // Integer is valid
```

### filter_var() and Problem With 0
In the example above, if $int was set to 0, the function above will return "Integer is not valid". To solve this problem, use the code below:

```php
$int = 0;

if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}// Integer is valid
```

### Validate an IP Address
The following example uses the filter_var() function to check if the variable $ip is a valid IP address:

```php
$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo("$ip is a valid IP address");
} else {
  echo("$ip is not a valid IP address");
} // 127.0.0.1 is a valid IP address
```

### Sanitize and Validate an Email Address
```php
$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
} /// john.doe@example.com is a valid email address
```

### Sanitize and Validate a URL
The following example uses the filter_var() function to first remove all illegal characters from a URL, then check if $url is a valid URL:

```php
$url = "https://www.w3schools.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo("$url is a valid URL");
} else {
  echo("$url is not a valid URL");
} // https://www.w3schools.com is a valid URL
```

### Validate an Integer Within a Range
The following example uses the filter_var() function to check if a variable is both of type INT, and between 1 and 200:

```php
$int = 122;
$min = 1;
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
  echo("Variable value is not within the legal range");
} else {
  echo("Variable value is within the legal range");
} // Variable value is not within the legal range
```

### Validate IPv6 Address
The following example uses the filter_var() function to check if the variable $ip is a valid IPv6 address:

```php
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
  echo("$ip is a valid IPv6 address");
} else {
  echo("$ip is not a valid IPv6 address");
} // 2001:0db8:85a3:08d3:1319:8a2e:0370:7334 is a valid IPv6 address
```

### Validate URL - Must Contain QueryString
The following example uses the filter_var() function to check if the variable $url is a URL with a querystring:

```php
$url = "https://www.w3schools.com";

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
  echo("$url is a valid URL with a query string");
} else {
  echo("$url is not a valid URL with a query string");
} // https://www.w3schools.com is not a valid URL with a query string
```

### Remove Characters With ASCII Value > 127
The following example uses the filter_var() function to sanitize a string. It will both remove all HTML tags, and all characters with ASCII value > 127, from the string:

```php
$str = "<h1>Hello WorldÆØÅ!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr; // Hello World!
```

## Callback Functions
A callback function is a function which is passed as an argument into another function.

Any existing function can be used as a callback function. To use a function as a callback function, pass a string containing the name of the function as the argument of another function:

Pass a callback to PHP's array_map() function to calculate the length of every string in an array:
```php
function my_callback($item){
    return strlen($item);
}
$strings = ["apple", "orange", "banana"];
$lenght = array_map("my_callback", $strings);
print_r($lenght); 
// Array
// (
//     [0] => 5
//     [1] => 6
//     [2] => 6
// )
```

Starting with version 7, PHP can pass anonymous functions as callback functions:

```php
$strings = ["apple", "orange", "banana"];
$lenght = array_map(function($item){return strlen($item);}, $strings);
print_r($lenght); 
// Array
// (
//     [0] => 5
//     [1] => 6
//     [2] => 6
// )
```

### Callbacks in User Defined Functions
User-defined functions and methods can also take callback functions as arguments. To use callback functions inside a user-defined function or method, call it by adding parentheses to the variable and pass arguments as with normal functions:

```php
function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

function printFormatted($str, $format) {
  // Calling the $format callback function
  echo $format($str);
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim"); // Hello world!
printFormatted("Hello world", "ask"); // Hello world?
```

## JSON
JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.

### json_encode() function
The json_encode() function is used to encode a value to JSON format.

```php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
echo json_encode($age); // {"Peter":35,"Ben":37,"Joe":43}
```

### json_decode()
The json_decode() function is used to decode a JSON object into a PHP object or an associative array.

```php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj));
// object(stdClass)#1 (3) {
//   ["Peter"]=>
//   int(35)
//   ["Ben"]=>
//   int(37)
//   ["Joe"]=>
//   int(43)
// }
```

The json_decode() function returns an object by default. The json_decode() function has a second parameter, and when set to true, JSON objects are decoded into associative arrays.

```php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj, true));
// array(3) { ["Peter"]=> int(35) ["Ben"]=> int(37) ["Joe"]=> int(43) }
```

### Accessing the Decoded Values

This example shows how to access the values from a PHP object:
```php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);

echo $obj->Peter; // 35
echo $obj->Ben; // 37
echo $obj->Joe; // 43
```

This example shows how to access the values from a PHP associative array:
```php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);

echo $arr["Peter"]; // 35
echo $arr["Ben"]; // 37
echo $arr["Joe"]; // 43
```

### Looping Through the Values
This example shows how to loop through the values of a PHP object:
```php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
// Peter => 35
// Ben => 37
// Joe => 43
```

This example shows how to loop through the values of a PHP associative array:
```php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
// Peter => 35
// Ben => 37
// Joe => 43
```

## Exception
An exception is an object that describes an error or unexpected behaviour of a PHP script. Exceptions are a good way to stop a function when it comes across data that it cannot use.

### Throwing an Exception
When an exception is thrown, the code following it will not be executed. If an exception is not caught, a fatal error will occur with an "Uncaught Exception" message.

```php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}
echo divide(5, 0);
// PHP Fatal error:  Uncaught Exception: Division by zero in F:\xampp\htdocs\PHP\PHPbyW3schools\practices\advanced.php:52
```

### try...catch Statement
To avoid the error from the example above, we can use the try...catch statement to catch exceptions and continue the process.

```php
// Syntax
try {
  code that can throw exceptions
} catch(Exception $e) {
  code that runs when an exception is caught
}
```

```php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} catch(Exception $e) {
  echo "Unable to divide.";
}
// Unable to divide.
```

### try...catch...finally Statement
The try...catch...finally statement can be used to catch exceptions. Code in the finally block will always run regardless of whether an exception was caught. If finally is present, the catch block is optional.

```php
// Syntax
try {
  code that can throw exceptions
} catch(Exception $e) {
  code that runs when an exception is caught
} finally {
  code that always runs regardless of whether an exception was caught
}
```
Show a message when an exception is thrown and then indicate that the process has ended:

```php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} catch(Exception $e) {
  echo "Unable to divide. ";
} finally {
  echo "Process complete.";
}
// Unable to divide. Process complete.
```

Output a string even if an exception was not caught:
```php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} finally {
  echo "Process complete.";
} // Process complete.
```

### Exception Object
The Exception Object contains information about the error or unexpected behaviour that the function encountered.

```php
// Syntax
new Exception(message, code, previous)
```

When catching an exception, the following table shows some of the methods that can be used to get information about the exception:

- getMessage()	Returns a string describing why the exception was thrown
- getPrevious()	If this exception was triggered by another one, this method returns the previous exception. If not, then it returns null
- getCode()	Returns the exception code
- getFile()	Returns the full path of the file in which the exception was thrown
- getLine()	Returns the line number of the line of code which threw the exception

```php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero", 1);
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} catch(Exception $ex) {
  $code = $ex->getCode();
  $message = $ex->getMessage();
  $file = $ex->getFile();
  $line = $ex->getLine();
  echo "Exception thrown in $file on line $line: [Code $code]
  $message";
}
// Exception thrown in F:\xampp\htdocs\PHP\PHPbyW3schools\practices\advanced.php on line 61: [Code 1]
// Division by zero
```

## MySQL Database

- MySQL is a database system used on the web
- MySQL is a database system that runs on a server
- MySQL is ideal for both small and large applications
- MySQL is very fast, reliable, and easy to use
- MySQL uses standard SQL
- MySQL compiles on a number of platforms
- MySQL is free to download and use

### Database Queries
```php
SELECT LastName FROM Employees
// The query above selects all the data in the "LastName" column from the "Employees" table.
```

### Connect to MySQL
MySQL database using:
- MySQLi extension (the "i" stands for improved)
- PDO (PHP Data Objects)

Example (MySQLi Object-Oriented)
```php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
```

Example (MySQLi Procedural)
```php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
```
Example (PDO)
```php
$servername = "localhost";
$username = "username";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
```

### Close the Connection
```php
// MySQLi Object-Oriented:
$conn->close();

// MySQLi Procedural:
mysqli_close($conn);
$conn = null;
// PDO:
```

## Create a MySQL Database

Example (MySQLi Object-oriented)
```php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();
```

Example (MySQLi Procedural)

```php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
```

### Example (PDO)

```php
$servername = "localhost";
$username = "username";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE myDBPDO";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Database created successfully<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
```

## Create a MySQL Table
The CREATE TABLE statement is used to create a table in MySQL.

Example (MySQLi Object-oriented)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
```

Example (MySQLi Procedural)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
```

Example (PDO)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
  $sql = "CREATE TABLE MyGuests (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Table MyGuests created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
```

## Insert Data Into MySQL
The INSERT INTO statement is used to add new records to a MySQL table:
```php
INSERT INTO table_name (column1, column2, column3,...)
VALUES (value1, value2, value3,...)
```

Example (MySQLi Object-oriented)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
```
Example (MySQLi Procedural)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
```

Example (PDO)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
```

## Get ID of The Last Inserted Record
If we perform an INSERT or UPDATE on a table with an AUTO_INCREMENT field, we can get the ID of the last inserted/updated record immediately.

Example (MySQLi Object-oriented)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
```

Example (MySQLi Procedural)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
  $last_id = mysqli_insert_id($conn);
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
```

Example (PDO)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com')";
  // use exec() because no results are returned
  $conn->exec($sql);
  $last_id = $conn->lastInsertId();
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
```

## Insert Multiple Records Into MySQL
Multiple SQL statements must be executed with the mysqli_multi_query() function.

Example (MySQLi Object-oriented)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
```

Example (MySQLi Procedural)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
```

Example (PDO)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // begin the transaction
  $conn->beginTransaction();
  // our SQL statements
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com')");
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Mary', 'Moe', 'mary@example.com')");
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Julie', 'Dooley', 'julie@example.com')");

  // commit the transaction
  $conn->commit();
  echo "New records created successfully";
} catch(PDOException $e) {
  // roll back the transaction if something failed
  $conn->rollback();
  echo "Error: " . $e->getMessage();
}

$conn = null;
```

## MySQL Prepared Statements
A prepared statement is a feature used to execute the same (or similar) SQL statements repeatedly with high efficiency.

Prepared statements basically work like this:

- Prepare: An SQL statement template is created and sent to the database. Certain values are left unspecified, called parameters (labeled "?"). Example: INSERT INTO MyGuests VALUES(?, ?, ?)
- The database parses, compiles, and performs query optimization on the SQL statement template, and stores the result without executing it
- Execute: At a later time, the application binds the values to the parameters, and the database executes the statement. The application may execute the statement as many times as it wants with different values

Prepared Statements in MySQLi
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
```

Have a look at the bind_param() function:
```php
$stmt->bind_param("sss", $firstname, $lastname, $email);
```
This function binds the parameters to the SQL query and tells the database what the parameters are. The "sss" argument lists the types of data that the parameters are. The s character tells mysql that the parameter is a string.

The argument may be one of four types:
- i - integer
- d - double
- s - string
- b - BLOB

### Prepared Statements in PDO
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES (:firstname, :lastname, :email)");
  $stmt->bindParam(':firstname', $firstname);
  $stmt->bindParam(':lastname', $lastname);
  $stmt->bindParam(':email', $email);

  // insert a row
  $firstname = "John";
  $lastname = "Doe";
  $email = "john@example.com";
  $stmt->execute();

  // insert another row
  $firstname = "Mary";
  $lastname = "Moe";
  $email = "mary@example.com";
  $stmt->execute();

  // insert another row
  $firstname = "Julie";
  $lastname = "Dooley";
  $email = "julie@example.com";
  $stmt->execute();

  echo "New records created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
```

## Select Data From a MySQL Database
The SELECT statement is used to select data from one or more tables:
```php
SELECT column_name(s) FROM table_name
```
or we can use the * character to select ALL columns from a table:
```php
SELECT * FROM table_name
```

Example (MySQLi Object-oriented)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
```
the function num_rows() checks if there are more than zero rows returned.

If there are more than zero rows returned, the function fetch_assoc() puts all the results into an associative array that we can loop through. The while() loop loops through the result set and outputs the data from the id, firstname and lastname columns.

Example (MySQLi Procedural)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
```

Example (MySQLi Object-oriented)
You can also put the result in an HTML table:
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
```

Select Data With PDO (+ Prepared Statements)
```php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
```

## Select and Filter Data From a MySQL Database
The WHERE clause is used to filter records.
```php
SELECT column_name(s) FROM table_name WHERE column_name operator value 
```

Example (MySQLi Object-oriented)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
```

Example (MySQLi Procedural)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
```

You can also put the result in an HTML table:

Example (MySQLi Object-oriented)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
```
Example select Data With PDO (+ Prepared Statements)
```php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
}
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
```

## Select and Order Data From a MySQL Database
The ORDER BY clause is used to sort the result-set in ascending or descending order.
```php
SELECT column_name(s) FROM table_name ORDER BY column_name(s) ASC|DESC 
```

Example (MySQLi Object-oriented)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
```

Example (MySQLi Procedural)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
```

You can also put the result in an HTML table:
Example (MySQLi Object-oriented)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
```

Example select Data With PDO (+ Prepared Statements)
```php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
```

## Delete Data From a MySQL Table
The DELETE statement is used to delete records from a table:
```php
DELETE FROM table_name
WHERE some_column = some_value
```
> Notice the WHERE clause in the DELETE syntax: The WHERE clause specifies which record or records that should be deleted. If you omit the WHERE clause, all records will be deleted!

Example (MySQLi Object-oriented)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
```

Example (MySQLi Procedural)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
```

Example (PDO)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM MyGuests WHERE id=3";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
```

## Update Data In a MySQL Table
The UPDATE statement is used to update existing records in a table:
```php
UPDATE table_name
SET column1=value, column2=value2,...
WHERE some_column=some_value 
```
> Notice the WHERE clause in the UPDATE syntax: The WHERE clause specifies which record or records that should be updated. If you omit the WHERE clause, all records will be updated!

Example (MySQLi Object-oriented)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
```

Example (MySQLi Procedural)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
```

Example (PDO)
```php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
```

## Limit Data Selections From a MySQL Database
MySQL provides a LIMIT clause that is used to specify the number of records to return.

The LIMIT clause makes it easy to code multi page results or pagination with SQL, and is very useful on large tables. Returning a large number of records can impact on performance.

Assume we wish to select all records from 1 - 30 (inclusive) from a table called "Orders". The SQL query would then look like this:
```php
$sql = "SELECT * FROM Orders LIMIT 30";
```

The SQL query below says "return only 10 records, start on record 16 (OFFSET 15)":
```php
$sql = "SELECT * FROM Orders LIMIT 10 OFFSET 15";
```
You could also use a shorter syntax to achieve the same result:
```php
$sql = "SELECT * FROM Orders LIMIT 15, 10";
```

## XML
The XML language is a way to structure data for sharing across websites. XML is easy to create. It looks a lot like HTML, except that you make up your own tags.

### XML Parser
To read and update, create and manipulate an XML document, you will need an XML parser. there are two major types of XML parsers:

- Tree-Based Parsers
- Event-Based Parsers

### Tree-Based Parsers
Tree-based parsers holds the entire document in Memory and transforms the XML document into a Tree structure. It analyzes the whole document, and provides access to the Tree elements (DOM).

This type of parser is a better option for smaller XML documents, but not for large XML document as it causes major performance issues.

Example of tree-based parsers:

- SimpleXML
- DOM

### Event-Based Parsers
Event-based parsers do not hold the entire document in Memory, instead, they read in one node at a time and allow you to interact with in real time. Once you move onto the next node, the old one is thrown away.

This type of parser is well suited for large XML documents. It parses faster and consumes less memory.

Example of event-based parsers:

- XMLReader
- XML Expat Parser

## SimpleXML Parser
SimpleXML is a tree-based parser. SimpleXML provides an easy way of getting an element's name, attributes and textual content if you know the XML document's structure or layout. SimpleXML turns an XML document into a data structure you can iterate through like a collection of arrays and objects.

From PHP 5, the SimpleXML functions are part of the PHP core. No installation is required to use these functions.

### SimpleXML - Read From String
The PHP simplexml_load_string() function is used to read XML data from a string.
```php
<?php
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";

$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
print_r($xml);
?>
```
> <b>Error Handling Tip:</b> Use the libxml functionality to retrieve all XML errors when loading the document and then iterate over the errors. The following example tries to load a broken XML string:

```php
libxml_use_internal_errors(true);
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
// Failed loading XML:
// Opening and ending tag mismatch: user line 3 and wronguser
// Opening and ending tag mismatch: email line 4 and wrongemail
```

### SimpleXML - Read From File
The PHP simplexml_load_file() function is used to read XML data from a file.

Assume we have an XML file called "note.xml", that looks like this:
```xml
<?xml version="1.0" encoding="UTF-8"?>
<note>
  <to>Tove</to>
  <from>Jani</from>
  <heading>Reminder</heading>
  <body>Don't forget me this weekend!</body>
</note>
```

The example below shows how to use the simplexml_load_file() function to read XML data from a file:
```php
<?php
$xml=simplexml_load_file("note.xml") or die("Error: Cannot create object");
print_r($xml);
?>
// SimpleXMLElement Object ( [to] => Tove [from] => Jani [heading] => Reminder [body] => Don't forget me this weekend! )
```

## SimpleXML - Get Node/Attribute Values
Assume we have an XML file called "note.xml", that looks like this:
```xml
<?xml version="1.0" encoding="UTF-8"?>
<note>
  <to>Tove</to>
  <from>Jani</from>
  <heading>Reminder</heading>
  <body>Don't forget me this weekend!</body>
</note>
```
Get the node values from the "note.xml" file:
```php
<?php
$xml=simplexml_load_file("note.xml") or die("Error: Cannot create object");
echo $xml->to . "<br>";
echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body;
?>
// Tove
// Jani
// Reminder
// Don't forget me this weekend!
```

Another XML File
Assume we have an XML file called "books.xml", that looks like this: 
```xml
<?xml version="1.0" encoding="utf-8"?>
<bookstore>
  <book category="COOKING">
    <title lang="en">Everyday Italian</title>
    <author>Giada De Laurentiis</author>
    <year>2005</year>
    <price>30.00</price>
  </book>
  <book category="CHILDREN">
    <title lang="en">Harry Potter</title>
    <author>J K. Rowling</author>
    <year>2005</year>
    <price>29.99</price>
  </book>
  <book category="WEB">
    <title lang="en-us">XQuery Kick Start</title>
    <author>James McGovern</author>
    <year>2003</year>
    <price>49.99</price>
  </book>
  <book category="WEB">
    <title lang="en-us">Learning XML</title>
    <author>Erik T. Ray</author>
    <year>2003</year>
    <price>39.95</price>
  </book>
</bookstore>
```
### Get Node Values of Specific Elements
```php
<?php
$xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
echo $xml->book[0]->title . "<br>";
echo $xml->book[1]->title;
?>
// Everyday Italian
// Harry Potter
```

###  Get Node Values - Loop
The following example loops through all the  elements in the "books.xml" file.

```php
<?php
$xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
foreach($xml->children() as $books) {
  echo $books->title . ", ";
  echo $books->author . ", ";
  echo $books->year . ", ";
  echo $books->price . "<br>";
}
?>
// Everyday Italian, Giada De Laurentiis, 2005, 30.00
// Harry Potter, J K. Rowling, 2005, 29.99
// XQuery Kick Start, James McGovern, 2003, 49.99
// Learning XML, Erik T. Ray, 2003, 39.95
```

### Get Attribute Values
```php
$xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
echo $xml->book[0]['category'] . "<br>";
echo $xml->book[1]->title['lang'];
// COOKING
// en
```

### Get Attribute Values - Loop
```php
<?php
$xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
foreach($xml->children() as $books) {
  echo $books->title['lang'];
  echo "<br>";
}
?>
// en
// en
// en-us
// en-us
```

## XML Expat Parser
The Expat parser is an event-based parser. Look at the following XML fraction:
```xml
<from>Jani</from>
```
The XML Expat Parser functions are part of the PHP core. There is no installation needed to use these functions.

The XML file "note.xml" will be used in the example below:
```xml
<?xml version="1.0" encoding="UTF-8"?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>
```

### Initializing the XML Expat Parser
```php
<?php
// Initialize the XML parser
$parser=xml_parser_create();

// Function to use at the start of an element
function start($parser,$element_name,$element_attrs) {
  switch($element_name) {
    case "NOTE":
    echo "-- Note --<br>";
    break;
    case "TO":
    echo "To: ";
    break;
    case "FROM":
    echo "From: ";
    break;
    case "HEADING":
    echo "Heading: ";
    break;
    case "BODY":
    echo "Message: ";
  }
}

// Function to use at the end of an element
function stop($parser,$element_name) {
  echo "<br>";
}

// Function to use when finding character data
function char($parser,$data) {
  echo $data;
}

// Specify element handler
xml_set_element_handler($parser,"start","stop");

// Specify data handler
xml_set_character_data_handler($parser,"char");

// Open XML file
$fp=fopen("note.xml","r");

// Read data
while ($data=fread($fp,4096)) {
  xml_parse($parser,$data,feof($fp)) or
  die (sprintf("XML Error: %s at line %d",
  xml_error_string(xml_get_error_code($parser)),
  xml_get_current_line_number($parser)));
}

// Free the XML parser
xml_parser_free($parser);
?>
```

## XML DOM Parser
The DOM parser is a tree-based parser. Look at the following XML document fraction:
```xml
<?xml version="1.0" encoding="UTF-8"?>
<from>Jani</from>
```

The XML file below ("note.xml") will be used in our example:
```xml
<?xml version="1.0" encoding="UTF-8"?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>
```

### Load and Output XML
```php
<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("note.xml");

print $xmlDoc->saveXML();
?>
// Tove Jani Reminder Don't forget me this weekend!
```

### Looping through XML
```php
<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("note.xml");

$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item) {
  print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
// #text =
// to = Tove
// #text =
// from = Jani
// #text =
// heading = Reminder
// #text =
// body = Don't forget me this weekend!
// #text =
```

## AJAX
AJAX = Asynchronous JavaScript and XML. AJAX allows web pages to be updated asynchronously by exchanging small amounts of data with the server behind the scenes. This means that it is possible to update parts of a web page, without reloading the whole page.

AJAX is based on internet standards, and uses a combination of:

- XMLHttpRequest object (to exchange data asynchronously with a server)
- JavaScript/DOM (to display/interact with the information)
- CSS (to style the data)
- XML (often used as the format for transferring data)

### AJAX PHP Example

Here is the HTML code: such as ajax.html
```html
<!DOCTYPE html>
<html>
<head>
<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "gethint.php?q="+str, true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form action="">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>

</body>
</html>
```

The PHP File - "gethint.php"
```php
<?php
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
```

## AJAX Database 
AJAX can be used for interactive communication with a database.

<b>Example:</b> Here is the HTML code:
```html
<!DOCTYPE html>
<html>
<head>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
<option value="">Select a person:</option>
<option value="1">Peter Griffin</option>
<option value="2">Lois Griffin</option>
<option value="3">Joseph Swanson</option>
<option value="4">Glenn Quagmire</option>
</select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here.</b></div>

</body>
</html>
```

The PHP File called "getuser.php".
```php
<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','peter','abc123');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM user WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "<td>" . $row['Hometown'] . "</td>";
  echo "<td>" . $row['Job'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
```

### AJAX XML Example
When a user selects a CD in the dropdown list above, a function called "showCD()" is executed. The function is triggered by the "onchange" event:
```html
<html>
<head>
<script>
function showCD(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getcd.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
Select a CD:
<select name="cds" onchange="showCD(this.value)">
  <option value="">Select a CD:</option>
  <option value="Bob Dylan">Bob Dylan</option>
  <option value="Bee Gees">Bee Gees</option>
  <option value="Cat Stevens">Cat Stevens</option>
</select>
</form>
<div id="txtHint"><b>CD info will be listed here...</b></div>

</body>
</html>
```

HP file called "getcd.php"
```php
<?php
$q=$_GET["q"];

$xmlDoc = new DOMDocument();
$xmlDoc->load("cd_catalog.xml");

$x=$xmlDoc->getElementsByTagName('ARTIST');

for ($i=0; $i<=$x->length-1; $i++) {
  //Process only element nodes
  if ($x->item($i)->nodeType==1) {
    if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
      $y=($x->item($i)->parentNode);
    }
  }
}

$cd=($y->childNodes);

for ($i=0;$i<$cd->length;$i++) {
  //Process only element nodes
  if ($cd->item($i)->nodeType==1) {
    echo("<b>" . $cd->item($i)->nodeName . ":</b> ");
    echo($cd->item($i)->childNodes->item(0)->nodeValue);
    echo("<br>");
  }
}
?>
```

## AJAX Live Search
The following example will demonstrate a live search, where you get search results while you type.

When a user types a character in the input field above, the function "showResult()" is executed. The function is triggered by the "onkeyup" event:

```html
<html>
<head>
<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
<input type="text" size="30" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
</form>

</body>
</html>
```

PHP file called "livesearch.php"
```php
<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("links.xml");

$x=$xmlDoc->getElementsByTagName('link');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('title');
    $z=$x->item($i)->getElementsByTagName('url');
    if ($y->item(0)->nodeType==1) {
      //find a link matching the search text
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          $hint="<a href='" .
          $z->item(0)->childNodes->item(0)->nodeValue .
          "' target='_blank'>" .
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        } else {
          $hint=$hint . "<br /><a href='" .
          $z->item(0)->childNodes->item(0)->nodeValue .
          "' target='_blank'>" .
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      }
    }
  }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="no suggestion";
} else {
  $response=$hint;
}
```

## AJAX Poll
The following example will demonstrate a poll where the result is shown without reloading.

When a user chooses an option above, a function called "getVote()" is executed. The function is triggered by the "onclick" event:

```html
<html>
<head>
<script>
function getVote(int) {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<div id="poll">
<h3>Do you like PHP and AJAX so far?</h3>
<form>
Yes: <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
No: <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
</form>
</div>

</body>
</html>
```

PHP file called "poll_vote.php"
```php
<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if ($vote == 0) {
  $yes = $yes + 1;
}
if ($vote == 1) {
  $no = $no + 1;
}

//insert votes to txt file
$insertvote = $yes."||".$no;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table>
<tr>
<td>Yes:</td>
<td><img src="poll.gif"
width='<?php echo(100*round($yes/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($yes/($no+$yes),2)); ?>%
</td>
</tr>
<tr>
<td>No:</td>
<td><img src="poll.gif"
width='<?php echo(100*round($no/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($no/($no+$yes),2)); ?>%
</td>
</tr>
</table>
```
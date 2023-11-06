<?php 
    // function my_callback($item){
    //     return strlen($item);
    // }
    // $strings = ["apple", "orange", "banana"];
    // $lenght = array_map("my_callback", $strings);
    // print_r($lenght); 

    // $strings = ["apple", "orange", "banana"];
    // $lenght = array_map(function($item){return strlen($item);}, $strings);
    // print_r($lenght); 
function exclaim($str){
    return $str . "! \n";
}
function ask($str){
    return $str . "? \n";
}
function printFormatted($str, $format){
    echo $format($str);
}
printFormatted("Hello", "exclaim");
printFormatted("Hello", "ask");
?>
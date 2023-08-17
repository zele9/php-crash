<?php
//$y=12;
function register_user($email){ //email is the argument to he function
    // global $y; //global makes variables declared in the global scope to be recognized in the local scope
    // echo $y. "<br>";
    // $x= 10;
    echo $email. " registered". "<br>"; 
}
 
//echo $x; 
register_user('zetebsjr@gmail.com'); // zetebsjr@gmail.com is the parameter for the function

function sum($n1, $n2){
    return $n1 + $n2;
}
echo sum(5, 6). "<br>";

$subtract = function($n1, $n2){   //This is an anonymous function because it has no name and we must close it with a semi colon
    return $n1-$n2;
};

echo $subtract(10, 5). "<br>". "For Arrow functions";
//Arrow functions are anonymous functions with one statement in them which have been modified into a single line function
//by using the keyword "fn()", an arrow "=>", no return statment and no curly braces ratherthan function() {}

$multiply = fn($n1, $n2) => $n1 * $n2;
echo "<br>".$multiply(5, 4);



<?php
/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/ 

$name = 'Ataba'; //string
$age = 23; // int
$has_kids = false; //Boolean
$cash_in_hand = 30.25; // float


echo $name;
var_dump($name);
echo "<br>";
echo $age;
var_dump($age);
echo "<br>";
echo $has_kids;
var_dump($has_kids);
echo "<br>";
echo $cash_in_hand;
var_dump($cash_in_hand);
echo "<br>";

echo "{$name} is {$age} years old";// $name and $age are not been parsed due to single quotes. in order to solve this, we concantenate each term using '.' or we use double quotes
echo "<br>";

define('HOST', 'localhost'); //used to create constants with HOST being the const name and must be all caps. localhost is the corresponding value
define('DB_NAME', 'dev_db'); // conatants are variables whose values never change in the program

echo HOST;
echo "<br>";
echo DB_NAME;


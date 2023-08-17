<?php
$string = 'Hello World';
// Get the length of a string
echo strlen($string);

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o');

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');

// Reverse a string
echo strrev($string);

// Convert all characters to lowercase
echo strtolower($string);

// Convert all characters to uppercase
echo strtoupper($string);

// Uppercase the first character of each word
echo ucwords($string);

// String replace
echo str_replace('World', 'Everyone', $string);

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo substr($string, 5);

// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
}

// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'YES';
}

$string2 = '<h1>Hello</h1>';
echo $string2;

$string3 = '<script>alert(1)</script>';
echo htmlspecialchars($string3);

printf('%s likes to %s', 'Ataba', 'code'); //formatted strings used in printf wherein data is gotten from outside. They use specifiers '%s' like in C/C++
printf('1+3 = %d', 1+3);
printf('5*6 = %f', 5*6);






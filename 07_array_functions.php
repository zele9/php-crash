<?php
$fruits = ['apple','orange','pear'];
//Getting the length of array
echo count($fruits). "<br>";

//search array
var_dump(in_array('apple', $fruits));

//add to array
$fruits[] = 'grape'; //adds to end of array
print_r($fruits);
array_push($fruits, 'blueberry', 'strawberry'); //adds multiple to end of array
array_unshift($fruits, 'mango'); // adds to top of array
print_r($fruits);

//Remove from array
array_pop($fruits); //removes from the end of array
array_shift($fruits); // removes from top of array 
//unset($fruits[2]); //to remove a specific array element, unset is used and it also removes the index as well
print_r($fruits);

//Split into 2 chunks
$chunked_array = array_chunk($fruits, 2); //2 is the argument that determines the number of elts in 1 chunk
print_r($chunked_array);

echo "<br>". "Concantinating arrays". "<br>";
$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2); //joining arr1 and 2 using array_merge function and storing it in arr3
print_r($arr3);

$arr4 = [...$arr1, ...$arr2]; //joining can be done using spread operator (...$arr1) too
print_r($arr4);

$a = ['green','red','yellow'];
$b = ['avocado','apple','banana'];

$c = array_combine($a, $b); //combines both arrays into c array by setting a array elts as keys and the various b array elts as values
print_r($c);

$keys = array_keys($c); // takes the combined array, extracts all the keys and stores them in $keys
print_r($keys);

$flipped = array_flip($c); // changes the keys to values and vice versa
print_r($flipped);

$nums = range(1, 20); // takes 2 arguments and lists the numbers within their range
print_r($nums);

$new_nums = array_map(function($num) { //array map takes 2 arguments, a function and the array where in each elt in the array is mapped by the function as if they all serve as arguments to the function.
    return "Number ${num}";
}, $nums);
print_r($new_nums);

$less_than_10 = array_filter($nums, fn($num) => $num <= 10); //functions like map but conditions can be set
print_r($less_than_10);

$sum = array_reduce($nums, fn($carry, $num) => $carry+$num); //with $carry holding the return value of all the previous iterations, reduce function is used to add up all the elts of the original array

var_dump($sum);


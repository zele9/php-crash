<?php
//Simple arrays

$numbers = [1,44,55,22];
$fruits = array('apple', 'banana', 'pear');

print_r($numbers);
echo "\n";
var_dump($fruits);

echo $fruits[1];

//Associative array which can be user defined to set the indexes
$colors = [
    1 => 'red',
    2 => 'blue',
    3 => 'green'
];

echo "\n";
echo $colors[3];

echo "\n";
$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];
echo $hex['red'];
echo "\n";

$person = [
    'first_name' => 'Emmanuel',
    'last_name' => 'Ataba',
    'email' => 'zetebsjr@gmail.com'
];

echo $person['last_name'];
echo $person['first_name'];

$people = [ //multi-dimensional array which is an array people containing multiple person arrays
    [
        'first_name' => 'Emmanuel',
        'last_name' => 'Ataba',
        'email' => 'zetebsjr@gmail.com'
    ],
    [
        'first_name' => 'Karen',
        'last_name' => 'Ataba',
        'email' => 'atabakaren@gmail.com'
    ],
    [
        'first_name' => 'Daisy',
        'last_name' => 'Ataba',
        'email' => 'sharmenspear@gmail.com'
    ],
    [
        'first_name' => 'Helen',
        'last_name' => 'Ataba',
        'email' => 'apihelen@gmail.com'
    ]
];
echo "\n";
echo $people [1]['email'];
echo "\n";

var_dump(json_encode($people));



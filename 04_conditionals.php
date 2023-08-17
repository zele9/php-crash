<?php
// if statements
$age = 23;

if($age >=20){
    echo 'You are old enough to vote.';
}
else{
    echo 'Sorry, you are not old enough to vote.';
}
echo "<br>";

$t = date("F j H");//date function with parameters F, j and H for month, day and hour of day respectively.
$hour = date("H");

if($hour < 12){
    echo 'Good Morning';
}
else if($hour < 17){
    echo 'Good Afternoon';
}else{
    echo 'Good Evening';
}
echo "<br>";

$posts = ['First Post'];
if(!empty($posts)){
    echo 'Array is empty!!';
    echo "<br>";
    echo $posts[0]. ' In loop';
    echo "<br>";
}else {
    echo 'Array is not empty!!';
}
echo "<br>";

echo !empty($posts) ? $posts[0] : 'No Posts';  //'?' = then and ':' = else are ternary operators and both do what the if-else loop does, all in a single line.
echo "<br>";
//OR
$first_posts = !empty($posts) ? $posts[0] : 'No Posts'; // this line stores the results of the if-else loop in the variable.
echo "<br>";
echo $first_posts;
// With ternary operator, there must be a value for the else part otherwise used NULL as value for else
//or use the coalescing operator = ??
echo "<br>";
$first_posts = $posts[0] ?? null;
echo $first_posts;
echo "<br>";

// SWITCHES
$fav_color = 'blue';
switch($fav_color){
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
    echo 'Your favorite color is not red, blue or green';
}





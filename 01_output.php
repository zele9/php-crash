<?php
echo 'Hello man what up. What am I doing?'; //echo outputs strings, numbers, html, etc.
echo "\n";
echo 123, 'Hello', 10.5; 
echo "\n";
echo [1,2,3];
echo "\n";
print 123; // works like echo, but can only take single arguments
echo "\n";
print_r('1,2,3'); // prints single values and arrays
echo "\n";

var_dump('Hello'); //Returns more info like data type and length
var_dump(true);
echo "\n";

var_export('Hello'); //its like var_dump() but outputs a srting representation of a variable

//All are usuallt used for debugging.
echo "\n";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1><?php echo "Post One"; ?></h1>

</body>
</html>
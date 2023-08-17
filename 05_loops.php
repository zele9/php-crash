<?php
echo 'For Loop'. '<br>';
for($x=0; $x<=10; $x++){
    echo $x. '<br>';
}

echo 'While Loop';
echo "<br>";
$w =1;
while($w <= 15){
    echo 'Number '. $w. '<br>';
    $w++;
}

echo 'Do-While Loop'. '<br>';
$d = 1;
do{
    echo 'Number '. $d. '<br>';
    $d++;
}while($d<=5);

echo 'Foreach Loop'. '<br>';
$posts = ['First Post', 'Second Post', 'Third Post'];
echo 'Firstly, using For Loop'. '<br>';
for($f=0; $f<count($posts); $f++){ //count function gets length of array = 3 elts to serve as comparator in for loop
    echo $posts[$f]. '<br>';
}

echo 'Using Foreach Loop'. '<br>';
foreach($posts as $index => $item){
    echo $index. ')'. $item. '<br>';
}
echo 'If We have an Associative Array'. '<br>';
$person = [
    'first_name' => 'Emmanuel',
    'last_name' => 'Ataba',
    'email' => 'zetebsjr@gmail.com'
];
foreach($person as $title => $name){
    echo "$title - $name <br>";
}

 
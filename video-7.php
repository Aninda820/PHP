<?php
$name = 'Anidna';
$income = 1000;

/* PHP data types

1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL

*/


// String - sequence of characters
$name = "Harry";
$friend = "Rohan";
echo "$name's friend is $friend".'<br>';
echo "We can over write the variable".'<br>';

// Float - decimal number with a dot
$income = 455.5 ."<br>";
$debts = 43.5;
echo $income;
echo $debts;

echo '<hr>';

// Boolean - true or false
$x = true;
$is_friends = false;
echo var_dump($x).'<br>';
echo var_dump($is_friends);
echo '<hr>';

// Object - Instances of classes

$friends = array('Rohan', 'Naruto','Itachi', 'Boruto');
echo $friends[0].'<br>';
echo $friends[1].'<br>';
echo $friends[2].'<br>';
echo $friends[3].'<br>';
echo var_dump($friends);
echo '<hr>';

//NULL  - null means nothing, empty
$name = null;
echo var_dump($name);
?>

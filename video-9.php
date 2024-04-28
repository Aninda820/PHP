<?php
// Opertors in PHP
echo "1. Arithmatic Operators".'<br>';
echo "2. Assignment Operators".'<br>';
echo "3. Comparison Operators".'<br>';
echo "4. Logical Operators".'<br>';
echo '<hr>';


// 1. Arithmatic Operators
$a = 50;
$b = 10;

echo "The sum of $a and  $b is: " .($a + $b) . '<br>';
echo "The subation of $a and  $b is: " .($a - $b) . '<br>';
echo "The multiplication of $a and  $b is: " .($a * $b) . '<br>';
echo "The division of $a and  $b is: " .($a / $b) . '<br>';
echo "The power of $a and  $b is: " .($a ** $b) . '<br>';
echo "The modulus of $a and  $b is: " .($a % $b) . '<br>';   //its return the remander after division.



// 2. Assignment operator
$x = $a;
echo "For x, the value is ". $x . '<br>';

$a += 6;
echo $a . '<br>';
$a -= 6;
echo $a . '<br>';
$a /= 6;
echo $a . '<br>';
$a %= 6;
echo $a . '<br>';
echo "<hr>";

// 3. Comparison Operators
$x = 7;
$y = 9;
echo "For x == y, the result is ";
echo var_dump($x==$y) ."<br>";

echo "For x < y, the result is ";
echo var_dump($x < $y) ."<br>";

echo "For x > y, the result is ";
echo var_dump($x > $y) ."<br>";

echo "For x >= y, the result is ";
echo var_dump($x>=$y) ."<br>";

echo "For x <= y, the result is ";
echo var_dump($x <= $y) ."<br>";

echo "For x <> y, the result is ";
echo var_dump($x <> $y) ."<br>";  //This is not equal to operator in php.
echo "<hr>";


// 4. Logical Operators
$m = true;
$n = false;

echo "For $m and $n, the result is ";
echo var_dump($m and $n) ."<br>";

echo "For $m or $n, the result is ";
echo var_dump($m or $n) ."<br>";

echo "For $m || $n, the result is ";
echo var_dump($m || $n) ."<br>";

echo "For not of $m, the result is ";
echo var_dump(!$m) . '<br>';

echo "For not of $n, the result is ";
echo var_dump(!$n);
?>
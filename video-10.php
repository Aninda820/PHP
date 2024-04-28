<!-- if else statements -->


<?php
$a = 65;
$b = 10;

if ($a > $b) {
    echo "$a is greater than $b".'<br>';
}elseif($a < $b) {
    echo "$b is greater than $a".'<br>';
}else{
    echo "$a and $b both are equal".'<br>';
}
echo "Done";
echo "<hr>";



$driver = 22;
if ($driver >= 18 and $driver < 25) {
    echo "You can apply for license";
} elseif ($driver>=25 and $driver < 65) {
    echo "You can drive";
} else {
    echo "You can't drive";
}
?>

<?php
echo "While loop in PHP"."<br>";

$i = 0;
$x = 10;
while($i < 100 && $x < 50){
    echo "The number is: ".($i). "<br>";
    $i++;
    // $i+=1;
    $x++;
}
echo 'End of loop';
?>
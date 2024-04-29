<!-- Scope, Local & Global Variables -->

<?php
echo "Scope, Local & Global Variables" . '<br>';
$a = 100;    //Global Variable
$b =200;      //Global Variable
function printValue() {
    global $a, $b;  //got access for using global variables by using global keyword
    $a = 10;       //Local Variable
    $b = 1000;      //Local Variable
    echo "The value of your variable $a and $b";
}
echo $a . '<br>';
printValue();
echo "<br>";
echo var_dump($GLOBALS);
echo '<br>';        //print all the global variables
echo var_dump($GLOBALS['a']);        
echo var_dump($GLOBALS['b']);   

echo '<br>';
echo $a;   // we overwrite the global variable with a new value
?>
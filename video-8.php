<?php
// String Methods in PHP
$name = 'Aninda';
echo $name . '<br>';
echo "The length of the string is " . strlen($name) . '<br>';

echo str_word_count("It's actually use for count the number of words in the string.");

$demo = "One day I will be a hukage";
echo strrev($demo);  //Mainly it's reverse the hole string

echo "<br>";

echo strpos($demo, "ill") . '<br>';  //use for searching something in the string, first type name on the string and then type what you wanna search for. it return position of the first occurence of that word or phrase in the string.

echo str_replace("One day I will be a hukage", "I am going to become a hacker.", $demo);  //use for replacing something in the string, $demo
echo '<br>';
echo str_repeat($name, 5); //First type name on the string and then type how many time you want repeat that string. it return hole string with repeated number of times as we have typed above.

echo "<pre>";
    echo rtrim("            <pre>This is a good boy         ") . '<br>';
    echo ltrim("            <pre>This is a good boy         ");
echo "</pre>";
?>
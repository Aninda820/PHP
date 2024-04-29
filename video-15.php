<!-- foreach loop -->

<?php
echo "welcome to foreach loop" . '<br>';

$arr = array('Naruto', 'Saskey', 'Itachi', 'Kakashi', 'Jiraiya', 'Madara');

// Normale life
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . "<br>";
}
echo  "<hr>";

// Mantos life 
foreach ($arr as $value) {
    echo $value. "<br>";
}

?>
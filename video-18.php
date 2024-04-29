<!-- Associative Arrays in PHP -->

<?php
echo "Associative Arrays in PHP" . '<br>';
$arr = array('This', 'That', 'What');
echo $arr[0] . '<br>';
echo $arr[1] . '<br>';
echo $arr[2] . '<br>';


// foreach($arr as $key => $value) {
//     echo $value .'<br>';
// }


$favColor = array(
    'Minato' => 'Blue',
    'Naruto' => 'Red',
    'Itachi' => 'Green',
    'Boruto' => 'Yellow'
);
echo $favColor['Minato'] . '<br>';
echo $favColor['Naruto'] . '<br>';
echo $favColor['Boruto'] . '<br>';

foreach ($favColor as $key => $value) {
    echo "Favorite Color of $key is $value" . '<br>';
}

?>
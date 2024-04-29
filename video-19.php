<!-- Multi-Dimensional Array -->

<?php
echo "Multi dimensional array in php" . '<br>';

// Creating a 2d array
$multiDim = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
echo var_dump($multiDim) . '<br>';

echo $multiDim[2][2] . "<br>";

// Printing the contents of a 2D array 
for ($i = 0; $i < count($multiDim); $i++) {
    echo var_dump($multiDim[$i]);
    echo "<br>";
}



for ($i=0; $i < count($multiDim); $i++) { 
    for ($j=0; $j < count($multiDim[$i]); $j++) { 
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}



?>
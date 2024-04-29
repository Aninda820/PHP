<?php
echo "Welcome to php tutorial on functions"."<br>";

function addMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value){
        $sum = $sum + $value;
    }
    return $sum;
}
function avgMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value){
        $sum = $sum + $value;
        $i++;
    }
    return $sum/$i;
}

$rohan = [43, 66, 12, 54, 33, 97];
$sumMarks = addMarks($rohan);
$avg_rohan = avgMarks($rohan);
echo "Total marks scored by rohan out of 600 is: $sumMarks" . '<br>';
echo "Avarage number of Rohan out of 100 is: $avg_rohan";

echo '<br>';

$harry = [43, 66, 76, 92, 46, 55];
$totalMarkHarry = addMarks($harry);
$avg_harry = avgMarks($harry);
echo "Harry Total marks out of 600 is: $totalMarkHarry" . '<br>';
echo "Avarage number of Harry out of 100 is: $avg_harry";


?>
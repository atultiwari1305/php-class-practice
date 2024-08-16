<?php

$x = [1,5,3,8,5,7,3,9];


$max = PHP_INT_MIN;
$min = PHP_INT_MAX;

for($i=0;$i<sizeof($x);$i++){
    if($x[$i]>$max) $max = $x[$i];
    if($x[$i]<$min) $min = $x[$i];
}

echo "Max element in array is ".$max."<br>";
echo "Min element in array is ".$min;

?>
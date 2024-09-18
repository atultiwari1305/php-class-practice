<?php
    $cars = ["Zen", "Maruti", "Fiat"];
    $i = 0;
    $j = sizeof($cars)-1;
    while($i<$j){
        $temp = $cars[$i];
        $cars[$i++] = $cars[$j];
        $cars[$j--] = $temp;
    }
    for($k=0; $k<sizeof($cars); $k++){
        echo $cars[$k]." "; 
    }
?>
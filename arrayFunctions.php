<?php
    $array1 = ["Zen", "Maruti", "Fiat"];
    $array2 = ["BMW", "Maruti", "Hyundai"];

    $merged_array = array_merge($array1, $array2);
    $intersected_array = array_intersect($array1, $array2);
    $diff_array = array_diff($array1, $array2);

    echo "Merged Array: ";
    foreach($merged_array as $value){
        echo $value." ";
    }
    echo "<br>";

    echo "Intersected Array: ";
    foreach($intersected_array as $value){
        echo $value." ";
    }
    echo "<br>";
    
    echo "Diff Array: ";
    foreach($diff_array as $value){
        echo $value." ";
    }
?>

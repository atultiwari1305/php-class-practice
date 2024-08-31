<?php
    $a = 0;
    $b = 1;
    echo "Fibonacci Sequence: ".$a." ".$b." ";
    for($i = 2; $i<20; $i++){   
        $c = $a + $b;
        $a = $b;
        $b = $c;
        echo $b." ";
    }
?>
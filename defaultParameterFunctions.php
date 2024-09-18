<?php
    function add($a, $b=2){
        return $a+$b;
    }
    echo "Without parameter: ".add(3)."<br>";
    echo "With parameter: ".add(3,3);
?>
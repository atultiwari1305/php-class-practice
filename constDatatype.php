<?php
    define("Atul", "Atul Tiwari");
    echo Atul."<br>";
    const name = "Raj";
    echo name."<br>";


    define("courses", ["PHP", "HTML", "CSS"]);
    for($i=0; $i<3;$i++){
        echo courses[$i]." ";
    }

    echo "inside Function"."<br>";
    const a = 20;
    const b = 30;
    function add($x, $y){
        $sum = $x + $y;
        echo "Sum is: ".$sum;
    }
    add(a,b);
?>
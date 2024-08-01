<?php
    $points = 0;
    $num = rand(1, 6);
    while($num != 6){
        echo "Roll is:".$num."  ";
        if($num % 2 != 0){
            $points++;
        }
        $num = rand(1, 6);
        echo "Point is: ".$points."<br>";
    }
    echo "You got 6.";
?>

<?php
    function isArmstrong($number) {
        $sum = 0;
        $digits = str_split($number);
        $power = count($digits);
        
        foreach ($digits as $digit) {
            $sum += pow($digit, $power);
        }
        
        return $sum == $number;
    }

    $number = 153;

    if (isArmstrong($number)) {
        echo "$number is an Armstrong number.";
    } else {
        echo "$number is not an Armstrong number.";
    }
?>

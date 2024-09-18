<?php
    $counter = 0;
    
    function incrementCounter(){
        $GLOBALS['counter']++;
        echo "Counter after increment: ".$GLOBALS['counter']."<br>";
    }
    function decrementCounter(){
        $GLOBALS['counter']--;
        echo "Counter after decrement: ".$GLOBALS['counter']."<br>";
    }
    function resetCounter(){
        $GLOBALS['counter'] = 0;
        echo "Counter after reset: ".$GLOBALS['counter']."<br>";
    }
?>
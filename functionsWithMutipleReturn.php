<?php

function values(){
    return [1,2,3];
}


list($a, $b, $c) = values();

echo $a." ".$b." ".$c;

?>
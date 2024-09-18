<?php

function fun(){
    $GLOBALS['x'] = 100;
}

fun();
echo $GLOBALS['x'];
echo $x;

function test(){
    $foo = 'local variable'.$GLOBALS['foo'];
    echo "<br>".'$foo in global : '.$foo; 
}

$foo = "Example content";
test();


?>
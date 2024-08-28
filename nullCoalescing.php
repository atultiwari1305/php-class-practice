<?php
    $a = null;
    $b = null;
    $c = 23;
    $d = null;

    $result = $a ?? ($b ?? ($c ?? ($d)));
    echo $result;
?>
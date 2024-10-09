<?php
    $pattern = "hello";
    $string = "Hello, world!";
    if (preg_match("/$pattern/i", $string)) {
        echo "Match found!";
    }
    else{
        echo "No match found.";
    }
?>

<?php
    $str = "AtulrajTiwari#098";
    if(preg_match('/[a-z]/', $str) && preg_match('/[A-Z]/', $str) && preg_match('/[0-9]/', $str) && preg_match('/[^A-Za-z0-9]/', $str)){
        echo "Strong Password";
    }
    else{
        echo "Weak Password";
    }
?>
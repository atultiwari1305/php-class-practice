<?php 

    $name = "Amit is a good boy";

    echo " original string -". $name."<br>";

    echo "Length of string is ".strlen($name)."<br>";

    echo "word count in string is ".str_word_count($name)."<br>";
    echo "reverse of string is  '". strrev($name)."'<br>";
    echo "position of 'boy' in string is ". strpos($name, "boy")."<br>";

    echo "Replacing Amit with Rohan in string -'" .str_replace("Amit","Rohan",$name)."'<br>";
    echo "Repeat a particular string ---".str_repeat($name, 4) ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="" method="post">
        <label for="text" name="text"></label>
        Enter String: <input type="text" name="text" id="text"/> <br>
        <input type="submit" value="Count Vowels" name="vowel">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        function countVowels($string) {
            $string = strtolower($string);
            $vowels = ['a', 'e', 'i', 'o', 'u'];
            $vowelCount = 0;
            
            for ($i = 0; $i < strlen($string); $i++) {
                if (in_array($string[$i], $vowels)) {
                    $vowelCount++;
                }
            }
            
            return $vowelCount;
        }

        $inputString = $_POST['text'];
        $vowelCount = countVowels($inputString);

        echo "Total number of vowels in the string '$inputString' is: $vowelCount";
    }
?>

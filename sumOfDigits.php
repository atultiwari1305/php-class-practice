<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="" method="post">
        <label for="name" name="num"></label>
        Enter Number: <input type="number" name="num" id="num"/> <br>
        <input type="submit" value="Sum of Digit" name="add">
    </form>


<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $num = $_POST['num'];
        $num1 = $_POST['num'];
        $sum = 0;
        while($num!=0){
            $sum += ($num%10);
            $num /= 10;
        }
        echo "Sum of digit of ".$num1." is: ".$sum;
    }
?>
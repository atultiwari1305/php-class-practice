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
        <input type="submit" value="Sum" name="add">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $sum = 0;
        $num = $_POST['num'];
        for($i = 1; $i<=$num; $i++){
            $sum+=$i;
        }
        echo "Sum is: ".$sum;
    }
?>
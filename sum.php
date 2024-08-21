<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="name" name="num1"></label>
        Enter First Number: <input type="number" name="num1" id="num1"/> <br>
        Enter second Number: <input type="number" name="num2" id="num2"/> <br>
        <input type="submit" value="sum"/>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $sum = $num1 + $num2;

       
        echo "<h2>The sum of $num1 and $num2 is: $sum</h2>";
    }

    ?>
    
</body>
</html>
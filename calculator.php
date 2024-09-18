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
        <input type="submit" value="sum" name="operation">
        <input type="submit" value="sub" name="operation">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $operation= $_POST['operation'];

       if($operation=="sum"){
        $sum = $num1 + $num2;

       
        echo "<h2>The sum of $num1 and $num2 is: $sum</h2>";}
        else{$sum = $num1 - $num2;

       
        echo "<h2>The diff of $num1 and $num2 is: $sum</h2>";
 }   
}
   

    ?>
    
</body>
</html>
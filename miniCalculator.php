<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        fieldset {
            border: 2px solid black;
            padding: 20px;
            border-radius: 5px;
        }

        legend {
            padding: 0 10px;
            font-size: 1.5em;
            color: red;
        }
    </style>
</head>
<body>

    <fieldset>
        <legend><h1><b>MINI CALCULATOR</b></h1></legend>
        <form action="" method="post">
            <label for="name" name="num1"></label>
            Enter First Number: <input type="number" name="num1" id="num1"/> <br>
            Enter second Number: <input type="number" name="num2" id="num2"/> <br>
            <button type="submit" name="operation" value="sum" class="btn btn-primary">+</button>
            <button type="submit" name="operation" value="sub" class="btn btn-primary">-</button>
            <button type="submit" name="operation" value="mul" class="btn btn-primary">*</button>
            <button type="submit" name="operation" value="divi" class="btn btn-primary">/</button>
        </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $operation= $_POST['operation'];

        if($operation=="sum"){
            $sum = $num1 + $num2;
            echo "<h2>The sum of $num1 and $num2 is: $sum</h2>";
        }
        else if($operation=="sub"){
            $val = $num1 - $num2;
            echo "<h2>The sub of $num1 and $num2 is: $val</h2>";
        }
        else if($operation=="mul"){
            $pro = $num1 * $num2;
            echo "<h2>The product of $num1 and $num2 is: $pro</h2>";
        }
        else if($operation=="divi"){
            $quo = $num1 / $num2;
            echo "<h2>The division of $num1 and $num2 is: $quo</h2>";
        }
    }   
    ?>
    </fieldset>

    
</body>
</html>
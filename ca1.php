<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="" method="POST">
        First Number: <input type="number" name="num1"/> <br>
        Second Number: <input type="number" name="num2"/> <br>
        <input type="submit" value="+" id="add" name="opr">
        <input type="submit" value="-" id="sub" name="opr">
        <input type="submit" value="X" id="mul" name="opr">
        <input type="submit" value="/" id="divi" name="opr">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $opr= $_POST['opr'];

        if($opr=="+"){
            echo "Result: ".($num1 + $num2);
        }
        else if($opr=="-"){
            echo "Result: ".($num1 - $num2);
        }
        else if($opr=="X"){
            echo "Result: ".($num1 * $num2);
        }
        else if($opr=="/"){
            if($num2==0){
                echo "Result: "."Not Possible";
            }
            else{
                echo "Result: ".($num1 / $num2);
            }
        }
    }   
    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="" method="post">
        <label for="name" name="radius"></label>
        Enter radius: <input type="number" name="radius" id="radius"/> <br>
        <input type="submit" value="Area"/>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radius = $_POST['radius'];

        $area = $radius * $radius * pi();

       
        echo "<h2>The area of circle with radius $radius is: $area</h2>";
    }

    ?>
    
</body>
</html>
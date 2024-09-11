<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        Enter Name: <input type="text", name="name"><br>
        Enter Age: <input type="number" name="age"><br>
        Enter Email: <input type="email" name="email"><br>
        <input type="submit" value="Submit" name="submit"><br>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == 'GET'){
            $name = $_GET['name'];
            $age = $_GET['age'];
            $email = $_GET['email'];
            
            echo $name."<br>".$age."<br>".$email;

        }
    ?>
</body>
</html>
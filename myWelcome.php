<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="POST">
        <input type="submit" name="logout" value="Logout">
    </form>

    <?php
        echo "Welcome!!". $_SESSION["username"];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($username === $predefined_username && $password === $predefined_password) {
                session_start();
                $_SESSION["username"] = $username;
                header('Location: myWelcome.php');
            } else {
                echo "Invalid username or password. Please try again.";
            }
        }
    ?>


</body>
</html>

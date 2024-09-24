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
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $predefined_username = "admin";
            $predefined_password = "password123";

            $username = $_POST['username'];
            $password = $_POST['password'];

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

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body class="login-container">
    <h2>Login</h2>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];
            if ($username == "bzm" && $password == "bzm") {
                session_start();
                $_SESSION["username"] = $username;
                header("Location: index.php");
            } else {
                echo "<p>Invalid username and/or password.</p>";
            }
        }
        ?>
    <form method="POST" action="login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>


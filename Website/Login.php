<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<?php
    // session_start();
    require_once "header.php";
    ?>
<body class="login-container">
    <h2>Login</h2>
    <form method="POST" action="response.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>


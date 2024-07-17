<?php
    require_once "header.php"; 
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>

<body class="login-container">
    <div = id="login-page">
    <h1 id="loginText">Login</h1><br><br>
    <form method="POST" action="response.php">
        <label for="username" id="loginLabel">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password" id="loginLabel">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    </div>
</body>
</html>


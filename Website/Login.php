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
    <!-- <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];
            if ($username == "bzm" && $password == "bzm") {
                $_SESSION["username"] = $username;
                // if (session_is_registered("username")) {
                //     echo "<p>Welcome, $username!</p>";
                // }
                $session_encode = session_encode();//gets the session data and encodes it
                $filehandle = fopen("C:\Users\bzmor\Class Code\Website\Website-StrokeOfGenius\Website\sessions\sessions.txt", "w");//opens the file for writing
                fwrite($filehandle, $session_data);//writes the session data to the file    
                fclose($filehandle);//closes the file
                header("Location: products.php");//redirects to the products page
            } else {
                echo "<p>Invalid username and/or password.</p>";
            }
        }
        ?> -->
    <form method="POST" action="response.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>


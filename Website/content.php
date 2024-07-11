<!-- checks if the user is logged in and displays the content if they are or error if not -->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Content</title>
</head>
<?php
    require_once "header.php";
    ?>
<body>
<?php
if(isset($_SESSION["LoggedIn"]) && $_SESSION["LoggedIn"] == true) {//checks if the user is logged in
    $username = isset($_COOKIE["username"]) ? $_COOKIE["username"] : "Guest";
    echo "<h1>Welcome, $username!</h1>";
    echo "<p>Here is your content.</p>";
} else {
    echo "<h1>Access Denied</h1>";
    echo "<p>Please log in.</p>";
header("Location: login.php");//redirects to the login page
}
?>


</body>

</html>
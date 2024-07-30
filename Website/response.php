<!-- validates the login information and sets a cookie and session variable if the login is valid -->
<?php
session_start(); //starts the session

$servername = "localhost";  
$username = "root";    
$password = "";     
$dbname = "StrokeOfGeniusDB";  

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
echo "Connected successfully";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$is_valid_login = false; //sets the variable to false

$username = $_POST["username"]; //gets the username from the form
$password = $_POST["password"]; //gets the password from the form 


$sql = "SELECT username FROM accountinfo WHERE username = '" . $username . "' AND password = '" . $password . "';"; // SQL statement to select the username and password from the database
$result = $conn->query($sql); //executes the SQL statement
if ($result->num_rows > 0) { //if there are more than 0 rows returned it means that it is a valid login
    $is_valid_login = true; //sets the variable to true
}
# if the username is 'admin' and the password is 'morgulis' then go to the admin page called  admin.php
if ($username == "admin" && $password == "morgulis") {
    setcookie("username", $username, time() + 30); //sets a cookie that has the username (expires in 10 seconds)
    header("Location: admin.php");
    exit();
}
$conn->close(); //closes the connection to the database


if ($is_valid_login) {
    setcookie("username", $username, time() + 7200); //sets a cookie that has the username (expires in 2 hours)
    
    $_SESSION["LoggedIn"] = true; //sets the session variable of logged in to true
    echo "<a href='content.php'>Continue to content</a>";
    
    // header("Location: content.php"); //redirects to the content page
    exit(); //exits the script
} else {
    $_SESSION["LoggedIn"] = false; //sets the session variable of logged in to false
    header("Location: login.php"); //redirects to the login page
    echo "<p>Invalid username and/or password.</p>"; //displays an error message
    echo "<a href='login.php'>Try again</a>"; //displays a link to try again

}
?>
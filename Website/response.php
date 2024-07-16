<!-- validates the login information and sets a cookie and session variable if the login is valid -->
<?php 
session_start();

// $valid_credentials = [
//     "bzm" => "bzm",
//     "binyomin" => "morgulis",
//     "william" => "feller",
//     "admin" => "hello"
// ];
$valid_usernames = ["bzm", "binyomin", "william", "admin"];
$valid_passwords = ["bzm", "morgulis", "feller", "hello"];

$username = $_POST["username"]; //gets the username from the form
$password = $_POST["password"]; //gets the password from the form



$is_valid_login = false;

foreach ($valid_usernames as $index => $valid_username) {
    if ($username == $valid_username && $password == $valid_passwords[$index]) {
        $is_valid_login = true;
        break;
    }
}

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
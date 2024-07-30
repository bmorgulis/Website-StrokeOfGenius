<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"] !== true) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

// Check if the logged-in user is the admin
if (!isset($_COOKIE["username"]) || $_COOKIE["username"] !== "admin") {
    echo "<p>Access denied. You do not have permission to access this page.</p>";
    echo "<a href='login.php'>Go to login page</a>";
    exit();
}

require_once '../mysqli_connect.php';

$query = "Select userid, username, password, fname, lname, email, address from accountinfo ";
$response = @mysqli_query($dbc, $query);

if($response){
    echo '<table align="left"
    cellspacing="5" cellpadding="8">
    <tr><td align="left"><b>User ID</b></td>
    <td align="left"><b>Username</b></td>
    <td align="left"><b>Password</b></td>
    <td align="left"><b>First Name</b></td>
    <td align="left"><b>Last Name</b></td>
    <td align="left"><b>Email</b></td>
    <td align="left"><b>Address</b></td></tr>';

    while($row = mysqli_fetch_array($response)){
        echo '<tr><td align="left">' .
        $row['userid'] . '</td><td align="left">' .
        $row['username'] . '</td><td align="left">' .
        $row['password'] . '</td><td align="left">'.
        $row['fname'] . '</td><td align="left">' .
        $row['lname'] . '</td><td align="left">' .
        $row['email'] . '</td><td align="left">' .
        $row['address'] . '</td><td align="left">';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo "Couldn't issue database query<br />";
    echo mysqli_error($dbc);
}
    mysqli_close($dbc);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Get All User's Info</title>
    </head>
    <body>
        <button onclick="window.location.href='index.php'">Back to Home</button>
        <!-- timmer that will redirect to the index.php page after 30 seconds -->
        <script>
            setTimeout(function(){
                window.location.href = 'login.php';
            }, 30000);
        </script>
    </body>
</html>



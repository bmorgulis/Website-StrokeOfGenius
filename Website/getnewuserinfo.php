<?php
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
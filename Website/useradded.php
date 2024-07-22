<?php
    require_once "header.php"; 
    ?>

<html>
    <head>
        <title>Add User</title>
    </head>
    <body id="useraddedpage">
        <?php
        require_once '../mysqli_connect.php';
if (isset($_POST['submit'])) {
    $data_missing = [];
        switch(true) {
            case empty($_POST['f_name']):
                $data_missing[] = 'First Name';
                break;
            default:
                $f_name = trim($_POST['f_name']);
                break;
        }
        
        switch(true) {
            case empty($_POST['l_name']):
                $data_missing[] = 'Last Name';
                break;
            default:
                $l_name = trim($_POST['l_name']);
                break;
        }
        
        switch(true) {
            case empty($_POST['email']):
                $data_missing[] = 'Email';
                break;
            default:
                $email = trim($_POST['email']);
                break;
        }
        
        switch(true) {
            case empty($_POST['address']):
                $data_missing[] = 'Address';
                break;
            default:
                $address = trim($_POST['address']);
                break;
        }
       


        if(empty($data_missing)){
            require_once '../mysqli_connect.php';
            $query = "INSERT INTO accountinfo (fname, lname, email, address) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($dbc, $query);
            mysqli_stmt_bind_param($stmt, "ssss", $f_name, $l_name, $email, $address);
            mysqli_stmt_execute($stmt);
            $affected_rows = mysqli_stmt_affected_rows($stmt);
            if($affected_rows == 1){
                echo 'User Entered. Thank you for signing up.<br />';
                # print out only the currect users data from the database that they just entered
                $query = "Select userid, fname, lname, email, address from accountinfo where email = ?";
                $stmt = mysqli_prepare($dbc, $query);
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $userid, $fname, $lname, $email, $address);
                mysqli_stmt_fetch($stmt);
                echo '<table align="left" id="newusertable"
                cellspacing="5" cellpadding="8">
                <tr><td align="left"><b>User ID</b></td>
                <td align="left"><b>First Name</b></td>
                <td align="left"><b>Last Name</b></td>
                <td align="left"><b>Email</b></td>
                <td align="left"><b>Address</b></td></tr>';
                echo '<tr><td align="left">' .
                $userid . '</td><td align="left">' .
                $fname . '</td><td align="left">' .
                $lname . '</td><td align="left">' .
                $email . '</td><td align="left">' .
                $address . '</td><td align="left">';
                echo '<br></tr>';
                echo '</table>';
    



                mysqli_stmt_close($stmt);
                mysqli_close($dbc);
            } else {
                echo 'Error Occurred<br />';
                echo mysqli_error($dbc);
                mysqli_stmt_close($stmt);
                mysqli_close($dbc);
            }
        } else {
            echo 'You need to enter the following data<br />';
            foreach($data_missing as $missing){
                echo "$missing<br />";
            }
        }
}

?>
</html>

<?php include "footer.php"; ?>
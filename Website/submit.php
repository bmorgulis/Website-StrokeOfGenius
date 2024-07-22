<?php
require_once 'mysqli_connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = htmlspecialchars($_POST['f_name']);
    $last_name = htmlspecialchars($_POST['l_name']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $password = htmlspecialchars($_POST['pass']);
    $confirm_password = htmlspecialchars($_POST['confirm_pass']);
    $gender = htmlspecialchars($_POST['gender']);
    $USresident = isset($_POST['USresident']) ? "Yes" : "No";
    $birthday_month = htmlspecialchars($_POST['month']);
    $birthday_day = htmlspecialchars($_POST['day']);
    $birthday_year = htmlspecialchars($_POST['year']);

    if ($birthday_month && $birthday_day && $birthday_year) {
        $birthday = "$birthday_month-$birthday_day-$birthday_year";
    } else {
        $birthday = "Not provided";
    }
    if($password !== $confirm_password){
        header('Location: sign_up.php?error=password_mismatch');
        exit();
    }

    $query = "INSERT INTO accountinfo (fname, lname, email, address)
    VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($dbc, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $first_name, $last_name, $email, $address);
    mysqli_stmt_execute($stmt);
    $affected_rows = mysqli_stmt_affected_rows($stmt);
    if($affected_rows == 1){
        echo 'User Entered';
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
?>

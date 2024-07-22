<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = htmlspecialchars($_POST['f_name']);
    $last_name = htmlspecialchars($_POST['l_name']);
    $email = htmlspecialchars($_POST['email']);
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
    
     
//     echo "<h1>Successful</h1>";
//     echo "First Name: $first_name<br>";
//     echo "Last Name: $last_name<br>";
//     echo "Email: $email<br>";
//     echo "Gender: $gender<br>";
//     echo "US Resident: $USresident<br>";
//     echo "Birthday: $birthday<br>";
// } else {
//     echo "Unsuccessfull. Try again.";
}
?>

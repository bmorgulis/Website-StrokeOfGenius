<?php
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->SMTPDebug=4; //this is very verbose, just for testing, change to 0
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'strokeofgeniuswebsite@gmail.com';
$mail->Password = 'qiifmhjyqoglglon';
$mail->setFrom('your-email@gmail.com');
$mail->addAddress('strokeofgeniuswebsite@gmail.com');
$mail->Subject = 'Hello from PHPMailer!';
$mail->Body = 'This is a test.';
//send the message, check for errors
if (!$mail->send()) {
    echo "ERROR: " . $mail->ErrorInfo;
} else {
    echo "SUCCESS";
}
?>
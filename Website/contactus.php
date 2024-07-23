<?php
    require_once "header.php"; 
    ?>
<!-- sendemail.php is connected to this page -->
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body id="contact_container">
    <center>
    <h4 class="sent-notification"></h4>    
    <form id="myForm">
        <h1 id="contactheader">Contact Us</h1>

        <label>Name</label>
        <input id="name" type="text" placeholder="Enter Name">
        <br><br>
        <label>Email</label>
        <input id="email" type="text" placeholder="Enter Email">
        <br><br>
        <label>Subject</label>
        <input id="subject" type="text" placeholder="Enter Subject">
        <br><br>
        <p>Message</p>
        <textarea id="body" rows="10" placeholder="Type Message" class="contacttext"></textarea><br><br>
        <button type="button" onclick="sendEmail()" value="Send an Email">Submit</button>


    </form></center>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript">
        function sendEmail(){
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)){
                $.ajax({
                    url: 'sendEmail.php',
                    method: 'POST',
                    dataType: 'json',
                    data:{
                        name: name.val(),
                        email: email.val(),
                        subject: subject.val(),
                        body: body.val()
                    }, success: function(response){
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Email sent successfully");
                        alert('Email sent successfully');
                    }
                });
            }
        }
        function isNotEmpty(caller){
            if(caller.val() == ""){
                caller.css('border', '1px solid red');
                return false;
            }else{
                caller.css('border', '');
                return true;
            }
        }

</script>




</html>
<?php include "footer.php"; ?>
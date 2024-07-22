<html>
    <head>
        <title>Add User</title>
    </head>
    <body>
        <?php
if(isset($_POST['submit'])){
    $data_missing = array();
        if(empty($_POST['f_name'])){
            $data_missing[] = 'First Name';
        } else {
            $f_name = trim($_POST['f_name']);
        }
        if(empty($l_name)){
            $data_missing[] = 'Last Name';
        } else {
            $l_name = trim($_POST['l_name']);
        }
        if(empty($email)){
            $data_missing[] = 'Email';
        } else {
            $email = trim($_POST['email']);
        }
        if(empty($address)){
            $data_missing[] = 'Address';
        } else {
            $address = trim($_POST['address']);
        }


        if(empty($data_missing)){
            require_once('../mysqli_connect.php');
            $query = "INSERT INTO accountinfo (fname, lname, email, address) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($dbc, $query);
            mysqli_stmt_bind_param($stmt, "ssss", $f_name, $l_name, $email, $address);
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
}

        ?>
        <form action="getnewuserinfo" method="post">
        <h3>Create A New Account</h3>
        <label for="f_name">First Name:  </label>
        <input type="text" id="f_name" name="f_name" value="" required><br><br>
        
        <label for="l_name">Last Name:  </label>
        <input type="text" id="l_name" name="l_name" value="" required><br><br>
        
        <label for="email">Email Address:  </label>
        <input type="text" id="email" name="email" value="" required><br><br>
        
        <label for="password">Password:  </label>
        <input type="password" id="pass" name="pass" value="" required><br><br>
        
        <label for="confirm_password">Confirm Password:  </label>
        <input type="password" id="pass" name="confirm_pass" value="" required><br><br>
       
        
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" required>
        <label for="male">Male</label>
        <input type="radio" name="gender" value="Female" required>
        <label for="male">Female</label><br>    
        
        <input type="CHECKBOX" name="USresident" checked>I am a US resident.<br><br>
       
        <label for="birthday">Birthday:</label>
        <select id="month" name="month" required>
            <option value="">Month</option>
            <?php
                for ($i = 1; $i <= 12; $i++) {
                    echo "<option value=\"$i\">$i</option>";
                }
            ?>
        </select>
            
        <select id="day" name="day" required>
            <option value="">Day</option>
            <?php
                for ($i = 1; $i <= 31; $i++) {
                    echo "<option value=\"$i\">$i</option>";
                }
            ?>
        </select>
        
        <select id="year" name="year">
            <option value="">Year</option>
            <?php
                for ($i = date("Y"); $i >= 1950; $i--) {
                    echo "<option value=\"$i\">$i</option>";
                }
            ?>    
        </select><br><br>
 
        <input type="submit" name='submit' value="Submit">
        
        
        </form>
</html>
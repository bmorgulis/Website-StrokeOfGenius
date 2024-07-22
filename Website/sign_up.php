<?php
    require_once "header.php"; 
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>    
        <link rel="stylesheet" type="text/css" href="sign_up.css">       
    </head>
    
    <body>
        <form action="getnewuserinfo" method="post">
        <h3>Create A New Account</h3>
        <label for="f_name">First Name:  </label>
        <input type="text" id="f_name" name="f_name" value="" required><br><br>
        
        <label for="l_name">Last Name:  </label>
        <input type="text" id="l_name" name="l_name" value="" required><br><br>
        
        <label for="email">Email Address:  </label>
        <input type="text" id="email" name="email" value="" required><br><br>

        <label for="address">Address:  </label>
        <input type="text" id="address" name="address" value="" required><br><br>
        
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
        
    </body>
    
</html>
<?php include "footer.php"; ?>
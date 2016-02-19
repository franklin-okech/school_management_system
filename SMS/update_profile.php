<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Complete Profile</title>
        <link rel="stylesheet" href="css/forms_style.css">
    <h1>Welcome </h1>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        
        <div id="fr_profile">
            <form action="update_profile.php" method="POST" name="frmprofile" id="frmprofile">
            <fieldset><legend>Complete Your Profile</legend>
                <label>First Name</label><br>
            <input type="text" name="txtFname" id="txt_Fname" required="required" maxlength="30" size="30"><br><br>
            <label>Last Name</label><br>
            <input type="text" name="txtLname" id="txt_Lname" required="required" size="30" maxlength="30"><br><br>
            <label>Email</label><br>
            <input type="text" name="txtEmail" id="txt_Uname" required="required" size="30" maxlength="30"><br><br>
            <label>Mobile Phone</label><br>
            <input type="text" name="txtMobile" id="txt_Mobile" required="required" size="20" maxlength="10"><br><br>
            <label>National ID</label><br>
            <input type="text" name="txtID" id="IDtxt" required="required" size="30" maxlength="30"><br><br>
            <select name="cmbGender" id="Gender">
                <option value="0">I am</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <br><br>
            <label>Address</label><br>
            <textarea cols="30" rows="6" name="txaAddress" id="Addresstxa"></textarea><br><br>
            <label>Postal Code</label><br>
            <input type="text" name="txtPostal" id="Postaltxt" required="required" size="30" maxlength="30"><br><br>
            
            <input type="submit" name="btnSubmit" id="btn_Submit" value="Upadate">
            </fieldset>
            
            
            
        </form>
        </div>
    </body>
</html>

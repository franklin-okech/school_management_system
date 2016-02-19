<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>admin set up</title>
        <link rel="stylesheet" href="css/forms_style.css">
    <h1 align="center">Welcome to admin set up page</h1>
    </head>
    <body> 
        
        <div id="adm_frm">
            <form action="register_admin.php" method="POST" name="frmAdmin" id="frm_Admin">
            <fieldset><legend>Please fill all field</legend>
                <label>First Name</label><br>
            <input type="text" name="txtFname" id="txt_Fname" required="required" maxlength="30" size="30"><br><br>
            <label>Last Name</label><br>
            <input type="text" name="txtLname" id="txt_Lname" required="required" size="30" maxlength="30"><br><br>
            <label>Email</label><br>
            <input type="text" name="txtEmail" id="txt_Uname" required="required" size="30" maxlength="30"><br><br>
            <label>Mobile Phone</label><br>
            <input type="text" name="txtMobile" id="txt_Mobile" required="required" size="20" maxlength="10"><br><br>
            <label>Username</label><br>
            <input type="text" name="txtUname" id="txt_Uname" required="required" size="30" maxlength="30"><br><br>
            <label>Create Password</label><br>
            <input type="password" name="txtPasswd" id="txt_Passwd" required="required" size="30" maxlength="30"><br><br>
            <label>Confirm Password</label><br>
            <input type="password" name="txtConfirmPwd" id="txt_ConfirmPwd" required="required" size="30" maxlength="30"><br><br>
            <input type="submit" name="btnSubmit" id="btn_Submit" value="Create Account">&nbsp;&nbsp;<a href="Admin_Login.php">Have Account ?</a>
            </fieldset>
            
            
            
        </form>
        </div>
    </body>
</html>

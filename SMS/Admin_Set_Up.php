<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Connect.inc.php';
        if(isset($_POST['submit'])){
            //set form variables
            $txtID=$_POST['txtId'];
            $txtFname=$_POST['txtFname'];
            $txtMname=$_POST['txtMname'];
            $txtLname=$_POST['txtLname'];
            $txtSelected_Gender=$_POST['sex'];
            $txtEmail=$_POST['txtEmail'];
            $txtUsername=$_POST['txtUname'];
            $txtPass=$_POST['pwdPass'];
            $txtConfirmPwd=$_POST['pwdConfirm'];
           
            //check if the passwords match
            if($txtPass===$txtConfirmPwd){
                $query="INSERT INTO tbladmin_detail VALUES('$txtID','$txtFname','$txtMname','$txtLname','$txtSelected_Gender','$txtEmail','$txtUsername','$txtPass')";
                mysql_query($query);
                echo 'saved';
            } else{
                echo mysql_error();
            }
                
        }
        ?>
        
        <form action="Admin_Set_Up.php" method="POST">
            <fieldset>
                <table>
                <legend>Please fill in all fields</legend>
                
                    <tr><td>ID: </td><td><input type="text" name="txtId" required="required">&nbsp;<label style='color:red'>*</label></td></tr>
                    <tr><td>First Name: </td><td><input type="text" name="txtFname" required="required">&nbsp;<label style='color:red'>*</label></td></tr>
                <tr><td>Middle Name: </td><td><input type="text" name="txtMname" required="required">&nbsp;<label style='color:red'>*</label></td></tr>
                <tr><td>Last Name: </td><td><input type="text" name="txtLname" required="required">&nbsp;<label style='color:red'>*</label></td></tr>
                <tr><td>Gender: </td><td><input type="radio" name="sex" value="Male" required="required">Male&nbsp;
                    <input type="radio" name="sex" value="Female" required="required">Female&nbsp;&nbsp;&nbsp;&nbsp;<label style='color:red'>*</label></td></tr>
                <tr><td>Email: </td><td><input type="Email" name="txtEmail" required="required">&nbsp;<label style='color:red'>*</label></td></tr>
                <tr><td>Username: </td><td><input type="text" name="txtUname" required="required">&nbsp;<label style='color:red'>*</label></td></tr>
                <tr><td>Create Password: </td><td><input type="password" name="pwdPass" required="required">&nbsp;<label style='color:red'>*</label></td></tr>
                <tr><td>Confirm Password: </td><td><input type="password" name="pwdConfirm" required="required">&nbsp;<label style='color:red'>*</label></td></tr>
                <tr><td></td><td><input type="submit" value="submit" id="btnSubmit" name="submit"</td></tr>
                </table>
                
            </fieldset>
        </form>
    </body>
</html>

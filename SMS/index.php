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
        if(isset($_POST['btnSubmit'])){
            $txtUsername=  mysql_escape_string($_POST['txtUsername']);
            $txtPasswd= mysql_escape_string(md5($_POST['pwdPass']));
            if(!empty($txtUsername) && !empty($txtPasswd)){
                $query="SELECT USERNAME,PASSWORD FROM tbldefaultlogin WHERE USERNAME='".$txtUsername."' AND PASSWORD='".$txtPasswd."'";
                $query_run=  mysql_query($query);
                $query_num_row=  mysql_num_rows($query_run);
                if($query_num_row==1){
                    echo 'success';
                }else{
                    echo 'failed to log in';
                }
                
            }  else {
                echo 'all fields required';
            }
        }
        
        ?>
        <form action="index.php" method="POST" >
            <fieldset>
    <legend>Login</legend>
    Username:  <input type="text" name="txtUsername" required="required"><br><br>
    Password:  <input type="password" name="pwdPass" required="required"><br><br>
            <input type="submit" name="btnSubmit" value="Login">
            </fieldset>
        </form>
    </body>
</html>

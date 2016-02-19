<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Log in</title>
<!--        <link rel="stylesheet" href="css/style.css">-->
    </head>
    <body>
        <?php
        session_start();
        require_once 'dbConnect.php';
        if(isset($_POST['btnSubmit'])){
            $txtUsername=  mysql_escape_string($_POST['txtUsername']);
            $txtPasswd= mysql_escape_string(md5($_POST['txtPasswd']));
            if(!empty($txtUsername) && !empty($txtPasswd)){
                $query="SELECT Id FROM admin_account WHERE Username='".$txtUsername."' AND Password='".$txtPasswd."'";
                $query_run=  mysql_query($query);
                $query_num_row=  mysql_num_rows($query_run);
                if($query_num_row==1){
                    echo  'success';
                    $_SESSION['User']=$txtUsername;
                    echo 'You are loged as  '.$_SESSION['User'];
                }else{
                    echo 'Wrong username or password';
                }
                
            }  else {
                echo 'all fields required';
            }
        }
        
        ?>
        <div class="wrapper">
	<div class="container">
		
		
            <form class="form" action="Login_admin.php" method="POST">
                    <input type="text" placeholder="Username" name="txtUsername" id="Uname" required="required">
                    <input type="password" placeholder="Password" name="txtPasswd" id="Passwd" required="required">
                    <button type="submit" id="login-button" name="btnSubmit">Login</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
<!--    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>-->
        
      
<!--        <form action="index.php" method="POST" >
            <fieldset>
    <legend>Login</legend>
    Username:  <input type="text" name="txtUsername" required="required"><br><br>
    Password:  <input type="password" name="pwdPass" required="required"><br><br>
            <input type="submit" name="btnSubmit" value="Login">
            </fieldset>
        </form>-->
    </body>
</html>

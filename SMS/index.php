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
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <div class="wrapper">
	<div class="container">
		<h1>Welcome to FDM School Managers</h1>
		
                <form class="form" action="defaultlogin.php" method="POST">
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

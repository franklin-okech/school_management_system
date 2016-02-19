<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>School set up</title>
        <style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=url], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
textarea {
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    
}

input[type=submit]:hover {
    background-color: #45a049;
}
fieldset{
     border:1px solid #ccc;
     -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    -khtml-border-radius: 10px;
     border-radius: 10px;
    
}
legend{
    font-family : Arial, sans-serif;
   font-size: 1.3em;
   font-weight:bold;
   color:#333;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}
</style>
    </head>
    <body>
        <?php
        // put your code here
        ?>
<!--        <h3 align="center">Welcome to School Information update</h3>-->

<div>
    <form action="Add_School.php" method="POST">
      <fieldset><legend>School Bio data</legend>
     <label for="lblSchl_Code">School Code</label>
     <input type="text" id="Code_schl" name="txtSchl_Code" required="required">

    <label for="lblSchl_Name">School Name</label>
    <input type="text" id="SchlName" name="txtSchlName" required="required" maxlength="30">

    <label for="country">Motto</label>
    <input type="text" id="Motto" name="txtMotto" required="required" maxlength="25">
    
    <label for="Schl_Logo">Logo</label><br>
    <input type="file" name="imgLogo" id="Logo_img"><br><br>
    
    <label for="email_addr">Email</label>
    <input type="email" id="addr_email" name="email_addr" required="required" maxlength="30">
    
    <label for="Website_URL">Website URL</label>
    <input type="url" id="url_website" name="web_url">
    
      </fieldset>
      <fieldset>
          <legend>Please fill School Location Details</legend>
          <label for="postal_addr">Postal Address</label><br>
          <textarea rows="6" cols="30" required="required" placeholder="Address here..." name="txaAddres"></textarea><br><br>
          <label for="Postal_code">Postal Code</label><br>
          <input type="text" id="PostalCode" name="txtPostalCode" required="required">
          <label for="Town">Town</label><br>
          <input type="text" id="Town" name="txtTown" required="required">
          <input type="submit" value="Submit" name="btnSubmit">
          
      </fieldset>
  </form>
        
</div>

</body>
</html>
    </body>
</html>

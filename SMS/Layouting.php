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
         <style>
#header {
    background-color:#606060;
    color:white;
    text-align:left;
    padding:5px;
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:400px;
    width:150px;
    float:left;
    padding:5px;
    
}
#nav a{
    text-decoration: none;
}
#section {
    width:900px;
/*    float:left;*/
    padding:10px;
}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:right;
    padding:5px;
}

/*menu styeling*/
#centeredmenu {
   float:left;
   width:100%;
   background:#fff;
   border-bottom:4px solid #000;
   overflow:hidden;
   position:relative;
   
}
#centeredmenu ul {
   clear:left;
   float:left;
   list-style:none;
   margin:0;
   padding:50;
   position:relative;
   left:79%;
   text-align:right;
}
#centeredmenu ul li {
   display:block;
   float:left;
   list-style:none;
   margin:0;
   padding:50;
   position:relative;
   right:50%;
}
#centeredmenu ul li a {
   display:block;
   margin:0 0 0 1px;
   padding:6px 10px;
   background:#ddd;
   color:#000;
   text-decoration:none;
   line-height:1.3em;
}
#centeredmenu ul li a:hover {
   background:#369;
   color:#fff;
}
#centeredmenu ul li a.active,
#centeredmenu ul li a.active:hover {
   color:#fff;
   background:#000;
   font-weight:bold;
}

//style the navigation bar
ul#list-nav {
  list-style:none;
  margin:20px;
  padding:0;
  width:525px
}

ul#list-nav li {
  display:inline
}

ul#list-nav li a {
  text-decoration:none;
  padding:5px 0;
  width:100px;
  background:#485e49;
  color:#eee;
  float:left;
  text-align:center;
  border-left:1px solid #fff;
}

ul#list-nav li a:hover {
  background:#a2b3a1;
  color:#000
}

#tbl_td{
width:100%;
background-color:teal;
}

#tbl_details{
    width:600px;
}
</style>
    </head>
    <body>
        <?php
        // put your code here
        ?>

<div id="header">
    <a href="#"> <img src="img/sms_logo.png"alt="sms" style="float: left;margin-right: 20px;"></a>
<h1>School Management System<br></h1>
<span><h6>Best School Managers<h6></span>
            <div id="centeredmenu">
   <ul id="list-nav">
  <li><a href="#">Home</a></li>
  <li><a href="#">About Us</a></li>
  <li><a href="#">Services</a></li>
  <li><a href="#">Contact</a></li>
  <li><a href="#">Profile</a></li>
</ul>
</div>




</div>

<div id="nav">
    <a href="#">Administration</a><br>
    <a href="#">Admission</a><br>
    <a href="#">Finance</a><br>
    <a href="#">Examinations</a><br>
    <a href="#">Communication</a><br>
</div>

<div id="section">
<?php
        require_once 'dbConnect.php';
$sql="SELECT * FROM school_details";
if($result=  mysql_query($sql)){
    if(mysql_num_rows($result)>0){
        while ($row=  mysql_fetch_array($result)){
            echo "<table border='1' id='tbl_details'>";
            echo "<tr>";
            echo "<td id='tbl_td'>";echo "School Name";echo"</td>";
            echo "<td id='tbl_td'>";echo $row['Name'];echo"</td>";
            echo "</tr>";
            
             echo "<tr>";
            echo "<td id='tbl_td'>";echo "Motto";echo"</td>";
            echo "<td id='tbl_td'>";echo $row['Motto'];echo"</td>";
            echo "</tr>";
            
             echo "<tr>";
            echo "<td id='tbl_td'>";echo "Email";echo"</td>";
            echo "<td id='tbl_td'>";echo $row['Email'];echo"</td>";
            echo "</tr>";
            
             echo "<tr>";
            echo "<td id='tbl_td'>";echo "Website";echo"</td>";
            echo "<td id='tbl_td'>";echo $row['Website'];echo"</td>";
            echo "</tr>";
            
             echo "<tr>";
            echo "<td id='tbl_td'>";echo "Address";echo"</td>";
            echo "<td id='tbl_td'>";echo $row['Address'];echo"</td>";
            echo "</tr>";
            
             echo "<tr>";
            echo "<td id='tbl_td'>";echo "Postal Code";echo"</td>";
            echo "<td id='tbl_td'>";echo $row['Postal_Code'];echo"</td>";
            echo "</tr>";
            
             echo "<tr>";
            echo "<td id='tbl_td'>";echo "Town";echo"</td>";
            echo "<td id='tbl_td'>";echo $row['Town'];echo"</td>";
            echo "</tr>";
            
            echo "</table>";
        }
    }
    
}
?>
</div>


<div id="footer">
Copyright © franklin.com
</div>

 
    </body>
</html>

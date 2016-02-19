<?php
require_once 'dbConnect.php';

if(isset($_POST['btnSubmit'])){
    //declare POST variables
    $Schl_Code=$_POST['txtSchl_Code'];
    $Schl_Name= mysql_escape_string(strtoupper($_POST['txtSchlName']));
    $Schl_Motto=mysql_escape_string(strtolower($_POST['txtMotto']));
    $Schl_Logo=$_POST['imgLogo'];
    $Schl_Email=mysql_escape_string(strtolower($_POST['email_addr']));
    $Schl_url=mysql_escape_string(strtolower($_POST['web_url']));
    $Schl_Address=mysql_escape_string(strtoupper($_POST['txaAddres']));
    $Schl_Postal_Code=  mysql_escape_string($_POST['txtPostalCode']);
    $Schl_Town=mysql_escape_string(strtoupper($_POST['txtTown']));
    
    $query="INSERT INTO school_details VALUES('".$Schl_Code."','".$Schl_Name."',"
            . "'".$Schl_Motto."','".$Schl_Logo."','".$Schl_Email."','".$Schl_url."',"
            . "'".$Schl_Address."','".$Schl_Postal_Code."','".$Schl_Town."',1)";
    if($query_run=  mysql_query($query)){
        echo 'School Information Updated Successfully';
    }else{
        echo 'erro'.  mysql_error();
    }
    
    
    
    
}


?>


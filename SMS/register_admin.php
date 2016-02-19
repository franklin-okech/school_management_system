<?php
        // put your code here
        
        //check if the form is set
        //require the config file
        require_once 'dbConnect.php';
        if(isset($_POST['btnSubmit'])){
            
            //declare post variables
            $txtFname= strtoupper(mysql_escape_string($_POST['txtFname']));
            $txtLname= strtoupper(mysql_escape_string($_POST['txtLname']));
            $txtEmail=  strtolower(mysql_escape_string($_POST['txtEmail']));
            $txtMobile= mysql_escape_string($_POST['txtMobile']);
            $txtUname= mysql_escape_string($_POST['txtUname']);
            $pwdPass= mysql_escape_string($_POST['txtPasswd']);
            $cpasswd= mysql_escape_string($_POST['txtConfirmPwd']);
            
            if($pwdPass==$cpasswd){
                    if(strlen($pwdPass)<6){
                    echo 'short';

                    }
                        else{

                //create query
                 $pwdEncrpt=  md5($pwdPass)   ;        

                $query="INSERT INTO admin_account VALUES"
                        . "(NULL,'".$txtFname."','".$txtLname."','".$txtEmail."','".$txtMobile."','".$txtUname."','".$pwdEncrpt."')";
                //execute the query
                if($query_run=  mysql_query($query)){
                    echo "<script>alert('Registration successfully');</script>";
                    include 'Admin_Login.php';

                }else{
                    echo 'Oops! error--> '.mysql_error();
                        }

                }
                         
            
           }else{
            echo 'password must be atleast six characters';
                }
             
            
        }
        ?>

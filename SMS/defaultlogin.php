<?php
        require_once 'dbConnect.php';
        if(isset($_POST['btnSubmit'])){
            $txtUsername=  mysql_escape_string($_POST['txtUsername']);
            $txtPasswd= mysql_escape_string(md5($_POST['txtPasswd']));
            if(!empty($txtUsername) && !empty($txtPasswd)){
                $query="SELECT USERNAME,PASSWORD FROM tbldefaultlogin WHERE USERNAME='".$txtUsername."' AND PASSWORD='".$txtPasswd."'";
                $query_run=  mysql_query($query);
                $query_num_row=  mysql_num_rows($query_run);
                if($query_num_row==1){
                    echo 'Log in successful, Please proceed with the account set up';
                    include 'admin_setup.php';
                }else{
                    echo 'failed to log in';
                }
                
            }  else {
                echo 'all fields required';
            }
        }
        
        ?>

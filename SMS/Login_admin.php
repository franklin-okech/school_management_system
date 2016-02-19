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
                    echo  'success ';
                    $_SESSION['User']=$txtUsername;
                    echo 'You are logged in  as  '.$_SESSION['User'];
                }else{
                    echo 'Wrong username or password';
                }
                
            }  else {
                echo 'all fields required';
            }
        }
        
        ?>


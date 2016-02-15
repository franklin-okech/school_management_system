<?php
    $Host='localhost';
    $Db='School_Management_System';
    $Username='root';
    $Password='swatznigger';
    $Connect=  mysql_connect($Host,$Username,$Password);
    $Select_Db=  mysql_select_db($Db);
    if(!$Connect=  mysql_connect($Host,$Username,$Password) or(!$Select_Db=  mysql_select_db($Db))){
        echo mysql_error();
    }else{
        
    }
    


?>




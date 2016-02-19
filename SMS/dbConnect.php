<?php
    $Host='localhost';
    $Db='School_Management_System';
    $Username='root';
    $Password='swatznigger';
    if(!mysql_connect($Host,$Username,$Password)){
        die('Oops. Connection problem !-->'.mysql_error());
    }
    if(!mysql_select_db($Db)){
        die('Oops. Database selection problem !-->'.mysql_error());
    }
    


?>




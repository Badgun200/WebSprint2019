<?php
    require 'constants.php';
    
    $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Nelze se p�ipojit k datab�zi");
    
    if($con->connect_error){
        die('Database error:' .$con->connect_error);
    }
     
?>
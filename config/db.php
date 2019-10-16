<?php
    require 'constants.php';
    
    $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Nelze se pøipojit k databázi");
    
    if($con->connect_error){
        die('Database error:' .$con->connect_error);
    }
     
?>
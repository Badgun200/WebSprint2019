<?php
start_session();
$_SESSION['question']=1;
$_SESSION['U']=0;
$_SESSION['Q']=0;
$_SESSION['O']=0;
$_SESSION['R']=0;
header("Location: question.php");
exit();
 ?>

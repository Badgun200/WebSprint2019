<?php
session_start();
$_SESSION['question']=1;
$_SESSION['U']=0;
$_SESSION['Q']=0;
$_SESSION['O']=0;
$_SESSION['R']=0;
echo "session started";
header("Location: ./question.php?login=success");
exit();
 ?>

<?php
session_start();
$_SESSION['Question'] = 1;
$_SESSION['Lang'] = $_POST['lang'];
$_SESSION['U']=0;
$_SESSION['Q']=0;
$_SESSION['O']=0;
$_SESSION['R']=0;
echo "session started";
header("Location: ./question.php?login=success");
exit();
 ?>

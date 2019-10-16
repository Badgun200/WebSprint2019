<?php
session_start();
require "config/db.php";
$_SESSION['Question'] = 1;
$_SESSION['Lang'] = $_POST['lang'];
$_SESSION['U']=0;
$_SESSION['Q']=0;
$_SESSION['O']=0;
$_SESSION['R']=0;

$ques = mysqli_query($con, "SELECT ID from questions");
$count = mysqli_num_rows($ques);
$_SESSION['Questions_Count']=$count;

echo "session started ".$_SESSION['Questions_Count'];
header("Location: ./question.php?login=success");
exit();
 ?>

<?php
session_start();
require "print_question.php";
require "config/db.php";

updateSums($_POST["answer"], $_SESSION["Question"]);
$select = mysqli_query($con, "SELECT * FROM questions");
$count = mysqli_num_rows($select);

if($_SESSION["Question"]==$count){
header("Location: result.php");
exit();
}
else{
$_SESSION["Question"]+=1;
header("Location: question.php");
exit();
}
 ?>

<?php
session_start();
require "config/db.php";

updateSums($_POST["answer"], $_SESSION["Question"]);

if($_SESSION["Question"]==$_SESSION["Questions_Count"]){
header("Location: result.php");
exit();
}
else{
$_SESSION["Question"]+=1;
header("Location: question.php");
exit();
}

function updateSums($answ, $quest_id) {
  require "config/db.php";
  if($_SESSION['Lang'] == 'EN') {
    $vals = mysqli_query($con, "SELECT vA, vB, vC, vD FROM answersEN WHERE ID=".$quest_id);
  }
  else {
    $vals = mysqli_query($con, "SELECT vA, vB, vC, vD FROM answers WHERE ID=".$quest_id);
  }
  $row = mysqli_fetch_row($vals);
  switch($answ) {
    case "A":
      $_SESSION[$row[0]] += 1;
      
      break;
    case "B":
      $_SESSION[$row[1]] += 1;
      break;
    case "C":
      $_SESSION[$row[2]] += 1;
      break;
    case "D":
      $_SESSION[$row[3]] += 1;
      break;
  }
}
 ?>

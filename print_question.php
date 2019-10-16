<?php
  require_once('config/db.php');
  function updateSums($answ, $quest_id) {
    $vals = mysqli_query($con, "SELECT vA, vB, vC, vD FROM answers WHERE ID=".$quest_id);
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

<?php
  require_once('config/db.php')

  $curr_q = $_POST['curr_q']
  $sum = $_POST['sum']

  if()
  $questions = mysqli_query("SELECT question FROM questions WHERE ID=".$curr_q);
  $row = mysqli_fetch_row($row)
  $q = $row[0]
  echo "<div class=\"questions\">".$q."</div>";
  $answers = mysqli_query("SELECT * FROM answers WHERE ID=".$curr_q);
  $answers = mysqli_fetch_row($answers);
  for($i = 1; $i <= 8; $i+=2) {
        echo "<div class=\"answer\">".$answers[$i]."</div>";
    }
?>
<button class="submit">

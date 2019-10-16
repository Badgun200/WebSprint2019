<?php
  $db = mysqli_connect() or die(mysqli_error());

  $questions = mysqli_query("SELECT strings FROM Questions WHERE ID % 5 = 1");

  

?>

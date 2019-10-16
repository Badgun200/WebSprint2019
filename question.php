<!DOCTYPE html>
<?php
session_start();
 ?>
<html lang="en" dir="ltr">
  <?php
require "head.php";
   ?>
  <body>
    <?php
    require "nav.php";
    require "config/db.php";
    require "print_question.php";

    if(isset($_SESSION['Question'])==false){
      $curr_q = 1;
    }
    $curr_q = $_SESSION['Question'];


<<<<<<< HEAD
    echo '<div class="container"> sgdfgds';
    if($_SESSION['Lang'] == 'EN') {
    $question = mysqli_query($con, "SELECT question FROM questionsEN WHERE ID=".$curr_q);}
    else {$question = mysqli_query($con, "SELECT question FROM questions WHERE ID=".$curr_q);}
=======


    echo '<div class="container">';
    if($_SESSION['Lang'] == 'EN') {
    $question = mysqli_query($con, "SELECT question FROM questionsEN WHERE ID=".$curr_q);}
    else {$question = mysqli_query($con, "SELECT question FROM questions WHERE ID=".$curr_q);}

>>>>>>> 47b2016be077e3566268bd393e2bc0505a418e3a
    $row = mysqli_fetch_row($question);
    echo '<h1>'.$row[0].'</h1>';
    if($_SESSION['Lang'] == 'EN') {
    $answers = mysqli_query($con,"SELECT A,B,C,D FROM answersEN WHERE ID=".$curr_q);}
    else {$answers = mysqli_query($con,"SELECT A,B,C,D FROM answers WHERE ID=".$curr_q);}
    $row = mysqli_fetch_row($answers);

    echo '<form action="count.php" method="post">
<<<<<<< HEAD
      <input type="radio" name="answer" value="a" onclick="show(this)">'.$row[0].'<br>
      <input type="radio" name="answer" value="b" onclick="show(this)>'.$row[1].'<br>
      <input type="radio" name="answer" value="c" onclick="show(this)>'.$row[2].'<br>
      <input type="radio" name="answer" value="d" onclick="show(this)>'.$row[3].'<br>';
    echo '<input type="submit" style="visibility:hidden;" id="sub">
=======
      <input type="radio" name="answer" value="a">'.$row[0].'<br>
      <input type="radio" name="answer" value="b">'.$row[1].'<br>
      <input type="radio" name="answer" value="c">'.$row[2].'<br>
      <input type="radio" name="answer" value="d">'.$row[3].'<br>';
    echo '<input type="submit" value="Další otázka">
>>>>>>> 47b2016be077e3566268bd393e2bc0505a418e3a
      </form>
      </div>';
     ?>
     <script type="text/javascript">
      function show() {
      document.getElementById("sub").style.display="block";
      }
     </script>
  </body>
</html>

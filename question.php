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





    echo '<div class="container">';
    if($_SESSION['Lang'] == 'EN') {
    $question = mysqli_query($con, "SELECT question FROM questionsEN WHERE ID=".$curr_q);}
    else {$question = mysqli_query($con, "SELECT question FROM questions WHERE ID=".$curr_q);}

    $row = mysqli_fetch_row($question);
    echo '<h1>'.$row[0].'</h1>';
    if($_SESSION['Lang'] == 'EN') {
    $answers = mysqli_query($con,"SELECT A,B,C,D FROM answersEN WHERE ID=".$curr_q);}
    else {$answers = mysqli_query($con,"SELECT A,B,C,D FROM answers WHERE ID=".$curr_q);}
    $row = mysqli_fetch_row($answers);

    echo '<form action="count.php" method="post">

      <input type="radio" name="answer" value="a" onclick="document.getElementById("sub").style.display="block";)">'.$row[0].'<br>
      <input type="radio" name="answer" value="b" onclick="document.getElementById("sub").style.display="block";)>'.$row[1].'<br>
      <input type="radio" name="answer" value="c" onclick="document.getElementById("sub").style.display="block";)>'.$row[2].'<br>
      <input type="radio" name="answer" value="d" onclick="document.getElementById("sub").style.display="block";)>'.$row[3].'<br>';
    echo '<input type="submit" style="visibility:hidden;" id="sub">

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

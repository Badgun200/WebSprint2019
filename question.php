<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php
require "head.php";
   ?>
  <body>
    <?php
    require "nav.php";
    require "config/db.php";

    echo 'dsfsd';
    if(isset($_SESSION['question'])==false){
      $curr_q = 1;
    }
    $curr_q = $_SESSION['question'];


    echo '<div class="container"> sgdfgds';
    if($_SESSION['Lang'] == 'EN') {
    $question = mysqli_query($con, "SELECT question FROM questionsEN WHERE ID=".$curr_q);}
    else {$question = mysqli_query($con, "SELECT question FROM questions WHERE ID=".$curr_q);}
    $row = mysqli_fetch_row($question);
    echo '<h1>'.$row[0].'</h1>';
    if($_SESSION['Lang'] == 'EN') {
    $answers = mysqli_query($con,"SELECT A,B,C,D FROM answersEN WHERE ID=".$curr_q);}
    else {$answers = mysqli_query($con,"SELECT A,B,C,D FROM answersEN WHERE ID=".$curr_q);}
    $row = mysqli_fetch_row($answers);

    echo '<form action="count.php" method="post">
      <input type="radio" name="answer" value="a">'.$row[0].'<br>
      <input type="radio" name="answer" value="b">'.$row[1].'<br>
      <input type="radio" name="answer" value="c">'.$row[2].'<br>
      <input type="radio" name="answer" value="d">'.$row[3].'<br>';
    echo '<input type="submit">
      </form>
      </div>';
     ?>
  </body>
</html>

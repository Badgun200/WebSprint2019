<?php
require_once "config/db.php";
require_once "print_question.php"

$curr_q = $_SESSION['question'];
if(isset($_SESSION['question'])==false){
  echo 'not';
  $curr_q = 1;
}
updateSums($_POST["answer"], $curr_q)

$question = mysqli_query($con, "SELECT question FROM questions WHERE ID=".$curr_q);
$row = mysqli_fetch_row($question);
echo '<h1>'.$row[0].'</h1>';
$answers = mysqli_query($con,"SELECT A,B,C,D FROM answers WHERE ID=".$curr_q);
$row = mysqli_fetch_row($answers);
echo '<form action="question.php" method="post">
  <input type="radio" name="answer" value="a">'.$row[0].'<br>
  <input type="radio" name="answer" value="b">'.$row[1].'<br>
  <input type="radio" name="answer" value="c">'.$row[2].'<br>
  <input type="radio" name="answer" value="d">'.$row[3].'<br>

  <input type="submit">
  </form>';
 ?>

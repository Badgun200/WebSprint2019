<?php
require_once "config/db.php";
require_once "print_question.php"

$curr_q = $_POST['question'];
if(isset($_POST['question'])==false){
  echo 'not';
  $curr_q = 1;
}
$response = array();
$json = file_get_contents('php://input');
$sums = json_decode($json);
$answer = $_POST[$answer];
$sums = getSums($answer, $curr_q, $sums);
$sendSums = json_encode($sums);


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

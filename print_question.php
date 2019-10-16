<?php
  require_once('config/db.php');
  $curr_q = $_POST['curr_q'];
  $sum = $_POST['sum'];
  echo("<span id=\"curr_q\">".$curr_q."</span><span id=\"sum\">".$sum."</span>");
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


//funkci hodíš odpověď jak char A, B, C, D, pak číslo otázky a současné součty jako slovník; vyplyvne novej slovník
  function getSums($answ, $quest_id, $sums) {
    $vals = mysqli_query($con, "SELECT vA, vB, vC, vD FROM answers WHERE ID=".$quest_id);
    $row = mysqli_fetch_row($vals);
    switch($answ) {
      case "A":
        $sums[$row[0]] += 1;
        break;
      case "B":
        $sums[$row[1]] += 1;
        break;
      case "B":
        $sums[$row[2]] += 1;
        break;
      case "B":
        $sums[$row[3]] += 1;
        break;
    }
    return $sums;
  }
?>
<input class="submit" type="button">Další</input>
<script type="text/javascript">
    document.getElementById("button").onclick = function () {
      var xhr = new XMLHttpRequest();
      xhr.open("POST", url, true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
      var id = document.getElementById('curr_q').value;
      var sum = document.getElementById('sum').value;
      xhr.send("curr_q="+id+"&sum="+sum);
    };
</script>

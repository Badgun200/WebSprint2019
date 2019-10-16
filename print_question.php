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

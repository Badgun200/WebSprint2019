<!DOCTYPE html>
<html lang='cs'>
  <?php require 'head.php'; ?>
  <body>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <?php
        /* require 'config/db.php';
        $sql = "SELECT * FROM answers";
        $result = mysqli_query($con, $sql);
           */
        $U = $_SESSION['U'];
        $Q = $_SESSION['Q'];
        $O = $_SESSION['O'];
        $R = $_SESSION['R'];
     echo "<script type='text/javascript'>
      google.charts.load('current', {packages:['corechart']});
      google.charts.setOnLoadCallback(drawChart);

     function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Typ Osobnosti', 'v�� v�sledek v %'],
          ['Dodržovatel', $U ],
          ['Otázkař', $Q],
          ['Pro druhé', $O],
          ['Rebel', $R]
        ]);



      var options = {
        legend: 'none',
        pieSliceText: 'label',
        title: 'V�� typ osobnosti',
        pieStartAngle: 100,
      };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script> ";
    ?>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

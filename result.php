<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title></title>
    <meta charset='utf-8'>
    <meta name='description' content=''>
    <meta name='keywords' content=''>
    <meta name='author' content=''>
    <meta name='robots' content='all'>
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>
  </head>
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
          ['Dodr�ovatel', $U ],
          ['Ot�zk��', $Q],
          ['Pro druh�', $O],
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

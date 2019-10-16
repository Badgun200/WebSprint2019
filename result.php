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
        $U = 9;
        $Q = 2;
        $O = 3;
        $R = 1;  
     echo "<script type='text/javascript'>
      google.charts.load('current', {packages:['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      
     function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Typ Osobnosti', 'váš výsledek v %'],
          ['Dodržovatel', $U ],
          ['Otázkáø', $Q],
          ['Pro druhé', $O],
          ['Rebel', $R]
        ]);  
        
       

      var options = {
        legend: 'none',
        pieSliceText: 'label',
        title: 'Váš typ osobnosti',
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

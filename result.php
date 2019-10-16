<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang='cs'>
  <?php require 'head.php'; ?>
  <body>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <?php
        $U = $_SESSION['U'];
        $Q = $_SESSION['Q'];
        $O = $_SESSION['O'];
        $R = $_SESSION['R'];
        
     echo "<script type='text/javascript'>
      google.charts.load('current', {packages:['corechart']});
      google.charts.setOnLoadCallback(drawChart);

     function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Typ Osobnosti/ Your type of person', 'váš výsledek v %'],
          ['Dodržovatel / Upholder', $U ],
          ['Otázkář / Questioner', $Q],
          ['Pro druhé / Obliger', $O],
          ['Rebel / Rebel', $R]
        ]);
      var options = {
        legend: 'none',
        pieSliceText: 'label',
        title: 'Váš typ osobnosti /',
        pieStartAngle: 100,
      };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script> ";

    ?>
    <h2>Výsledky</h2>
    <h3>U - Upholder / Dodržovatel</h3>
<p>Nemáš problém dodržovat předsevzetí, máš rád jasnou strukturu, pravidla,
jasně dané postupy, které bez problému dodržuješ. Pokud si dáš předsevzetí dodržíš ho.
Dobře ti fungují seznamu úkolů a plánování aktivit a času. </p>

    <h3>Q - Questioner / Otázkář</h3>
<p>Rád víš, proč bys měl/a něco udělat, pokud to po tobě někdo chce.
Pokud jsi o něčem přesvědčen/a a chceš to, závazek dodržíš. Ostatní sice trochu trápíš hodně dotazy, ale když
ti vysvětlí, proč je dobré nebo nutné něco udělat, tak to uděláš a slíbené dodržíš.</p>

<h3>O - Obliger / Pro druhé</h3>
<p>Pokud něco slíbíš někomu dalšímu dodržíš to, pokud se jen sám pro sebe rozhodneš něco udělat,
 moc dlouho ti to nevydrží. Pomáhá ti pracovat s dalšími lidmi a pokud víš, že na tvé práci závisí někdo další, rozhodně ji uděláš.</p>

<h3>R - Rebel / Rebel</h3>
<p>Pokud něco nechceš dělat, tak tě nikdo nepřiměje. Ani ty sám/sama sebe.
Dost často něco neuděláš, jen proto, že ti to někdo dal za úkol. Ale rozhodně tě baví nové výzvy a sázky a soutěže.</p>

<h2> Results:</h2>

<h3>U - Upholder </h3>
<p>You have zero problems keeping resolutions. Once the task is set you carry it out.
 You like structure, clear instructions, following rules and procedures. To-do lists and planning your time well will work for you quite well.</p>

<h3>Q - Questioner</h3>
<p>You want to understand why you should do what is asked of you or why it is good for you to do something.
You tend to annoy others with your questions, however, if they are able to explain the reason why to do something you will do it.</p>

<h3>O - Obliger</h3>
<p>If you promise someone else to do something, you will keep your promise.
Working with and for others helps you get the job done. However,
if it is something you want to do only for yourself and nobody checks your progress it is a different story. Work in a team and present the results of your work to others.</p>


<h3>R - Rebel </h3>
<p>When you don't feel like doing something nobody can make you. And neither can you.
It might happen that you will not want to do something just because someone else wants you to do it.
 Challenges and bets and competitions are a different story, these you enjoy very much.</p>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([

            [
                {
                    label:'name',
                    type:'string'
                },

                {name:'view',
                type:'number'}

            ],

         <?php
         while ($livre = $req->fetchObject()); {
            echo "['$livre->name', $livre->view],";
         }
         ?>
         
        ]);

        var options = {
          title: 'Vue de la gestion des livres'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }

    </script>
  </head>
  <body>
  <?php
      include 'Database.php';
       $req = $db->query('SELECT * FROM livre');
       ?>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

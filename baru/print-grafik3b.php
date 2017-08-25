<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Layanan Kearsipan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/grafik.css">
</head>

<body>


  <div class="container">
  <h2 style="font-family:front page neue; text-align:center">Grafik Kuesioner</h2>
  <h3 style="font-family:front page neue; text-align:center">Agustus 2017 &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 300 Responden</h3>  
    <div class="container" style="background-color: white; padding-top:5%; padding-bottom:5%;"> 

    <!-- <div class="tabbed_area"> -->
       <table>
          <tr>
            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 1111111111111111111111111111111-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 1 : Syarat Pelayanan Arsip",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert1"));
                chart.draw(view, options);
            }
            </script>
            <div id="grafik_pert1"></div>
            <!-- AKHIR DARI GRAFIK -->
            </th>

            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 2222222222222222222222222222222-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 2 : Prosedur Layanan",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert12"));
                chart.draw(view, options);
            }
            </script>
            <div id="grafik_pert12"></div>
            <!-- AKHIR DARI GRAFIK -->
            </th>
          </tr>

          <tr>
            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 333333333333333333333333333333333-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 3 : Waktu Layanan",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert13"));
                chart.draw(view, options);
            }
            </script>
            <div id="grafik_pert13"></div>
            <!-- AKHIR DARI GRAFIK -->
            </th>

            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 44444444444444444444444444444444444-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 4 : Biaya/Tarif Layanan",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert14"));
                chart.draw(view, options);
            }
            </script>
            <div id="grafik_pert14"></div>
            <!-- AKHIR DARI GRAFIK -->
            </th>
          </tr>

          <tr>
            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 555555555555555555555555555555555555555-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 5 : Petugas Layanan",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert15"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_pert15"></div>
            <!-- AKHIR DARI GRAFIK -->
            </th>

            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 6666666666666666666666666666666666-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 6 : Fasilitas Akses Arsip",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert16"));
                chart.draw(view, options);
            }
            </script>
            <div id="grafik_pert16"></div>
            <!-- AKHIR DARI GRAFIK -->
            </th>
          </tr>

          <tr>
            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 7777777777777777777777777777777-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 7 : Fasilitas layanan dan baca arsip",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert17"));
                chart.draw(view, options);
            }
            </script>
            <div id="grafik_pert17"></div>
            <!-- AKHIR DARI GRAFIK -->
            </th>

            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 8888888888888888888888888888888-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 8 : Fasilitas Referensi Pendukung Layanan",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert18"));
                chart.draw(view, options);
            }
            </script>
            <div id="grafik_pert18"></div>
            <!-- AKHIR DARI GRAFIK -->
            </th>
          </tr>

          <tr>
            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 99999999999999999999999999999999-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 9 : Maklumat Layanan",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert19"));
                chart.draw(view, options);
            }
            </script>
          <div id="grafik_pert19"></div>
            <!-- AKHIR DARI GRAFIK -->
            </th>

            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK 0000000000000000000000000000-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Kuesioner Bagian 10 : Penanganan Pengaduan Layanan",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_pert20"));
                chart.draw(view, options);
            }
            </script>
            <div id="grafik_pert20"></div>
            <!-- AKHIR DARI GRAFIK -->
            </th>
          </tr>

          <tr>
            <th>
            <!-- GRAFIK GRAFIK GRAFIK GRAFIK GRAFIK XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load("current", {packages:['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ["Element", "Density", { role: "style" } ],
                  ['STS', 2, "red"], 
                  ['TS', 1, "blue"],
                  ['R', 4, "green"],
                  ['S', 3, ",yellow"],
                  ['SS', 5, "pink"]
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                 { calc: "stringify",
                                   sourceColumn: 1,
                                   type: "string",
                                   role: "annotation" },
                                 2]);

                var options = {
                  title: "Rekapitulasi Total Bulan ini",
                  width: 550,
                  height: 400,
                  bar: {groupWidth: "95%"},
                  legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("grafik_total2"));
                chart.draw(view, options);
            }
            </script>
            <div id="grafik_total2"></div>
            <!-- AKHIR DARI GRAFIK -->
            </th>
          </tr>


        </table>
    <!-- </div> tabbed area -->
    </div> <!-- container -->
  </div> <!-- container -->



<script type="text/javascript">
  google.charts.load('visualization', '1.0', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

  var options = {
          title: 'My Daily Activities',
      backgroundColor: '#ddd',
      chartArea: {width:500,height:200}
        };

    $(".tabs a[title='content_2']").click()
    $(".tabs a[title='content_1']").click()

    var chart = new      google.visualization.PieChart(document.getElementById('chart'));

         
    chart.draw(data, options);

 var chart1= new      google.visualization.PieChart(document.getElementById('chart1'));

         
    chart1.draw(data, options);
  }





// When the document loads do everything inside here ...
    $(document).ready(function(){
    
    // When a link is clicked
    $("a.tab").click(function () {
      
      
      // switch all tabs off
      $(".active").removeClass("active");
      
      // switch this tab on
      $(this).addClass("active");
      
      // slide all content up
      $(".content").slideUp();
      
      // slide this content up
      var content_show = $(this).attr("title");
      $("#"+content_show).slideDown();
      
    });
  
    });

    function myFunction() {
    window.print();
    }

    window.onload = function() {
      myFunction();
    };

</script>


</body>
</html>